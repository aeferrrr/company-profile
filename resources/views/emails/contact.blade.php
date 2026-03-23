<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pesan Baru</title>
</head>
<body style="margin:0; padding:0; background:#f4f6f9; font-family:Arial, sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0">
<tr>
<td align="center">

<table width="600" style="background:#ffffff; margin:30px 0; border-radius:10px; overflow:hidden; box-shadow:0 5px 20px rgba(0,0,0,0.1);">

    <!-- HEADER -->
    <tr>
        <td style="background:#0d6efd; color:#fff; padding:20px;">
            <h2 style="margin:0;">📩 Pesan Baru Masuk</h2>
            <small>KPCM Industrial Estate</small>
        </td>
    </tr>

    <!-- CONTENT -->
    <tr>
        <td style="padding:25px; color:#333;">

            <p>Anda menerima pesan dari website:</p>

            <table width="100%" cellpadding="8">
                <tr>
                    <td><strong>Nama</strong></td>
                    <td>{{ $data['name'] }}</td>
                </tr>
                <tr>
                    <td><strong>Email</strong></td>
                    <td>{{ $data['email'] }}</td>
                </tr>
                <tr>
                    <td><strong>WhatsApp</strong></td>
                    <td>{{ $data['phone'] ?? '-' }}</td>
                </tr>
                <tr>
                    <td><strong>Kepentingan</strong></td>
                    <td>{{ $data['subject'] }}</td>
                </tr>
            </table>

            <div style="margin-top:20px; padding:15px; background:#f8f9fa; border-left:4px solid #0d6efd;">
                <strong>Pesan:</strong>
                <p style="white-space:pre-line;">
                    {{ $data['message'] }}
                </p>
            </div>

        </td>
    </tr>

    <!-- FOOTER -->
    <tr>
        <td style="background:#f1f1f1; padding:15px; text-align:center; font-size:12px; color:#777;">
            Email ini dikirim otomatis dari website KPCM Industrial Estate
        </td>
    </tr>

</table>

</td>
</tr>
</table>

</body>
</html>