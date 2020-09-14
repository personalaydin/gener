<?php

namespace App\Http\Controllers\Admin;

use App\Models\Entities\Role;
use App\Models\Entities\Permission;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RoleController extends AdminController
{
    /**
     * Set page meta values
     * @var array
     */
    protected $pageMeta = [
        'title' => 'Roller',
        'desc' => 'yeni rol ekle, düzenle, sil',
    ];

    /**
     * Set model localizations
     */
    protected $modelMeta = [
        'name' => 'role',
        'singularTitle' => 'Rol',
        'pluralTitle' => 'Roller',
        'deleteTitle' => 'Rolü',
    ];

    /**
     * Store and Update process
     * @param $request
     * @param $type
     * @param null $id
     * @return RedirectResponse
     */
    public function process($request, $type, $id = null)
    {
        if ($type == 'store') {
            $row = new Role;
        } else {
            $row = Role::findOrFail($id);
        }

        // Update
        $row->title = $request->title;

        if ($request->name) {
            $row->name = str_slug($request->name);
        } else {
            $row->name = str_slug($request->title);
        }

        // Sync selected permissions
        $row->syncPermissions($request->permissions);

        return $this->processAfter($row, $type);
    }

    /**
     * Display a listing of the resource.
     *
     * @param null $rows
     * @return Response
     */
    public function index($rows = null)
    {
        $rows = Role::all();

        return parent::index($rows);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param null $row
     * @return Response
     */
    public function create($row = null)
    {
        $row = new Role;

        // Generate checkbox inputs and share this all view
        $permissions = Permission::all();
        $permissionInputs = [];
        $i = 0;
        foreach ($permissions as $permission) {
            $permissionInputs[$i]['name'] = 'permissions[]';
            $permissionInputs[$i]['value'] = $permission->getName();
            $permissionInputs[$i]['label'] = $permission->getTitle();
            $permissionInputs[$i]['class'] = 'col-xs-12 col-sm-6 col-md-4';
            $i++;
        }
        view()->share('permissionInputs', $permissionInputs);

        return parent::create($row);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        return $this->process($request, 'store');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $row = Role::findOrFail($id);

        // Generate checkbox inputs and share this all view
        $permissions = Permission::all();
        $permissionInputs = [];
        $i = 0;
        foreach ($permissions as $permission) {
            $permissionInputs[$i]['name'] = 'permissions[]';
            $permissionInputs[$i]['value'] = $permission->getName();
            $permissionInputs[$i]['label'] = $permission->getTitle();
            $permissionInputs[$i]['class'] = 'col-xs-12 col-sm-6 col-md-4';
            $permissionInputs[$i]['checked'] = (isset($row) ? $row->permissions->contains($permission) : 'false');
            $i++;
        }
        view()->share('permissionInputs', $permissionInputs);

        return parent::edit($row);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        return $this->process($request, 'update', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $row = Role::findOrFail($id);

        return parent::destroy($row);
    }

    /**
     * Hard Delete confirm the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function hardDeleteConfirmation($id)
    {
        $row = Role::findOrFail($id);

        return parent::hardDeleteConfirmation($row);
    }

    /**
     * Delete the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function hardDelete($id)
    {
        return $this->destroy($id);
    }
}
