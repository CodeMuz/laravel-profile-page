<?php

namespace App\Http\Controllers;

use Mail;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use GuzzleHttp\Client;

class UserController extends Controller {

    /**
     * Send an e-mail contact to the host.
     *
     * @param  Request $request
     * @return null
     */
    public function sendContactEmail(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name'    => 'required|max:255',
            'email'   => 'required|max:255',
            'subject' => 'required|max:255',
            'message' => 'required|max:1000'
        ]);

        if ($validator->fails()) {
            return redirect('/contact')
                ->withInput()
                ->withErrors($validator);
        }

        $client = new Client();
        $res = $client->request('POST', 'https://www.google.com/recaptcha/api/siteverify', [
            'form_params' => [
                'secret'   => env('NOCAPTCHA_SECRET'),
                'response' => $_POST['g-recaptcha-response']
            ]
        ]);

        if ($res->getStatusCode() == 200) {

            $result = json_decode($res->getBody());

            //Send Email if check is ok
            if ($result->success == true) {

                $email = new \stdClass();
                $email->name = $request->name;
                $email->from = $request->email;
                $email->subject = $request->subject;
                $email->message = $request->message;

                Mail::send('emails.contact_email', ['body' => $email->message], function ($m) use ($email) {

                    $m->from($email->from, $email->name);

                    //Not needed. All email is routing to app owner via config/mail.php
                    //$m->to('mrwynnes@gmail.com', $email->name);

                    $m->subject($email->subject);
                });

                $request->session()->flash('alert-success', 'Your message has been sent successfully!');

            } else {
                $request->session()->flash('alert-danger', 'CAPTCHA was entered incorrectly');
            }
        }

        return redirect('/contact');

    }
}