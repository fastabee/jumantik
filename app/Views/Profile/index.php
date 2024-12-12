<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar Icon</title>
  <link rel="stylesheet" href="<?= base_url()?>/public/assets/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Font Awesome CDN -->
</head>
<body>

<div class="container">
  <!-- Gambar -->
  <img class="responsive-image" src="<?= base_url()?>/public/assets/foto/dinding.png" alt="">

  <!-- Lingkaran Gambar -->
  <div class="circle-image">
    <img src="<?php echo base_url('/public/assets/foto/' . @$data->foto)?>" alt="Avatar">
  </div>

  <!-- Card -->
  <div class="card">
  <br><br>  
  <center>
    <h3> <?php echo @$data->nama?></h3>
    <h4><?php echo @$data->jabatan?></h4>
    </center>


    <form class="readonly-form">
      <label for="name">Nama:</label>
      <input type="text" id="name" value="<?php echo @$data->nama?>" readonly>

      <label for="phone">Nomor Telepon:</label>
      <input type="text" id="phone" value="<?php echo @$data->nomor_telepon?>" readonly>

      <label for="address">Alamat:</label>
      <textarea id="address" readonly><?php echo @$data->alamat?></textarea>
    </form>

    <a href="<?= base_url('edit/profil')?>"><button style="color: #f9f9f9;" class="blue-box">
   Edit Profile
  </button></a>
    
    
  </div>
  
</div>

<!-- Bottom Navbar -->
<div class="bottom-navbar">
  <a href="<?= base_url('/')?>" class="nav-item" id="home">
    <i class="fas fa-home"></i>
  </a>
 
  <a href="<?= base_url('logout')?>" class="nav-item" id="search">
  <i class="fas fa-door-open"></i>
</a>

  <a href="<?= base_url('profile')?>" class="nav-item2" id="profile">
    <i class="fas fa-user"></i>
  </a>
</div>

<script src="<?= base_url()?>/public/assets/script.js"></script>
</body>

<style>
/* Gambar responsif */
.responsive-image {
  width: 100vw;
  height: 25vh;
  object-fit: cover;
  display: block;
}

/* Container */
.container {
  position: relative;
}

/* Lingkaran gambar */
.circle-image {
  position: absolute;
  top: 25vh; /* Menempatkan lingkaran di antara gambar dan card */
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100px;
  height: 100px;
  border-radius: 50%;
  overflow: hidden;
  border: 5px solid gray; /* Outline di sekeliling gambar */
  z-index: 3;
  background-color: gray;
}

.circle-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

/* Card */
.card {
  position: absolute;
  top: 25vh;
  background-color: white;
  border-top-right-radius: 30px;
  border-top-left-radius: 30px;
  padding: 20px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  width: 100%;
  z-index: 2;
}

.card h3 {
  margin-bottom: 15px;
}

.card p {
  font-size: 14px;
  color: #555;
}

/* Bottom Navbar */
.bottom-navbar {
  position: fixed;
  bottom: 0;
  left: 0;
  width: 100%;
  background-color: #f4f4f4;
  display: flex;
  justify-content: space-around;
  padding: 10px 0;
  box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
}

.nav-item i {
  font-size: 20px;
  color: #333;
}

/* Responsif untuk layar kecil */
@media (max-width: 768px) {
  .circle-image {
    width: 110px;
    height: 110px;
  }

  /* Form Read-Only */
.readonly-form {
  display: flex;
  flex-direction: column;
  gap: 10px;
  margin-top: 20px;
}

.readonly-form label {
  font-size: 14px;
  font-weight: bold;
  color: #333;
}

.readonly-form input,
.readonly-form textarea {
  width: 100%;
  padding: 8px;
  font-size: 14px;
  color: #555;
  background-color: #f9f9f9;
  border: 1px solid #ccc;
  border-radius: 5px;
  pointer-events: none; /* Mencegah interaksi dengan field */
}

.readonly-form textarea {
  resize: none; /* Mencegah textarea diubah ukurannya */
  height: 60px;
}

}

/* Kotak biru di bawah ikon terakhir */
.blue-box {
    width: 100%;                   /* Lebar 80% dari kontainer pada layar kecil */
    background-color: #2196F3;    /* Warna latar belakang biru */
    padding: 20px;                /* Padding di dalam kotak */
    margin-top: 20px;             /* Memberikan jarak atas */
    margin-left: auto;            /* Menjaga kotak di tengah */
    margin-right: auto;           /* Menjaga kotak di tengah */
    border-radius: 10px;          /* Sudut yang membulat */
    text-align: center;           /* Menyusun teks di tengah */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Bayangan di sekitar kotak */
  }

  .blue-box p {
    color: white;                /* Warna teks putih untuk kontras dengan latar belakang biru */
    font-size: 16px;              /* Ukuran font teks */
    font-weight: bold;            /* Teks tebal */
  }



</style>
</html>
