<?php

// koneksi ke database
$conn = mysqli_connect('localhost', 'root', 'root', 'db_girlbox');

// function registrasi
function registrasi($data)
{
    // ambil koneksi agar dapat digunakan lokal
    global $conn;

    // username dibersihkan dari (-) dan diubah menjadi huruf kecil
    $username = strtolower(stripslashes($data['username']));

    $email = $data['email'];

    $password = mysqli_real_escape_string($conn, $data['password']);

    $confirmPassword = mysqli_real_escape_string(
        $conn,
        $data['confirmPassword']
    );

    // melakukan pengecekan username sudah ada atau belum
    // query data dulu
    $resultUsername = mysqli_query(
        $conn,
        "SELECT username FROM users WHERE username = '$username'"
    );
    if (mysqli_fetch_assoc($resultUsername)) {
        echo "<script>
            alert('username sudah terdaftar!')
        </script>";
        return false;
    }

    // melakukan pengecekan email sudah ada atau belum
    // query data dulu
    $resultEmail = mysqli_query(
        $conn,
        "SELECT email FROM users WHERE email = '$email'"
    );
    if (mysqli_fetch_assoc($resultEmail)) {
        echo "<script>
            alert('email sudah terdaftar!')
        </script>";
        return false;
    }

    // melakukan pengecekan apakah password sama dengan konfirmasi password
    if ($password !== $confirmPassword) {
        echo "<script>
            alert('konfirmasi password tidak sesuai!')
        </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan userbaru ke database
    mysqli_query(
        $conn,
        "INSERT INTO users (id, username, email, password) VALUES(0, '$username', '$email', '$password')"
    );

    return mysqli_affected_rows($conn);
}
