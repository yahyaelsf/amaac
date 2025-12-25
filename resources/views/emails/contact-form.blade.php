<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Contact Message</title>
</head>
<body style="margin:0; padding:0; background-color:#f4f6f8; font-family: Arial, Helvetica, sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f4f6f8; padding:30px 0;">
    <tr>
        <td align="center">

            <!-- Container -->
            <table width="600" cellpadding="0" cellspacing="0"
                style="background-color:#ffffff; border-radius:8px; overflow:hidden; box-shadow:0 4px 12px rgba(0,0,0,0.08);">

                <!-- Header / Logo -->
                <tr>
                    <td style="background-color:#e5c979; padding:20px; text-align:center;">
                        <img src="{{ asset('front/img/home/amaac_logo-removebg-preview.png') }}"
                             alt="AMAA Council"
                             style="max-height:60px;">
                    </td>
                </tr>

                <!-- Title -->
                <tr>
                    <td style="padding:25px 30px 10px;">
                        <h2 style="margin:0; color:#0B3A53; font-size:22px;">
                            New Contact Message
                        </h2>
                        <p style="margin:5px 0 0; color:#777; font-size:14px;">
                            A new message has been submitted via the website contact form.
                        </p>
                    </td>
                </tr>

                <!-- Divider -->
                <tr>
                    <td style="padding:0 30px;">
                        <hr style="border:none; border-top:1px solid #e5e7eb;">
                    </td>
                </tr>

                <!-- Contact Details -->
                <tr>
                    <td style="padding:20px 30px;">
                        <table width="100%" cellpadding="0" cellspacing="0">

                            <tr>
                                <td style="padding:8px 0; color:#555; font-size:14px;">
                                    <strong>Name:</strong>
                                </td>
                                <td style="padding:8px 0; color:#111; font-size:14px;">
                                    {{ $data['name'] }}
                                </td>
                            </tr>

                            <tr>
                                <td style="padding:8px 0; color:#555; font-size:14px;">
                                    <strong>Email:</strong>
                                </td>
                                <td style="padding:8px 0; color:#111; font-size:14px;">
                                    {{ $data['email'] }}
                                </td>
                            </tr>

                            <tr>
                                <td style="padding:8px 0; color:#555; font-size:14px;">
                                    <strong>Subject:</strong>
                                </td>
                                <td style="padding:8px 0; color:#111; font-size:14px;">
                                    {{ $data['subject'] }}
                                </td>
                            </tr>

                        </table>
                    </td>
                </tr>

                <!-- Message -->
                <tr>
                    <td style="padding:0 30px 30px;">
                        <p style="margin:0 0 8px; color:#555; font-size:14px;">
                            <strong>Message:</strong>
                        </p>
                        <div style="background-color:#f9fafb; border-left:4px solid #0B3A53; padding:15px; color:#333; font-size:14px; line-height:1.7;">
                            {{ $data['message'] }}
                        </div>
                    </td>
                </tr>

                <!-- Footer -->
                <tr>
                    <td style="background-color:#f4f6f8; padding:15px 30px; text-align:center;">
                        <p style="margin:0; font-size:12px; color:#777;">
                            © {{ date('Y') }} AMAA Council
                            <br>
                            This message was sent from the official website contact form.
                        </p>
                    </td>
                </tr>

            </table>
            <!-- End Container -->

        </td>
    </tr>
</table>

</body>
</html>
