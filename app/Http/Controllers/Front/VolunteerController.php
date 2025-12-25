<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\VolunteerFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class VolunteerController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'full_name' => 'required|string|max:255',
            'age_group' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'city' => 'required|string',
            'languages' => 'nullable|string',

            'skills' => 'nullable|array',
            'other_skill' => 'nullable|string',

            'hours_per_week' => 'required|string',
            'preferred_times' => 'nullable|string',
            'volunteer_style' => 'nullable|string',

            'local_volunteer' => 'nullable|boolean',
            'transportation' => 'nullable|boolean',
            'coverage_areas' => 'nullable|string',

            'emergency_name' => 'required|string',
            'emergency_phone' => 'required|string',
            'emergency_relation' => 'required|string',
        ]);

        Mail::to('volunteers@amaacouncil.com')
            ->send(new VolunteerFormMail($data));

        return back()->with('success', __('volunteer.success'));
    }
}
