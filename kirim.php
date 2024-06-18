<?php
// pastikan path ke PHPMailer benar
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tangkap data yang dikirimkan melalui formulir
    $nama = $_POST['name'];
    $email = $_POST['email'];
    $no_hp = $_POST['hp'];
    $rusun = $_POST['rusun'];

    // Konfigurasi PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com'; // Ganti dengan alamat SMTP server Anda
        $mail->SMTPAuth   = true;
        $mail->Username   = 'marcothephoenix769@gmail.com'; // Ganti dengan alamat email Anda
        $mail->Password   = 'btyo gbfm yyhy xexo'; // Ganti dengan password email Anda
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom('marcothephoenix769@gmail.com', 'Marco'); // Ganti dengan alamat email dan nama pengirim
        $mail->addAddress($email); // Ganti dengan alamat email penerima

        // Attachments
        $mail->addAttachment($_FILES['surat_keterangan_bekerja']['tmp_name'], $_FILES['surat_keterangan_bekerja']['name']);
        $mail->addAttachment($_FILES['kartu_keluarga']['tmp_name'], $_FILES['kartu_keluarga']['name']);
        $mail->addAttachment($_FILES['ktp']['tmp_name'], $_FILES['ktp']['name']);
        $mail->addAttachment($_FILES['surat_keterangan_penghasilan']['tmp_name'], $_FILES['surat_keterangan_penghasilan']['name']);

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Kabar Gembira! Pendaftaran Rusun Anda Diterima!';
        $mail->Body    = "
            <h2>Halo, $nama</h2>
            <p>Kami punya kabar gembira untuk Anda! Pendaftaran Anda untuk Rusun $rusun telah berhasil .</p>
            <p>Berikut adalah detail pendaftaran Anda : </p>
            <p>Nama : $nama</p>
            <p>Email: $email</p>
            <p>No. HP: $no_hp</p>
            <p>Rusun: $rusun</p>
            <br>
            <p>Tim kami akan segera menghubungi Anda untuk langkah selanjutnya.</p>
            <br>
            <p>Terima Kasih!</p>"
        ;

        $mail->send();
        echo '<script>alert("Email konfirmasi telah berhasil dikirim."); window.location.href = "rusun.php";</script>';
    } catch (Exception $e) {
        echo '<script>alert("Email gagal dikirim: ' . $mail->ErrorInfo . '"); window.location.href = "rusun.php";</script>';
    }
} else {
    // Jika tidak melalui metode POST, kembali ke halaman sebelumnya atau tampilkan pesan kesalahan
    echo "Metode pengiriman tidak valid.";
}
?>
