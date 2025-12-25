<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
     public function send(Request $request)
        {
            $data = $request->validate([
                'name'    => 'required|string|max:100',
                'email'   => 'required|email|max:100',
                'subject' => 'required|string|max:100',
                'message' => 'required|string|max:5000',
            ]);

            // الإيميل اللي بدك توصله الرسائل
            $toEmail = 'inquiries@amaacouncil.com';

            Mail::to($toEmail)->send(new ContactFormMail($data));

            return back()->with('success', 'Message sent successfully');
            // return back()->with('success', __('general.contact_page.form.success'));
        }
}
