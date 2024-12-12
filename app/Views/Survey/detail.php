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
    <h2 class="text-xl font-bold text-gray-700 mb-4 text-center">
    <?php 
        echo ($data->status == 0) 
            ? "Tidak Terdeteksi Jentik" 
            : "Terdeteksi Jentik"; 
    ?>
</h2>

        <form action="<?php echo base_url('cetak/detail') ?>" name="survey" method="post" enctype="multipart/form-data"
        onsubmit="return validateForm()">
            <input type="number" hidden value="<?php echo@$data->id?>">
            <input type="number" name="id" value="<?php echo@$data->id?>" hidden>
            <!-- Nama KK -->
            <div class="mb-4">
                <label for="nama_kk" class="block text-sm font-medium text-gray-600">Nama KK</label>
                <input type="text" id="nama_kk" name="nama_kk" readonly value="<?php echo @$data->nama_kk ?>"
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-300"
                    placeholder="Masukkan nama KK">
            </div>
            <!-- Alamat -->
            <div class="mb-4">
                <label for="alamat" class="block text-sm font-medium text-gray-600">Alamat</label>
                <input id="alamat" name="alamat" rows="3" value="<?php echo @$data->alamat ?>" readonly
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-300"
                    placeholder="Masukkan alamat"></input>
            </div>
            <!-- Nama Petugas -->
            <div class="mb-4">
                <label for="nama_petugas" class="block text-sm font-medium text-gray-600">Nama Petugas</label>
                <input type="text" id="nama_petugas" name="nama_petugas" readonly value="<?php echo @$data->nama_petugas ?>"
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-300"
                    placeholder="Masukkan nama petugas">
            </div>
            <!-- Tanggal -->
            <div class="mb-4">
                <label for="tanggal" class="block text-sm font-medium text-gray-600">Tanggal</label>
                <input type="text" id="tanggal" name="tanggal" readonly value="<?php echo @$data->tanggal ?>"
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
                                <input type="radio" name="bak_mandi" value="1" class="form-radio text-blue-600"
                                <?php echo @$data->bak_mandi == 1 ? 'checked' : ''; ?> disabled>
                                <span class="ml-2">Ya</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="bak_mandi" value="0" class="form-radio text-blue-600"
                                <?php echo @$data->bak_mandi == 0 ? 'checked' : ''; ?> disabled>
                                <span class="ml-2">Tidak</span>
                            </label>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <span class="text-gray-600">Vas Bunga</span>
                        <div class="flex space-x-8">
                            <label class="flex items-center">
                                <input type="radio" name="vas_bunga" value="1" class="form-radio text-blue-600" 
                                <?php echo @$data->vas_bunga == 1 ? 'checked' : ''; ?> disabled>
                                <span class="ml-2">Ya</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="vas_bunga" value="0" class="form-radio text-blue-600"
                                <?php echo @$data->vas_bunga == 0 ? 'checked' : ''; ?> disabled>

                                <span class="ml-2">Tidak</span>
                            </label>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <span class="text-gray-600">Aquarium</span>
                        <div class="flex space-x-8">
                            <label class="flex items-center">
                                <input type="radio" name="aquarium" value="1" class="form-radio text-blue-600"
                                <?php echo @$data->vas_bunga == 1 ? 'checked' : ''; ?> disabled>
                                <span class="ml-2">Ya</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="aquarium" value="0" class="form-radio text-blue-600"
                                <?php echo @$data->vas_bunga == 0 ? 'checked' : ''; ?> disabled>
                                <span class="ml-2">Tidak</span>
                            </label>
                        </div>
                    </div>


                    <div class="flex items-center justify-between">
                        <span class="text-gray-600">Perangkap Semut</span>
                        <div class="flex space-x-8">
                            <label class="flex items-center">
                                <input type="radio" name="perangkap_semut" value="1" class="form-radio text-blue-600"
                                <?php echo @$data->vas_bunga == 1 ? 'checked' : ''; ?> disabled>
                                <span class="ml-2">Ya</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="perangkap_semut" value="0" class="form-radio text-blue-600"
                                <?php echo @$data->vas_bunga == 0 ? 'checked' : ''; ?> disabled>
                                <span class="ml-2">Tidak</span>
                            </label>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <span class="text-gray-600">Dispenser</span>
                        <div class="flex space-x-8">
                            <label class="flex items-center">
                                <input type="radio" name="dispenser" value="1" class="form-radio text-blue-600"
                                <?php echo @$data->vas_bunga == 1 ? 'checked' : ''; ?> disabled>
                                <span class="ml-2">Ya</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="dispenser" value="0" class="form-radio text-blue-600"
                                <?php echo @$data->vas_bunga == 0 ? 'checked' : ''; ?> disabled>
                                <span class="ml-2">Tidak</span>
                            </label>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <span class="text-gray-600">Kolam Ikan</span>
                        <div class="flex space-x-8">
                            <label class="flex items-center">
                                <input type="radio" name="kolam_ikan" value="1" class="form-radio text-blue-600"
                                <?php echo @$data->vas_bunga == 1 ? 'checked' : ''; ?> disabled>
                                <span class="ml-2">Ya</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="kolam_ikan" value="0" class="form-radio text-blue-600"
                                <?php echo @$data->vas_bunga == 0 ? 'checked' : ''; ?> disabled>
                                <span class="ml-2">Tidak</span>
                            </label>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <span class="text-gray-600">Drum</span>
                        <div class="flex space-x-8">
                            <label class="flex items-center">
                                <input type="radio" name="drum" value="1" class="form-radio text-blue-600"
                                <?php echo @$data->vas_bunga == 1 ? 'checked' : ''; ?> disabled>
                                <span class="ml-2">Ya</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="drum" value="0" class="form-radio text-blue-600"
                                <?php echo @$data->vas_bunga == 0 ? 'checked' : ''; ?> disabled>
                                <span class="ml-2">Tidak</span>
                            </label>
                        </div>
                    </div>


                    <div class="flex items-center justify-between">
                        <span class="text-gray-600">Ban Bekas</span>
                        <div class="flex space-x-8">
                            <label class="flex items-center">
                                <input type="radio" name="ban_bekas" value="1" class="form-radio text-blue-600"
                                <?php echo @$data->vas_bunga == 1 ? 'checked' : ''; ?> disabled>
                                <span class="ml-2">Ya</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="ban_bekas" value="0" class="form-radio text-blue-600"
                                <?php echo @$data->vas_bunga == 0 ? 'checked' : ''; ?> disabled>
                                <span class="ml-2">Tidak</span>
                            </label>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <span class="text-gray-600">Pembuangan Air Kulkas</span>
                        <div class="flex space-x-8">
                            <label class="flex items-center">
                                <input type="radio" name="pembuangan_kulkas" value="1" class="form-radio text-blue-600"
                                <?php echo @$data->vas_bunga == 1 ? 'checked' : ''; ?> disabled>
                                <span class="ml-2">Ya</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="pembuangan_kulkas" value="0" class="form-radio text-blue-600"
                                <?php echo @$data->vas_bunga == 0 ? 'checked' : ''; ?> disabled>
                                <span class="ml-2">Tidak</span>
                            </label>
                        </div>
                    </div>


                    <div class="flex items-center justify-between">
                        <span class="text-gray-600">Kolam Renang</span>
                        <div class="flex space-x-8">
                            <label class="flex items-center">
                                <input type="radio" name="kolam_renang" value="1" class="form-radio text-blue-600"
                                <?php echo @$data->vas_bunga == 1 ? 'checked' : ''; ?> disabled>
                                <span class="ml-2">Ya</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="kolam_renang" value="0" class="form-radio text-blue-600"
                                <?php echo @$data->vas_bunga == 0 ? 'checked' : ''; ?> disabled>
                                <span class="ml-2">Tidak</span>
                            </label>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <span class="text-gray-600">Kaleng Bekas</span>
                        <div class="flex space-x-8">
                            <label class="flex items-center">
                                <input type="radio" name="kaleng_bekas" value="1" class="form-radio text-blue-600"
                                <?php echo @$data->vas_bunga == 1 ? 'checked' : ''; ?> disabled>
                                <span class="ml-2">Ya</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="kaleng_bekas" value="0" class="form-radio text-blue-600"
                                <?php echo @$data->vas_bunga == 0 ? 'checked' : ''; ?> disabled>
                                <span class="ml-2">Tidak</span>
                            </label>
                        </div>
                    </div>


                    <div class="flex items-center justify-between">
                        <span class="text-gray-600">Pagar</span>
                        <div class="flex space-x-8">
                            <label class="flex items-center">
                                <input type="radio" name="pagar" value="1" class="form-radio text-blue-600"
                                <?php echo @$data->vas_bunga == 1 ? 'checked' : ''; ?> disabled>
                                <span class="ml-2">Ya</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="pagar" value="0" class="form-radio text-blue-600"
                                <?php echo @$data->vas_bunga == 0 ? 'checked' : ''; ?> disabled>
                                <span class="ml-2">Tidak</span>
                            </label>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <span class="text-gray-600">Pelepah Pisang</span>
                        <div class="flex space-x-8">
                            <label class="flex items-center">
                                <input type="radio" name="pelepah_pisang" value="1" class="form-radio text-blue-600"
                                <?php echo @$data->vas_bunga == 1 ? 'checked' : ''; ?> disabled>
                                <span class="ml-2">Ya</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="pelepah_pisang" value="0" class="form-radio text-blue-600"
                                <?php echo @$data->vas_bunga == 0 ? 'checked' : ''; ?> disabled>
                                <span class="ml-2">Tidak</span>
                            </label>
                        </div>
                    </div>


                    <div class="flex items-center justify-between">
                        <span class="text-gray-600">Meteran Air</span>
                        <div class="flex space-x-8">
                            <label class="flex items-center">
                                <input type="radio" name="meteran_air" value="1" class="form-radio text-blue-600"
                                <?php echo @$data->vas_bunga == 1 ? 'checked' : ''; ?> disabled>
                                <span class="ml-2">Ya</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="meteran_air" value="0" class="form-radio text-blue-600"
                                <?php echo @$data->vas_bunga == 0 ? 'checked' : ''; ?> disabled>
                                <span class="ml-2">Tidak</span>
                            </label>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <span class="text-gray-600">Talang Air</span>
                        <div class="flex space-x-8">
                            <label class="flex items-center">
                                <input type="radio" name="talang_air" value="1" class="form-radio text-blue-600"
                                <?php echo @$data->vas_bunga == 1 ? 'checked' : ''; ?> disabled>
                                <span class="ml-2">Ya</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="talang_air" value="0" class="form-radio text-blue-600"
                                <?php echo @$data->vas_bunga == 0 ? 'checked' : ''; ?> disabled>
                                <span class="ml-2">Tidak</span>
                            </label>
                        </div>
                    </div>


                    <div class="flex items-center justify-between">
                        <span class="text-gray-600">Reservisor</span>
                        <div class="flex space-x-8">
                            <label class="flex items-center">
                                <input type="radio" name="reservisor" value="1" class="form-radio text-blue-600"
                                <?php echo @$data->vas_bunga == 1 ? 'checked' : ''; ?> disabled>
                                <span class="ml-2">Ya</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="reservisor" value="0" class="form-radio text-blue-600"
                                <?php echo @$data->vas_bunga == 0 ? 'checked' : ''; ?> disabled>
                                <span class="ml-2">Tidak</span>
                            </label>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <span class="text-gray-600">Tempat Wudhu</span>
                        <div class="flex space-x-8">
                            <label class="flex items-center">
                                <input type="radio" name="tempat_wudhu" value="1" class="form-radio text-blue-600"
                                <?php echo @$data->vas_bunga == 1 ? 'checked' : ''; ?> disabled>
                                <span class="ml-2">Ya</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="tempat_wudhu" value="0" class="form-radio text-blue-600"
                                <?php echo @$data->vas_bunga == 0 ? 'checked' : ''; ?> disabled>
                                <span class="ml-2">Tidak</span>
                            </label>
                        </div>
                    </div>


                    <div class="flex items-center justify-between">
                        <span class="text-gray-600">Botol Air</span>
                        <div class="flex space-x-8">
                            <label class="flex items-center">
                                <input type="radio" name="botol_air" value="1" class="form-radio text-blue-600"
                                <?php echo @$data->vas_bunga == 1 ? 'checked' : ''; ?> disabled>
                                <span class="ml-2">Ya</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="botol_air" value="0" class="form-radio text-blue-600"
                                <?php echo @$data->vas_bunga == 0 ? 'checked' : ''; ?> disabled>
                                <span class="ml-2">Tidak</span>
                            </label>
                        </div>
                    </div>


                    <div class="flex items-center justify-between">
                        <span class="text-gray-600">Tampungan Air AC</span>
                        <div class="flex space-x-8">
                            <label class="flex items-center">
                                <input type="radio" name="tampungan_ac" value="1" class="form-radio text-blue-600"
                                <?php echo @$data->vas_bunga == 1 ? 'checked' : ''; ?> disabled>
                                <span class="ml-2">Ya</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="tampungan_ac" value="0" class="form-radio text-blue-600"
                                <?php echo @$data->vas_bunga == 0 ? 'checked' : ''; ?> disabled>
                                <span class="ml-2">Tidak</span>
                            </label>
                        </div>
                    </div>


                    <div class="flex items-center justify-between">
                        <span class="text-gray-600">Tempat Minum Burung</span>
                        <div class="flex space-x-8">
                            <label class="flex items-center">
                                <input type="radio" name="minum_burung" value="1" class="form-radio text-blue-600"
                                <?php echo @$data->vas_bunga == 1 ? 'checked' : ''; ?> disabled>
                                <span class="ml-2">Ya</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="minum_burung" value="0" class="form-radio text-blue-600"
                                <?php echo @$data->vas_bunga == 0 ? 'checked' : ''; ?> disabled>
                                <span class="ml-2">Tidak</span>
                            </label>
                        </div>
                    </div>

                    <div class="mb-4">
                <label for="jumlah" class="block text-sm font-medium text-gray-600">Jumlah Penderita DB</label>
                <input type="number" id="jumlah" name="jumlah"  readonly value="<?= $data->jumlah?>"
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-300"
                    placeholder="Masukkan Jumlah Penderita">
            </div>

            <div class="flex items-center justify-center w-full">
    <div class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
        <!-- Pratinjau gambar -->
        <img 
            id="image-view" 
            src="<?= base_url('public/dokumentasi/' . $data->foto) ?>" 
            alt="Gambar Dokumentasi" 
            class="w-full h-full object-cover rounded-lg <?= empty($data->foto) ? 'hidden' : '' ?>" 
        />
        <?php if (empty($data->foto)): ?>
        <div class="flex flex-col items-center justify-center h-full">
            <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
            </svg>
            <p class="text-sm text-gray-500 dark:text-gray-400">Gambar tidak tersedia</p>
        </div>
        <?php endif; ?>
    </div>
</div>




     <!-- Tombol untuk membuka modal -->
<button type="button" onclick="openModal()"
    class="w-full px-4 py-2 mt-6 text-white bg-green-600 hover:bg-green-700 rounded-md focus:outline-none focus:ring focus:ring-green-300">
    Tampilkan Link Download
</button>
        </form>
    </div>

<!-- Modal -->
<div id="downloadModal" class="fixed inset-0 z-50 hidden bg-black bg-opacity-50 flex items-center justify-center">
    <div class="bg-white rounded-lg p-6 w-full max-w-lg mx-4 sm:mx-6">
        <h2 class="text-lg font-semibold mb-4 text-center">Link Download PDF</h2>
        <div class="mb-4">
            <label for="downloadLink" class="block text-sm font-medium text-gray-600 mb-1">Tautan:</label>
            <input type="text" id="downloadLink" readonly
                class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-300"
                value="<?php echo base_url('cetak/detail?id=' . @$data->id); ?>">
        </div>
        <div class="flex flex-col sm:flex-row justify-end gap-4">
            <button type="button" onclick="copyToClipboard()"
                class="px-4 py-2 text-white bg-blue-600 hover:bg-blue-700 rounded-md focus:outline-none focus:ring focus:ring-blue-300">
                Salin Link
            </button>
            <button type="button" onclick="closeModal()"
                class="px-4 py-2 text-white bg-gray-600 hover:bg-gray-700 rounded-md focus:outline-none focus:ring focus:ring-gray-300">
                Tutup
            </button>
        </div>
    </div>
</div>

</body>

<script>
    function openModal() {
        document.getElementById('downloadModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('downloadModal').classList.add('hidden');
    }

    function copyToClipboard() {
        const link = document.getElementById('downloadLink');
        link.select();
        link.setSelectionRange(0, 99999); // Untuk browser lama
        navigator.clipboard.writeText(link.value)
            .then(() => alert('Link berhasil disalin ke clipboard!'))
            .catch(err => alert('Gagal menyalin link!'));
    }
</script>

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