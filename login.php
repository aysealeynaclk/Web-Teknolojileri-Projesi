<?php
// Kullanıcı tarafından gönderilen öğrenci numarası ve şifre değerlerini alıyoruz
$username = $_POST['username'];
$password = $_POST['password'];

// Örnek bir öğrenci numarası ve şifresi
$valid_username = "b231210000@sakarya.edu.tr";
$valid_password = "b231210000";

// Kullanıcının girdiği bilgilerin doğruluğunu kontrol ediyoruz
if ($username === $valid_username && $password === $valid_password) {
    // Kullanıcı girişi başarılı ise yapılacak işlemler
    echo "Giriş başarılı. Hoş geldiniz, $username";
} else {
    // Kullanıcı girişi başarısız ise yapılacak işlemler
    echo "Hatalı kullanıcı adı veya şifre. Lütfen tekrar deneyin.";
}
?>
