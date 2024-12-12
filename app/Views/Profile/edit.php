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

  <!-- Circle Image Picker -->
  <form class="readonly-form" action="<?php echo base_url('update/profil') ?>" name="survey" method="post" enctype="multipart/form-data"
    onsubmit="return validateForm()">
  <div class="circle-image" onclick="document.getElementById('imageInput').click()">
    
  <img id="imagePreview" src="<?php echo base_url('/public/assets/foto/' . @$data->foto)?>" alt="Avatar">
    
    <input name="foto" type="file" id="imageInput" accept="image/*" style="display: none;" onchange="previewImage(event)">
  </div>

  <div class="card">
    <br><br>  
    <center>
      <h3> <?php echo @$data->nama?></h3>
      <h4 style="padding-bottom: 20px;"> <?php echo @$data->jabatan?></h4>
    </center>
      <input type="number" hidden name="id" value="<?php echo @$data->id?>">
      <label for="name">Nama:</label>
      <input type="text" style="margin-bottom: 10px;" name="nama" id="name" value="<?php echo @$data->nama?>" >

      <label for="phone">Nomor Telepon:</label>
      <input type="text" name="nomor_telepon" style="margin-bottom: 10px;" id="phone" value="<?php echo @$data->nomor_telepon?>" >

      <label for="address" >Alamat:</label>
      <textarea id="address" name="alamat" style="margin-bottom: 10px;" ><?php echo @$data->alamat?></textarea>
    <center>
      <button type="submit" style=" margin-top: 20px; width: 100%; height: 40px; background-color: blue; font-size: 20px; color: white; font-style: italic; border-radius: 10px; "  >Simpan</button>
      </center>
    </form>
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

<script>
  // Fungsi untuk mem-preview gambar yang diunggah
  function previewImage(event) {
    const input = event.target;
    const reader = new FileReader();

    reader.onload = function() {
      const preview = document.getElementById('imagePreview');
      preview.src = reader.result; // Ganti src gambar dengan hasil file yang dipilih
    };

    if (input.files && input.files[0]) {
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>

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
  cursor: pointer; /* Tambahkan pointer untuk menandakan elemen interaktif */
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
   
  }

  .readonly-form textarea {
   
    height: 60px;
  }
}
</style>
</html>
