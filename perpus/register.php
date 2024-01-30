<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Pembayaran SPP</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="shortcut icon" href="mts-removebg-preview.png" type="image/x-icon">
</head>
<body>
    
<div class="container">
    <div class="login">
        <form action="">
            <h1>Silahkan Login Untuk Melanjutkan!</h1>

            <label for="">NIS :</label>
            <input type="text">
            <label for="">Nama Lengkap :</label>
            <input type="password">
            <label for="">Email :</label>
            <input type="email">
            <label for="">Alamat :</label>
            <input type="text" >
            <label for="">Username :</label>
            <input type="text">
            <label for="">Password :</label>
            <input type="password" >
            <div class="user">
            <label for="">Level</label> 
                <select name="level" id="level" required>
                    <option value="Pilih">pilih</option>
                    <option value="Novel">admin</option>
                    <option value="Pelajaran">Petugas</option>
                    <option value="Cerita">peminjam</option>
                </select>   
            </div>
            <button>Simpan</button>
            <p>
            Saya Sudah memiliki akun.buat<a href="login.php">Disini</a>
            </p>
        </form>
    </div>
    <div class="right">
        <img src="login.png">
    </div>
</body>
</html>