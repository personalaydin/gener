<?php

namespace App\Http\Controllers\Web;

use App\Mail\Contact as MailContact;
use App\Models\Entities\Contact;
use Exception;
use Illuminate\Http\Request;
use Mail;

class FormController extends WebController
{
    /**
     * Contact
     * @param Request $request
     * @return string
     */
    public function contact(Request $request)
    {
        $request->validate($fields = [
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'subject' => 'required',
            // 'information_text' => 'required',
        ], [], [
            'name' => 'Ad',
            'surname' => 'Soyad',
            'email' => 'E-posta',
            'message' => 'Mesaj',
            'subject' => 'Konu',
            // 'information_text' => 'Bilgilendirme Metni',
        ]);

        // Send Email
        if (config('app.debug') || config('app.env') == 'local') {
            $to = [
                [
                    'email' => 'burak@enustkat.com.tr',
                    'name' => 'Burak Turan',
                ]
            ];
        } else {
            $to = [
                [
                    'email' => setting()->get('email'),
                    'name' => config('app.name'),
                ],
            ];
        }

        try {
            Mail::to($to)->send(new MailContact($request));
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ]);
        }

        return response()->json([
            'success' => true,
        ]);
    }
}
