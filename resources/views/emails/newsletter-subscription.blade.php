<!DOCTYPE html>
<html>

<body style="margin:0;background:#f4f6f8;font-family:Arial,sans-serif;">

    <table width="100%" cellpadding="0" cellspacing="0" style="padding:30px 0;">
        <tr>
            <td align="center">

                <table width="560" style="background:#fff;border-radius:8px;overflow:hidden;">

                    <tr>
                        <td style="background:#1e2a3a;padding:20px;text-align:center;">
                            <h2 style="margin:0;color:#ffffff;">AMAA Council</h2>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:28px;">
                            <h3 style="margin-top:0;color:#1e2a3a;">
                                New Newsletter Subscription
                            </h3>

                            <p style="color:#374151;font-size:15px;">
                                A new user has subscribed to the AMAA Council newsletter.
                            </p>

                            <table width="100%" style="margin-top:15px;">
                                <tr>
                                    <td style="color:#6b7280;width:120px;">Email</td>
                                    <td style="font-weight:bold;color:#111827;">
                                        {{ $email }}
                                    </td>
                                </tr>
                            </table>

                            <p style="margin-top:25px;color:#6b7280;font-size:13px;">
                                Submitted on {{ now()->format('F d, Y – H:i') }}
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <td style="background:#f9fafb;padding:15px;text-align:center;font-size:12px;color:#6b7280;">
                            © {{ date('Y') }} AMAA Council
                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>

</html>
