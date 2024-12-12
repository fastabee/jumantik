<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            margin: 0;
            background-color: #f4f4f4; /* Warna latar belakang halaman */
            height: 100vh;
            display: flex;
            flex-direction: column; /* Tata letak vertikal */
            align-items: center; /* Pusatkan elemen secara horizontal */
            position: relative; /* Untuk pengaturan posisi absolut */
        }

        img {
            position: absolute;
            top: 10%; /* Jarak dari atas halaman 20% */
            width: 60%; /* Lebar responsif */
            max-width: 300px; /* Maksimal lebar untuk layar besar */
            border-radius: 10%; /* Sudut melengkung */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2); /* Efek bayangan */
        }

        .card {
            margin-top: 6cm; /* Pastikan card berada di bawah GIF */
            width: 80%; /* Lebar card 80% dari viewport */
            max-width: 400px; /* Maksimal lebar untuk tampilan besar */
            background-color: white; /* Warna latar card */
            padding: 20px; /* Jarak isi dengan tepi card */
            border-radius: 10px; /* Sudut melengkung */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Efek bayangan */
            text-align: center; /* Konten di tengah card */
        }
    </style>
</head>
<body background="<?= base_url()?>public/assets/foto/wb.jpg">
    <h2 style="color: #f4f4f4;"> Selamat Data di E Jumantik</h2>
    <!-- GIF yang diatur dengan posisi absolut -->
    <img src="https://i.pinimg.com/originals/9e/15/1e/9e151e510d0c62dae3ada7d1eeaa9054.gif" alt="Lab GIF">
    
    <!-- Card login -->
    <div class="card">
        <h2>Login</h2>
        <form action="<?= base_url('login/bang') ?>" method="post" enctype="multipart/form-data">
            <div style="margin-bottom: 15px;">
                <input 
                    type="number"
                    name="nomor" 
                    placeholder="Nomor Telepon" 
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            </div>
            
            <div style="margin-bottom: 15px;">
                <input 
                    type="password" 
                    name="password"
                    placeholder="Password" 
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            </div>
            <br>
            <button 
                type="submit" 
                style="width: 100%; padding: 10px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer;">
                Login
            </button>
        </form>
    </div>
</body>
</html>
