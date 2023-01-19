<?php

// MELAKUKAN KONEKSI KE DATABASE
// DENGAN MENGGUNAKAN FUNGSI mysqli_connect(localhost, usernameDB, passwordDB, namaDB)
$conn = mysqli_connect('localhost', 'root', 'root', 'db_girlbox');

// FUNGSI YANG DIGUNAKAN UNTUK MELAKUKAN REGISTRASI
function registrasi($data)
{
    // AMBIL VARIABLE KONEKSI DATABASE
    global $conn;

    // AMBIL DATA INPUT USERNAME, LALU BERSIHKAN DENGAN CARA
    // stripslshes() UNTUK MENGHILANGKAN TANDA (-) KARENA USERNAME TIDAK ADA TANDA (-) NYA
    // strtolower() SETELAH DIBERSIHKAN UBAH USERNAME MENJADI HURUF KECIL SEMUA, KARENA USERNAME MENGGUNAKAN HURUF KECIL SEMUA
    $username = strtolower(stripslashes($data['username']));

    // AMBIL DATA INPUT EMAIL
    $email = $data['email'];

    // AMBIL DATA INPUT PASSWORD, LALU BERSIHKAN PASSWORDNYA
    // MENGGUNAKAN mysqli_real_escape_string()
    $password = mysqli_real_escape_string($conn, $data['password']);

    // AMBIL DATA INPUT CONFIRM PASSWORD, LALU BERSIHKAN CONFIRM PASSWORDNYA
    // MENGGUNAKAN mysqli_real_escape_string()
    $confirmPassword = mysqli_real_escape_string(
        $conn,
        $data['confirmPassword']
    );

    // MELAKUKAN QUERY KE DATABASE, UNTUK MENGECEK APAKAH USERNAME
    // YANG DIMASUKKAN OLEH USER TELAH TERDAFTAR?
    $resultUsername = mysqli_query(
        $conn,
        "SELECT username FROM users WHERE username = '$username'"
    );

    // JIKA USERNAME TELAH TERDAFTAR
    if (mysqli_fetch_assoc($resultUsername)) {

        // TAMPILKAN PESAN KESALAHAN
        echo "<script>
            alert('username sudah terdaftar!')
        </script>";

        // MENGEMBALIKAN NILAI FALSE / 0
        return false;
    }

    // MELAKUKAN QUERY KE DATABASE, UNTUK MENGECEK APAKAH EMAIL
    // YANG DIMASUKKAN OLEH USER TELAH TERDAFTAR?
    $resultEmail = mysqli_query(
        $conn,
        "SELECT email FROM users WHERE email = '$email'"
    );

    // JIKA EMAIL TELAH TERDAFTAR
    if (mysqli_fetch_assoc($resultEmail)) {

        // TAMPILKAN PESAN KESALAHAN
        echo "<script>
            alert('email sudah terdaftar!')
        </script>";

        // MENGEMBALIKAN NILAI FALSE / 0
        return false;
    }

    // MELAKUKAN PENGECEKAN APAKAH PASSWORD SAMA DENGAN CONFIRM PASSWORD
    if ($password !== $confirmPassword) {

        // TAMPILKAN PESAN KESALAHAN JIKA TIDAK SAMA
        echo "<script>
            alert('konfirmasi password tidak sesuai!')
        </script>";

        // MENGEMBALIKAN NILAI FALSE / 0
        return false;
    }

    // MELAKUKAN ENKRIPSI PASSWORD AGAR AMAN
    $password = password_hash($password, PASSWORD_DEFAULT);

    // TAMBAHKAN DATA USER YANG SUDAH DIVALIDASI KEDALAM DATABASE
    mysqli_query(
        $conn,
        "INSERT INTO users (id, username, email, password) VALUES(0, '$username', '$email', '$password')"
    );

    // MENGEMBALIKAN JUMLAH USER YANG BERHASIL DITAMBAHKAN / 1
    return mysqli_affected_rows($conn);
}
