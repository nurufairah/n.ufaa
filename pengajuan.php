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
        $mail->addAttachment($_FILES['naskah_jurnal']['tmp_name'], $_FILES['naskah_jurnal']['name']);

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Selamat! Pengajuan Naskah Anda Telah Diterima';
        $mail->Body    = "
            <h2>Halo, $nama yang terhormat,</h2>
            <p>Dengan senang hati kami umumkan bahwa pengajuan naskah jurnal Anda telah kami terima dengan baik.</p>
            <p>Berikut adalah detail pengajuan naskah jurnal Anda beserta lampirannya : </p>
            <ul>
                <li>Nama: $nama</li>
                <li>Email: $email</li>
                <li>No. HP: $no_hp</li>
            </ul>
            <br>
            <p>Tim kami akan segera meninjau naskah Anda dan menghubungi Anda untuk langkah selanjutnya</p>
            <br>
            <p>Terima kasih atas kepercayaan Anda. Kami sangat menantikan kerja sama yang produktif.</p>"
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