<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Input Form</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-image: url("<?= base_url() ?>public/assets/foto/wb.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body class="bg-gray-100 bg-opacity-50 flex justify-center min-h-screen">
    <div class="w-full max-w-md p-4 bg-white rounded-lg shadow-md mt-[10%]">
   <a href="<?= base_url('/')?>"> <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><i>kembali</i></button></a>
        <h2 class="text-xl font-bold text-gray-700 mb-4 text-center">Formulir Pengisian</h2>
        <form action="<?php echo base_url('survey/insert') ?>" name="survey" method="post" enctype="multipart/form-data"
        onsubmit="return validateForm()">
            <input type="number" name="id_user" value="<?php echo@$data->id?>" hidden>
            <!-- Nama KK -->
            <div class="mb-4">
                <label for="nama_kk" class="block text-sm font-medium text-gray-600">Nama KK</label>
                <input type="text" id="nama_kk" name="nama_kk"
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-300"
                    placeholder="Masukkan nama KK">
            </div>
            <!-- Alamat -->
            <div class="mb-4">
                <label for="alamat" class="block text-sm font-medium text-gray-600">Alamat</label>
                <textarea id="alamat" name="alamat" rows="3"
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-300"
                    placeholder="Masukkan alamat"></textarea>
            </div>
            <!-- Nama Petugas -->
            <div class="mb-4">
                <label for="nama_petugas" class="block text-sm font-medium text-gray-600">Nama Petugas</label>
                <input type="text" id="nama_petugas" name="nama_petugas" readonly value="<?php echo @$data->nama ?>"
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-300"
                    placeholder="Masukkan nama petugas">
            </div>
            <!-- Tanggal -->
            <div class="mb-4">
                <label for="tanggal" class="block text-sm font-medium text-gray-600">Tanggal</label>
                <input type="date" id="tanggal" name="tanggal"
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-300">
            </div>
            <!-- Pemisah -->
            <hr class="my-4 border-gray-300">
            <!-- Radio Buttons -->
            <div class="mb-4">
                <div class="text-sm font-medium text-gray-600 mb-2">
                    <span>Tempat</span>
                    <span class="float-right">Status Keberadaan Jentik</span>
                </div>
                <hr class="my-4 border-gray-300">
                <div class="space-y-4">

                    <div class="flex items-center justify-between">
                        <span class="text-gray-600">Bak Mandi</span>
                        <div class="flex space-x-8">
                            <label class="flex items-center">
                                <input type="radio" name="bak_mandi" value="1" class="form-radio text-blue-600">
                                <span class="ml-2">Ya</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="bak_mandi" value="0" class="form-radio text-blue-600">
                                <span class="ml-2">Tidak</span>
                            </label>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <span class="text-gray-600">Vas Bunga</span>
                        <div class="flex space-x-8">
                            <label class="flex items-center">
                                <input type="radio" name="vas_bunga" value="1" class="form-radio text-blue-600">
                                <span class="ml-2">Ya</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="vas_bunga" value="0" class="form-radio text-blue-600">
                                <span class="ml-2">Tidak</span>
                            </label>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <span class="text-gray-600">Aquarium</span>
                        <div class="flex space-x-8">
                            <label class="flex items-center">
                                <input type="radio" name="aquarium" value="1" class="form-radio text-blue-600">
                                <span class="ml-2">Ya</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="aquarium" value="0" class="form-radio text-blue-600">
                                <span class="ml-2">Tidak</span>
                            </label>
                        </div>
                    </div>


                    <div class="flex items-center justify-between">
                        <span class="text-gray-600">Perangkap Semut</span>
                        <div class="flex space-x-8">
                            <label class="flex items-center">
                                <input type="radio" name="perangkap_semut" value="1" class="form-radio text-blue-600">
                                <span class="ml-2">Ya</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="perangkap_semut" value="0" class="form-radio text-blue-600">
                                <span class="ml-2">Tidak</span>
                            </label>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <span class="text-gray-600">Dispenser</span>
                        <div class="flex space-x-8">
                            <label class="flex items-center">
                                <input type="radio" name="dispenser" value="1" class="form-radio text-blue-600">
                                <span class="ml-2">Ya</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="dispenser" value="0" class="form-radio text-blue-600">
                                <span class="ml-2">Tidak</span>
                            </label>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <span class="text-gray-600">Kolam Ikan</span>
                        <div class="flex space-x-8">
                            <label class="flex items-center">
                                <input type="radio" name="kolam_ikan" value="1" class="form-radio text-blue-600">
                                <span class="ml-2">Ya</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="kolam_ikan" value="0" class="form-radio text-blue-600">
                                <span class="ml-2">Tidak</span>
                            </label>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <span class="text-gray-600">Drum</span>
                        <div class="flex space-x-8">
                            <label class="flex items-center">
                                <input type="radio" name="drum" value="1" class="form-radio text-blue-600">
                                <span class="ml-2">Ya</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="drum" value="0" class="form-radio text-blue-600">
                                <span class="ml-2">Tidak</span>
                            </label>
                        </div>
                    </div>


                    <div class="flex items-center justify-between">
                        <span class="text-gray-600">Ban Bekas</span>
                        <div class="flex space-x-8">
                            <label class="flex items-center">
                                <input type="radio" name="ban_bekas" value="1" class="form-radio text-blue-600">
                                <span class="ml-2">Ya</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="ban_bekas" value="0" class="form-radio text-blue-600">
                                <span class="ml-2">Tidak</span>
                            </label>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <span class="text-gray-600">Pembuangan Air Kulkas</span>
                        <div class="flex space-x-8">
                            <label class="flex items-center">
                                <input type="radio" name="pembuangan_kulkas" value="1" class="form-radio text-blue-600">
                                <span class="ml-2">Ya</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="pembuangan_kulkas" value="0" class="form-radio text-blue-600">
                                <span class="ml-2">Tidak</span>
                            </label>
                        </div>
                    </div>


                    <div class="flex items-center justify-between">
                        <span class="text-gray-600">Kolam Renang</span>
                        <div class="flex space-x-8">
                            <label class="flex items-center">
                                <input type="radio" name="kolam_renang" value="1" class="form-radio text-blue-600">
                                <span class="ml-2">Ya</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="kolam_renang" value="0" class="form-radio text-blue-600">
                                <span class="ml-2">Tidak</span>
                            </label>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <span class="text-gray-600">Kaleng Bekas</span>
                        <div class="flex space-x-8">
                            <label class="flex items-center">
                                <input type="radio" name="kaleng_bekas" value="1" class="form-radio text-blue-600">
                                <span class="ml-2">Ya</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="kaleng_bekas" value="0" class="form-radio text-blue-600">
                                <span class="ml-2">Tidak</span>
                            </label>
                        </div>
                    </div>


                    <div class="flex items-center justify-between">
                        <span class="text-gray-600">Pagar</span>
                        <div class="flex space-x-8">
                            <label class="flex items-center">
                                <input type="radio" name="pagar" value="1" class="form-radio text-blue-600">
                                <span class="ml-2">Ya</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="pagar" value="0" class="form-radio text-blue-600">
                                <span class="ml-2">Tidak</span>
                            </label>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <span class="text-gray-600">Pelepah Pisang</span>
                        <div class="flex space-x-8">
                            <label class="flex items-center">
                                <input type="radio" name="pelepah_pisang" value="1" class="form-radio text-blue-600">
                                <span class="ml-2">Ya</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="pelepah_pisang" value="0" class="form-radio text-blue-600">
                                <span class="ml-2">Tidak</span>
                            </label>
                        </div>
                    </div>


                    <div class="flex items-center justify-between">
                        <span class="text-gray-600">Meteran Air</span>
                        <div class="flex space-x-8">
                            <label class="flex items-center">
                                <input type="radio" name="meteran_air" value="1" class="form-radio text-blue-600">
                                <span class="ml-2">Ya</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="meteran_air" value="0" class="form-radio text-blue-600">
                                <span class="ml-2">Tidak</span>
                            </label>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <span class="text-gray-600">Talang Air</span>
                        <div class="flex space-x-8">
                            <label class="flex items-center">
                                <input type="radio" name="talang_air" value="1" class="form-radio text-blue-600">
                                <span class="ml-2">Ya</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="talang_air" value="0" class="form-radio text-blue-600">
                                <span class="ml-2">Tidak</span>
                            </label>
                        </div>
                    </div>


                    <div class="flex items-center justify-between">
                        <span class="text-gray-600">Reservisor</span>
                        <div class="flex space-x-8">
                            <label class="flex items-center">
                                <input type="radio" name="reservisor" value="1" class="form-radio text-blue-600">
                                <span class="ml-2">Ya</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="reservisor" value="0" class="form-radio text-blue-600">
                                <span class="ml-2">Tidak</span>
                            </label>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <span class="text-gray-600">Tempat Wudhu</span>
                        <div class="flex space-x-8">
                            <label class="flex items-center">
                                <input type="radio" name="tempat_wudhu" value="1" class="form-radio text-blue-600">
                                <span class="ml-2">Ya</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="tempat_wudhu" value="0" class="form-radio text-blue-600">
                                <span class="ml-2">Tidak</span>
                            </label>
                        </div>
                    </div>


                    <div class="flex items-center justify-between">
                        <span class="text-gray-600">Botol Air</span>
                        <div class="flex space-x-8">
                            <label class="flex items-center">
                                <input type="radio" name="botol_air" value="1" class="form-radio text-blue-600">
                                <span class="ml-2">Ya</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="botol_air" value="0" class="form-radio text-blue-600">
                                <span class="ml-2">Tidak</span>
                            </label>
                        </div>
                    </div>


                    <div class="flex items-center justify-between">
                        <span class="text-gray-600">Tampungan Air AC</span>
                        <div class="flex space-x-8">
                            <label class="flex items-center">
                                <input type="radio" name="tampungan_ac" value="1" class="form-radio text-blue-600">
                                <span class="ml-2">Ya</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="tampungan_ac" value="0" class="form-radio text-blue-600">
                                <span class="ml-2">Tidak</span>
                            </label>
                        </div>
                    </div>


                    <div class="flex items-center justify-between">
                        <span class="text-gray-600">Tempat Minum Burung</span>
                        <div class="flex space-x-8">
                            <label class="flex items-center">
                                <input type="radio" name="minum_burung" value="1" class="form-radio text-blue-600">
                                <span class="ml-2">Ya</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="minum_burung" value="0" class="form-radio text-blue-600">
                                <span class="ml-2">Tidak</span>
                            </label>
                        </div>
                    </div>

                    <div class="mb-4">
                <label for="jumlah" class="block text-sm font-medium text-gray-600">Jumlah Penderita DB</label>
                <input type="number" id="jumlah" name="jumlah"  
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-300"
                    placeholder="Masukkan Jumlah Penderita">
            </div>

                    <div class="flex items-center justify-center w-full">
                        <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div id="preview-container" class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                            </div>
                            <!-- Pratinjau gambar -->
                            <img id="image-preview" class="hidden w-full h-full object-cover rounded-lg" />
                            <input id="dropzone-file" type="file" class="hidden" name="dokumentasi" accept="image/*" />
                        </label>
                    </div>

                    


                    <!-- Submit Button -->
                    <button type="submit"
                        class="w-full px-4 py-2 mt-6 text-white bg-blue-600 hover:bg-blue-700 rounded-md focus:outline-none focus:ring focus:ring-blue-300">
                        Submit
                    </button>
        </form>
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




  
</body>


<script>
    const inputFile = document.getElementById('dropzone-file');
    const previewContainer = document.getElementById('preview-container');
    const imagePreview = document.getElementById('image-preview');

    inputFile.addEventListener('change', (event) => {
        const file = event.target.files[0];

        if (file) {
            const reader = new FileReader();

            // Ketika file selesai dibaca
            reader.onload = (e) => {
                // Tampilkan gambar di elemen <img>
                imagePreview.src = e.target.result;
                imagePreview.classList.remove('hidden');
                previewContainer.classList.add('hidden'); // Sembunyikan elemen teks/icon
            };

            // Baca file sebagai URL
            reader.readAsDataURL(file);
        }
    });
</script>


</html>