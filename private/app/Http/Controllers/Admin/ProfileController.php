<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProfileController extends AdminController
{
    /**
     * Set page meta values
     * @var array
     */
    protected $pageMeta = [
        'title' => 'Profil',
        'desc' => 'profil bilgilerini görüntüle, şifre değiştir, kişisel bilgileri güncelle',
    ];

    /**
     * Set model localizations
     */
    protected $modelMeta = [
        'name' => 'profile',
        'singularTitle' => 'Profil',
    ];

    /**
     * Show the profile dashboard
     *
     * @param null $row
     * @return Response
     */
    public function edit($row = null)
    {
        $row = Auth::user();

        return parent::edit($row);
    }

    /**
     * Update user datas
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(Request $request)
    {
        $row = Auth::user();

        // Update
        $row->first_name = $request->first_name;
        $row->last_name = $request->last_name;
        $row->email = $request->email;

        if (!is_null($request->password) && !is_null($request->password_confirmation)) {
            if ($request->password && $request->password_confirmation) {
                $row->password = bcrypt($request->password);
            }
        }

        // Update
        $row->update();

        // Set status
        $this->generateFlashMessage('success', 'Profil Güncellendi');

        return redirect()->back();
    }
}
