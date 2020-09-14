<?php

namespace App\Http\Controllers\Admin;

use App\Models\Entities\Permission;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PermissionController extends AdminController
{
    /**
     * Set page meta values
     * @var array
     */
    protected $pageMeta = [
        'title' => 'Yetkiler',
        'desc' => 'yeni yetki ekle, düzenle, sil',
    ];

    /**
     * Set model localizations
     */
    protected $modelMeta = [
        'name' => 'permission',
        'singularTitle' => 'Yetki',
        'pluralTitle' => 'Yetkiler',
        'deleteTitle' => 'Yetkiyi',
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
            $row = new Permission;
        } else {
            $row = Permission::findOrFail($id);
        }

        // Update
        $row->title = $request->title;
        $row->name = str_slug($request->name, '.');

        if ($request->name) {
            $row->name = str_slug($request->name, '.');
        } else {
            $row->name = str_slug($request->title, '.');
        }

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
        $rows = Permission::all();

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
        $row = new Permission;

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
        $row = Permission::findOrFail($id);

        return parent::edit($row);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
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
        $row = Permission::findOrFail($id);

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
        $row = Permission::findOrFail($id);

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
