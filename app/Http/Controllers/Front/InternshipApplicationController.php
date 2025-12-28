<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\InternshipApplicationSubmitted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InternshipApplicationController extends Controller
{
        public function store(Request $request)
    {
        $data = $request->validate([
            // Basic
            'full_name' => 'required|string|max:150',
            'email' => 'required|email',
            'phone' => 'required|string|max:50',
            'location' => 'required|string|max:150',
            'timezone' => 'nullable|string',
            'languages' => 'required|array',
            'linkedin' => 'nullable|url',
            'portfolio' => 'nullable|url',
            'status' => 'required|string',
            'university' => 'required|string|max:150',
            'major' => 'required|string|max:150',
            'academic_year' => 'nullable|string',
            'gpa' => 'nullable|string|max:10',
            'required_for_graduation' => 'required|in:Yes,No',
            'university_letter' => 'required_if:required_for_graduation,Yes|file|mimes:pdf,jpg,png',
            // 'required_hours' => 'required_if:required_for_graduation,Yes|string|max:50',
            'primary_track' => 'required|string',
            'secondary_track' => 'nullable|string',
            'skills' => 'required|array',
            'tools' => 'nullable|string|max:255',
            'strengths' => 'nullable|string',
            'start_date' => 'required|date',
            'duration' => 'required|string',
            'hours_per_week' => 'required|string',
            'cv' => 'required|file|mimes:pdf,doc,docx',
            'code_of_conduct' => 'required',
            'privacy' => 'required',

            'signature' => 'required|string|max:150',
            'signature_date' => 'required|date',
        ]);


        if ($request->hasFile('cv')) {
            $data['cv'] = $request->file('cv')->store('internships/cv', 'public');
        }

        if ($request->hasFile('university_letter')) {
            $data['university_letter'] = $request->file('university_letter')
                ->store('internships/university_letters', 'public');
        }


        Mail::to("internships@amaacouncil.com")
            ->send(new InternshipApplicationSubmitted($data));



        return redirect()->back()->with('success', __('form.application_sent'));
    }
}
