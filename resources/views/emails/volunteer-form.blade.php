<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AMAA Council – Volunteer Application</title>
</head>
<body style="margin:0;padding:0;background-color:#f4f6f8;font-family:Arial, Helvetica, sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" style="padding:30px 0;">
    <tr>
        <td align="center">

            <!-- Container -->
            <table width="600" cellpadding="0" cellspacing="0"
                   style="background:#ffffff;border-radius:10px;overflow:hidden;">

                <!-- Header -->
                <tr>
                    <td style="background:#e5c979;padding:24px;text-align:center;">
                        <img src="{{ asset('front/img/home/amaac_logo-removebg-preview.png') }}"
                             alt="AMAA Council"
                             style="max-height:55px;">
                    </td>
                </tr>

                <!-- Title -->
                <tr>
                    <td style="padding:24px 32px 10px;">
                        <h2 style="margin:0;color:#1e2a3a;font-size:22px;">
                            New Volunteer Application
                        </h2>
                        <p style="margin:6px 0 0;color:#6c757d;font-size:14px;">
                            A new volunteer form has been submitted through amaacouncil.com
                        </p>
                    </td>
                </tr>

                <!-- Divider -->
                <tr>
                    <td style="padding:0 32px;">
                        <hr style="border:none;border-top:1px solid #e5e7eb;">
                    </td>
                </tr>

                <!-- Content -->
                <tr>
                    <td style="padding:24px 32px;">

                        <!-- Section -->
                        <h4 style="margin:0 0 12px;color:#1e2a3a;">Basic Information</h4>

                        @include('emails.partials.row', ['label' => 'Full Name', 'value' => $data['full_name']])
                        @include('emails.partials.row', ['label' => 'Age Group', 'value' => $data['age_group']])
                        @include('emails.partials.row', ['label' => 'Email', 'value' => $data['email']])
                        @include('emails.partials.row', ['label' => 'Phone', 'value' => $data['phone']])
                        @include('emails.partials.row', ['label' => 'City', 'value' => $data['city']])

                        @if(!empty($data['languages']))
                            @include('emails.partials.row', ['label' => 'Languages', 'value' => $data['languages']])
                        @endif

                        <hr style="border:none;border-top:1px solid #e5e7eb;margin:20px 0;">

                        <!-- Skills -->
                        <h4 style="margin:0 0 12px;color:#1e2a3a;">Skills</h4>

                        @if(!empty($data['skills']))
                            <ul style="margin:0 0 12px 18px;padding:0;color:#374151;">
                                @foreach($data['skills'] as $skill)
                                    <li>{{ __('volunteer.' . $skill) }}</li>
                                @endforeach
                            </ul>
                        @else
                            <p style="margin:0;color:#6b7280;">No skills selected</p>
                        @endif

                        @if(!empty($data['other_skill']))
                            @include('emails.partials.row', ['label' => 'Other Skill', 'value' => $data['other_skill']])
                        @endif

                        <hr style="border:none;border-top:1px solid #e5e7eb;margin:20px 0;">

                        <!-- Availability -->
                        <h4 style="margin:0 0 12px;color:#1e2a3a;">Availability</h4>

                        @include('emails.partials.row', ['label' => 'Hours per week', 'value' => $data['hours_per_week']])
                        @include('emails.partials.row', ['label' => 'Preferred Times', 'value' => $data['preferred_times'] ?? '-'])
                        @include('emails.partials.row', ['label' => 'Volunteer Style', 'value' => $data['volunteer_style'] ?? '-'])

                        <hr style="border:none;border-top:1px solid #e5e7eb;margin:20px 0;">

                        <!-- Emergency -->
                        <h4 style="margin:0 0 12px;color:#1e2a3a;">Emergency Contact</h4>

                        @include('emails.partials.row', ['label' => 'Name', 'value' => $data['emergency_name']])
                        @include('emails.partials.row', ['label' => 'Phone', 'value' => $data['emergency_phone']])
                        @include('emails.partials.row', ['label' => 'Relation', 'value' => $data['emergency_relation']])

                    </td>
                </tr>

                <!-- Footer -->
                <tr>
                    <td style="background:#f9fafb;padding:18px 32px;text-align:center;">
                        <p style="margin:0;font-size:12px;color:#6b7280;">
                            © {{ date('Y') }} AMAA Council – All rights reserved
                        </p>
                        <p style="margin:4px 0 0;font-size:12px;">
                            <a href="https://amaacouncil.com"
                               style="color:#1e2a3a;text-decoration:none;">
                                amaacouncil.com
                            </a>
                        </p>
                    </td>
                </tr>

            </table>
        </td>
    </tr>
</table>

</body>
</html>
