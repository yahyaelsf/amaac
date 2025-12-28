<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Internship Application – AMAAC</title>
</head>
<body style="margin:0;padding:0;background:#f4f6f8;font-family:Arial,Helvetica,sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0">
    <tr>
        <td align="center" style="padding:30px 0;">
            <table width="600" cellpadding="0" cellspacing="0" style="background:#ffffff;border-radius:8px;overflow:hidden;">

                {{-- Header --}}
                <tr>
                    <td style="background:#0d3b66;padding:20px;text-align:center;color:#ffffff;">
                        <h2 style="margin:0;">AMAAC Internship Application</h2>
                        <p style="margin:5px 0 0;font-size:14px;">
                            American Muslim & Arab Affairs Council
                        </p>
                    </td>
                </tr>

                {{-- Body --}}
                <tr>
                    <td style="padding:25px;color:#333333;font-size:14px;line-height:1.6;">

                        @if($isApplicant ?? false)
                            <p>
                                Dear <strong>{{ $data['full_name'] }}</strong>,
                            </p>

                            <p>
                                Thank you for applying to the <strong>AMAAC Internship Program</strong>.
                                We have successfully received your application.
                            </p>

                            <p>
                                Our team will review your submission and contact you if you are shortlisted
                                for the next steps.
                            </p>

                            <p>
                                We appreciate your interest in contributing to AMAAC’s mission.
                            </p>

                            <p style="margin-top:30px;">
                                Sincerely,<br>
                                <strong>AMAAC Team</strong>
                            </p>
                        @else
                            <h3 style="margin-top:0;color:#0d3b66;">
                                New Internship Application Received
                            </h3>

                            <table width="100%" cellpadding="6" cellspacing="0"
                                   style="border-collapse:collapse;font-size:13px;">

                                <tr>
                                    <td width="35%"><strong>Full Name:</strong></td>
                                    <td>{{ $data['full_name'] }}</td>
                                </tr>

                                <tr>
                                    <td><strong>Email:</strong></td>
                                    <td>{{ $data['email'] }}</td>
                                </tr>

                                <tr>
                                    <td><strong>Phone:</strong></td>
                                    <td>{{ $data['phone'] }}</td>
                                </tr>

                                <tr>
                                    <td><strong>Location:</strong></td>
                                    <td>{{ $data['location'] }}</td>
                                </tr>

                                <tr>
                                    <td><strong>Primary Track:</strong></td>
                                    <td>{{ $data['primary_track'] }}</td>
                                </tr>

                                <tr>
                                    <td><strong>Secondary Track:</strong></td>
                                    <td>{{ $data['secondary_track'] ?? '-' }}</td>
                                </tr>

                                <tr>
                                    <td><strong>Skills:</strong></td>
                                    <td>{{ implode(', ', $data['skills']) }}</td>
                                </tr>

                                <tr>
                                    <td><strong>Tools:</strong></td>
                                    <td>{{ $data['tools'] ?? '-' }}</td>
                                </tr>

                                <tr>
                                    <td><strong>Start Date:</strong></td>
                                    <td>{{ $data['start_date'] }}</td>
                                </tr>

                                <tr>
                                    <td><strong>Hours / Week:</strong></td>
                                    <td>{{ $data['hours_per_week'] }}</td>
                                </tr>
                            </table>

                            <p style="margin-top:20px;font-size:12px;color:#777;">
                                Please review the application details and follow up as needed.
                            </p>
                        @endif

                    </td>
                </tr>

                {{-- Footer --}}
                <tr>
                    <td style="background:#f0f2f5;padding:15px;text-align:center;font-size:12px;color:#666;">
                        © {{ date('Y') }} AMAAC — All Rights Reserved
                    </td>
                </tr>

            </table>
        </td>
    </tr>
</table>

</body>
</html>
