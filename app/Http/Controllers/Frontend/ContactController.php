<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactModel;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact');
    }

    public function userQuery(Request $request)
    {
        $contactModel = new ContactModel();
        $validations = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        if ($validations) {
            $contactModel->userName = $request['name'];
            $contactModel->userEmail = $request['email'];
            $contactModel->userSubject = $request['subject'];
            $contactModel->userMessage = $request['message'];
            $test = $contactModel->save();
            // echo "<pre>";
            // print_r($test);
            // die;
            redirect(url('/contact'));
        } else {
            redirect(url('/contact'));
        }

    }
}