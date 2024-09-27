<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Enquiry</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>

<body bgcolor="#f4f4f4"
    style="margin:10px 0;background-color: #ffffff; font-family: 'Fira Sans', Helvetica, Arial, sans-serif; font-size: 15px; width: 100% !important; padding: 0; line-height: 1.5;">
    <div style="max-width:700px;margin:auto;padding:10px">
        <table width="100%" style="margin: auto">
            <thead>
                <tr>
                    <td>
                        <table width="100%" style="border:1px solid;background:beige">
                            <tr>
                                <td>
                                    <div class="logo" style="text-align:center;">
                                        <img width="100" height="100"
                                            src="{{ url('public/web/assets/images/swagat.png') }}" alt="logo">
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <table width="100%" style="border:1px solid;padding:20px;margin-top:50px">
                            <tr>
                                <td colspan="2" style="text-align: left;">
                                    <p style="color: #505050;font-size: 0.9rem;margin: 0 0 10px;"><b>Company :</b>
                                        {{ $company }}</p>
                                    <p style="color: #505050;font-size: 0.9rem;margin: 0 0 10px;"><b>Name :</b>
                                        {{ $name }}</p>
                                    <p style="color: #505050;font-size: 0.9rem;margin: 0 0 10px;"><b>Email :</b>
                                        {{ $email }}</p>
                                    <p style="color: #505050;font-size: 0.9rem;margin: 0 0 10px;"><b>Phone :</b>
                                        {{ $phone }}</p>
                                    <p style="color: #505050;font-size: 0.9rem;margin: 0 0 10px;"><b>City :</b>
                                        {{ $city }}</p>
                                    <p style="color: #505050;font-size: 0.9rem;margin: 0 0 10px;"><b>Country :</b>
                                        {{ $country }}</p>
                                    <p style="color: #505050;font-size: 0.9rem;margin: 0 0 10px;"><b>Postcode :</b>
                                        {{ $postcode }}</p>
                                    <p style="color: #505050;font-size: 0.9rem;margin: 0 0 10px;"><b>Website :</b>
                                        {{ $website }}</p>
                                    <p style="color: #505050;font-size: 0.9rem;margin: 0 0 10px;"><b>Message :</b>
                                        {{ $mail_message }}</p>
                                </td>
                            </tr>
                        </table>
                        <table width="100%">
                            <tr>
                                <td>
                                    <div style="text-align:center;padding: 50px 0 0;">
                                        <p style="color: #505050;font-size: 1.1rem;margin: 0;">
                                            © Swagat Paper Pvt. Ltd.
                                            {{ Carbon\Carbon::now()->format('Y') }}
                                        </p>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </thead>
        </table>
    </div>
</body>

</html>
