<!DOCTYPE html>
<html>

<body style="background:#f4f6f8;font-family:Arial;padding:30px">

    <table width="100%" align="center">
        <tr>
            <td align="center">

                <table width="600" style="background:#fff;border-radius:10px;padding:30px">
                    <tr>
                        <td style="background-color:#e5c979; padding:20px; text-align:center;">
                            <img src="{{ asset('front/img/home/amaac_logo-removebg-preview.png') }}" alt="AMAA Council"
                                style="max-height:60px;">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <h2 style="color:#0B3A53;margin-bottom:10px">
                                Membership Application
                            </h2>
                            <p style="color:#777;font-size:14px">
                                A new application has been submitted via the website.
                            </p>
                            <hr>
                        </td>
                    </tr>

                    <tr>
                        <td>

                            <h4 style="color:#0B3A53">Basic Information</h4>
                            <p><strong>Name:</strong> {{ $data['full_name'] }}</p>
                            <p><strong>Email:</strong> {{ $data['email'] }}</p>
                            <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
                            <p><strong>Location:</strong> {{ $data['location'] }}</p>
                            <p><strong>Timezone:</strong> {{ $data['timezone'] ?? '-' }}</p>
                            <p><strong>Languages:</strong>
                                {{ isset($data['languages']) ? implode(', ', $data['languages']) : '-' }}</p>
                            <p><strong>LinkedIn:</strong> {{ $data['linkedin'] ?? '-' }}</p>

                            <hr>

                            <h4 style="color:#0B3A53">Professional Profile</h4>
                            <p><strong>Current Title:</strong> {{ $data['current_title'] }}</p>
                            <p><strong>Organization:</strong> {{ $data['organization'] ?? '-' }}</p>
                            <p><strong>Experience:</strong> {{ $data['experience_years'] }}</p>
                            <p><strong>Expertise:</strong>
                                {{ isset($data['expertise']) ? implode(', ', $data['expertise']) : '-' }}</p>

                            @if (!empty($data['bio']))
                                <p><strong>Bio:</strong><br>{{ $data['bio'] }}</p>
                            @endif

                            <hr>

                            <h4 style="color:#0B3A53">Contribution & Availability</h4>
                            <p><strong>Contribution Types:</strong>
                                {{ isset($data['contribution_types']) ? implode(', ', $data['contribution_types']) : '-' }}
                            </p>
                            <p><strong>Committees:</strong>
                                {{ isset($data['committees']) ? implode(', ', $data['committees']) : '-' }}</p>
                            <p><strong>Hours / Month:</strong> {{ $data['hours_per_month'] }}</p>
                            <p><strong>Participation:</strong> {{ $data['participation_mode'] ?? '-' }}</p>
                            <p><strong>Travel:</strong> {{ $data['travel_availability'] ?? '-' }}</p>

                            @if (!empty($data['initiative']))
                                <p><strong>Initiative:</strong><br>{{ $data['initiative'] }}</p>
                            @endif

                            <hr>

                            <h4 style="color:#0B3A53">Declaration</h4>
                            <p><strong>Signature:</strong> {{ $data['signature'] ?? '-' }}</p>
                            <p><strong>Date:</strong> {{ $data['signature_date'] ?? '-' }}</p>

                        </td>
                    </tr>

                    <tr>
                        <td align="center" style="padding-top:20px;color:#777;font-size:12px">
                            © {{ date('Y') }} AMAA Council – Volunteer Form Submission
                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>

</html>
