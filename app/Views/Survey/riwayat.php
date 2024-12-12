<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Table with Card</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            background: url('https://xmple.com/wallpaper/blue-gradient-white-linear-2160x3840-c2-87cefa-ffffff-a-105-f-14.svg') no-repeat center center fixed;
            background-size: cover;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 14px;
            text-align: left;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 6px;
        }
        th {
            background-color: #f4f4f4;
        }
        .table-container {
            overflow-x: auto;
            margin: 10px;
            background: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 10px;
        }
        .button-container {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin: 20px 0;
        }
        .button-container button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s;
        }
        .button-container button:hover {
            background-color: #0056b3;
        }
        /* Media queries untuk layar kecil */
        @media (max-width: 768px) {
            table {
                font-size: 12px;
            }
            th, td {
                padding: 5px;
            }
            .button-container {
                flex-direction: row; /* Memastikan tombol tetap sejajar pada layar kecil */
                justify-content: space-between; /* Memastikan tombol ada jarak diantara keduanya */
            }
            .button-container button {
                width: 100%; /* Membuat tombol lebih lebar agar cukup untuk 2 tombol dalam satu baris */
            }
        }
    </style>
</head>
<body>
    <div class="table-container">
        <center>
            <h3>Laporan Hasil Pemantauan</h3>
        </center>
        <div class="button-container">
            
            <a href="#">
                <button style="color: white; background-color: #fff;">Kembali</button>
            </a>
            <a href="<?= base_url('cetak/riwayat') ?>">
                <button>Cetak</button>
            </a>
        </div>
        <table>
            <thead>
                <tr>
                    <th style="background-color: hsla(0, 100%, 90%, 0.3);">Nama KK</th>
                    <th style="background-color: hsla(0, 100%, 90%, 0.3);" >Tanggal</th>
                    <th  style="background-color: hsla(0, 100%, 90%, 0.3);">Alamat</th>
                    <th  style="background-color: hsla(0, 100%, 90%, 0.3);">Status</th>
                    <th  style="background-color: hsla(0, 100%, 90%, 0.3);">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php if ($data->getNumRows() > 0): ?>
                <?php foreach ($data->getResult() as $row): ?>
                <tr>
                    <td><?= $row->nama_kk ?></td>
                    <td><?= $row->tanggal ?></td>
                    <td><?= $row->alamat ?></td>
                    <td><?= ($row->status > 0) ? 'Positif' : (($row->status == 0) ? 'Negatif' : 'Negatif') ?></td>
                    <td><a href="<?= base_url('detail/' . $row->id) ?>"><button style="background-color: #F0F8FF; outline: none; font-style: italic;">Detail</button></a></td>
                </tr>
                <?php endforeach ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" class="text-center">Data Tidak ditemukan</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
