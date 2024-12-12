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
  <img class="responsive-image" src="<?= base_url()?>/public/assets/foto/nyamuk_home.png" alt="">

  <div class="text-overlay">
    <h2>Hai, <?php echo @$data->nama ?></h2>
    <p>Selamat Datang Kembali</p>
  </div>

  <!-- Card -->
  <div class="card">
    <h3>Jumantik Field</h3>

    <div class="blue-box">
    <marquee style="color: #f4f4f4;">Selamat Datang Di E-Jumantik Tetap Jaga Kesehatan dan Jangan HtS-An</marquee>
  </div>
    <div class="icon-box-container">
    <div class="icon-box" onclick="isisurvey()">
      <i class="fas fa-book"></i>
      <p>Isi Survey</p>
    </div>
    <div class="icon-box"  onclick="isisurvey3()">
      <i class="fas fa-book-open"></i>
      <p>Report</p>
    </div>
    <div class="icon-box" onclick="isisurvey2()">
      <i class="fas fa-bullhorn"></i>
      <p>Informasi</p>
    </div>

  </div>
  <div class="blue-box">
   <a href="<?= base_url('riwayat')?>"><p>Riwayat</p></a>
  </div>
</div>

  <!-- Bottom Navbar -->
  <div class="bottom-navbar">

    <a href="<?= base_url('/')?>" class="nav-item2" id="home">
      <i class="fas fa-home"></i>
    </a>
    <a href="<?= base_url('logout')?>" class="nav-item" id="search">
      <i class="fas fa-door-open"></i>
    
    <a href="<?= base_url('profile')?>" class="nav-item" id="profile">
      <i class="fas fa-user"></i>
    </a>
  </div>

  <script src="<?= base_url()?>/public/assets/script.js"></script>
</body>

<style>
  /* Gambar responsif */
.responsive-image {
  width: 100vw;          /* Lebar 100% dari viewport */
  height: 25vh;          /* Tinggi 25% dari viewport */
  object-fit: cover;     /* Menjaga rasio gambar tanpa merusak proporsinya */
  display: block;        /* Menghindari spasi di bawah gambar */
  position: relative;
  
}

/* Teks di atas gambar */
.text-overlay {
  position: absolute;    /* Menempatkan teks di atas gambar */
  top: 50%;              /* Menempatkan teks di tengah secara vertikal */
  left: 50%;             /* Menempatkan teks di tengah secara horizontal */
  transform: translate(-90%, -50%); /* Menggeser posisi teks untuk benar-benar di tengah */
  text-align: left;    /* Teks diatur agar rata tengah */
  color: white;          /* Warna teks putih untuk kontras dengan gambar */
  font-family: 'Arial', sans-serif; /* Mengatur jenis font */
}

.text-overlay h2 {
  font-size: 24px;       /* Ukuran font judul */
  margin: 0;             /* Menghilangkan margin */
  font-weight: bold;     /* Teks tebal */
}

.text-overlay p {
  font-size: 16px;       /* Ukuran font deskripsi */
  margin-top: 10px;      /* Jarak antara judul dan deskripsi */
  font-weight: normal;
}

/* Container untuk menampung gambar dan card */
.container {
  position: relative;
}

/* Styling untuk card */
.card {
  position: absolute;
  margin-top: -20px;     /* Mengatur jarak card sedikit lebih dekat dengan gambar (negatif margin) */
  background-color: white; /* Warna latar belakang card */
  border-top-right-radius: 30px; 
  border-top-left-radius: 30px;    /* Sudut yang membulat */
  padding: 20px;         /* Padding dalam card */
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Bayangan card */
  width: 100%;            /* Lebar card 90% dari lebar layar */
  margin-left: 0%;       /* Menjaga card tetap berada di tengah layar */
  z-index: 2; 
}

/* Menambahkan beberapa style dasar pada card */
.card h3 {
  margin-bottom: 15px;
}

.card p {
  font-size: 14px;
  color: #555;
}


/* Container untuk ikon */
.icon-box-container {
  display: flex;                /* Menyusun ikon secara horizontal */
  justify-content: space-between; /* Memberi jarak antar ikon secara merata */
  gap: 20px;                    /* Jarak antar kotak ikon */
  margin-top: 20px;             /* Memberi jarak antara judul dan ikon */
  flex-wrap: wrap;              /* Memungkinkan kontainer untuk membungkus jika ruang terbatas */
}

/* Styling untuk setiap kotak ikon */
.icon-box {
  flex: 1 1 30%;                /* Membuat setiap kotak ikon mempunyai lebar 30% dari kontainer, dengan fleksibilitas untuk mengubah ukuran */
  background-color: #f4f4f4;    /* Warna latar belakang kotak */
  border-radius: 10px;          /* Sudut yang membulat */
  text-align: center;           /* Menyusun teks dan ikon di tengah */
  padding: 20px;                /* Ruang di dalam kotak */
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Bayangan di sekitar kotak */
}

/* Ikon */
.icon-box i {
  font-size: 36px;              /* Ukuran ikon */
  color: cyan;               /* Warna ikon */
}

/* Teks di bawah ikon */
.icon-box p {
  margin-top: 10px;             /* Memberikan jarak antara ikon dan teks */
  font-size: 14px;              /* Ukuran font teks */
  color: #333;                  /* Warna teks */
  font-weight: bold;            /* Membuat teks tebal */
}

/* Responsif untuk tampilan mobile */
@media (max-width: 768px) {
  .icon-box-container {
    justify-content: space-evenly; /* Menjaga ikon tetap rata pada tampilan mobile */
  }

  .icon-box {
    flex: 1 1 30%;                /* Ikon tetap berada dalam lebar 30% pada layar kecil */
    margin-bottom: 10px;          /* Menambahkan jarak bawah antara kotak ikon */
    text-align: center;           /* Menyusun teks dan ikon di tengah */
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


<script>

  function isisurvey(){
    window.location.href = "<?= base_url('survey/input')?>";
  }

  function isisurvey2(){
    window.location.href = "<?= base_url('informasi')?>";
  }

  function isisurvey3(){
    window.location.href = "<?= base_url('report')?>";
  }


</script>

</html>



