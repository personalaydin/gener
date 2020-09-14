<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Response;

class DashBoardController extends AdminController
{
    /**
     * Set page meta values
     * @var array
     */
    protected $pageMeta = [
        'title' => 'Başlangıç',
        'desc' => 'hoşgeldiniz!',
    ];

    /**
     * Show the application dashboard.
     *
     * @param null $rows
     * @return Response
     */
    public function index($rows = null)
    {
        return view('admin.home.index');
    }
}
