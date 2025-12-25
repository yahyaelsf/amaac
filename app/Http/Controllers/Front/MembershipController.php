<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\MembershipFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MembershipController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'full_name' => 'required|string|max:150',
            'email' => 'required|email',
            'phone' => 'required|string|max:50',
            'location' => 'required|string|max:150',
            'timezone' => 'nullable|string',
            'languages' => 'nullable|array',
            'linkedin' => 'nullable|url',

            'current_title' => 'required|string',
            'organization' => 'nullable|string',
            'experience_years' => 'required|string',
            'expertise' => 'nullable|array',
            'bio' => 'nullable|string',

            'contribution_types' => 'nullable|array',
            'committees' => 'nullable|array',
            'initiative' => 'nullable|string',

            'hours_per_month' => 'required|string',
            'participation_mode' => 'nullable|string',
            'travel_availability' => 'nullable|string',

            'references' => 'nullable|string',
            'links' => 'nullable|string',

            'signature' => 'nullable|string',
            'signature_date' => 'nullable|date',

            'photo' => 'nullable|image|max:2048',
            'cv' => 'nullable|file|mimes:pdf,doc,docx|max:4096',
        ]);

        // ملفات
        $attachments = [];
        if ($request->hasFile('cv')) {
            $attachments['cv'] = $request->file('cv');
        }
        if ($request->hasFile('photo')) {
            $attachments['photo'] = $request->file('photo');
        }

        Mail::to('membership@amaacouncil.com')
            ->send(new MembershipFormMail($data, $attachments));

        return back()->with('success', __('form.success'));
    }
}
