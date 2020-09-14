<?php

namespace App\Http\Controllers\Admin;

use App\Models\Entities\Sentence;
use Illuminate\Http\Request;

class SentenceController extends AdminController
{
    /**
     * Set page meta values
     * @var array
     */
    protected $pageMeta = [
        'title' => 'Cümleler',
        'desc' => 'yeni hizmet ekle, düzenle, sırala, sil',
    ];

    /**
     * Set model localizations
     */
    protected $modelMeta = [
        'name' => 'sentence',
        'singularTitle' => 'Cümle',
        'pluralTitle' => 'Cümleler',
        'deleteTitle' => 'Cümleyi',
    ];

    /**
     * Store and Update process
     * @param $request
     * @param $type
     * @param null $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function process($request, $type, $id = null)
    {
        if ($type == 'store') {
            $row = new Sentence;
        } else {
            $row = Sentence::withTrashed()->findOrFail($id);
        }

        // Set Fields
        $row->fill($request->all());

        // Set name field
        if (auth()->user()->can('admin.'.$this->modelMeta['name'].'.create')) {
            $row->name = str_slug($request->name, '-', 'tr');
        }

        return $this->processAfter($row, $type);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($rows = null)
    {
        $rows = Sentence::get();

        return parent::index($rows);
    }

    /**
     * Display soft deleted a listing of the resource.
     *
     * @param null $rows
     * @return \Illuminate\Http\Response
     */
    public function trash($rows = null)
    {
        $rows = Sentence::onlyTrashed()->get();

        return parent::trash($rows);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param null $row
     * @return \Illuminate\Http\Response
     */
    public function create($row = null)
    {
        $row = new Sentence;

        return parent::create($row);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        return $this->process($request, 'store');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Sentence::withTrashed()->findOrFail($id);

        return parent::edit($row);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        return $this->process($request, 'update', $id);
    }

    /**
     * Soft Delete confirm the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteConfirmation($id)
    {
        $row = Sentence::findOrFail($id);

        return parent::deleteConfirmation($row);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Sentence::findOrFail($id);

        return parent::destroy($row);
    }

    /**
     * Hard Delete confirm the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hardDeleteConfirmation($id)
    {
        $row = Sentence::withTrashed()->findOrFail($id);

        return parent::hardDeleteConfirmation($row);
    }

    /**
     * Delete the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hardDelete($id)
    {
        $row = Sentence::withTrashed()->findOrFail($id);

        return parent::hardDelete($row);
    }

    /**
     * Restore confirm the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restoreConfirmation($id)
    {
        $row = Sentence::withTrashed()->findOrFail($id);

        return parent::restoreConfirmation($row);
    }

    /**
     * Delete the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        $row = Sentence::withTrashed()->findOrFail($id);

        return parent::restore($row);
    }
}
