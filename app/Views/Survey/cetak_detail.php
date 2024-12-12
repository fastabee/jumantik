<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tabel</title>
    <style>

.form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #f9f9f9;
        }

        .form-group textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #f9f9f9;
            resize: none;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th, table td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        table th {
            background-color: #f4f4f4;
        }

        .radio-group {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }

        .radio-group label {
            margin: 0;
        }
    </style>
</head>

<body>
    <h2 style="text-align: center;">
        <?php echo ($data->status == 0) ? "Tidak Terdeteksi Jentik" : "Terdeteksi Jentik"; ?>
    </h2>

    <div class="form-group">
            <label for="nama_kk">Nama KK</label>
            <input type="text" id="nama_kk" name="nama_kk" value="<?php echo @$data->nama_kk; ?>" readonly>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea id="alamat" name="alamat" rows="3" readonly><?php echo @$data->alamat; ?></textarea>
        </div>

        <div class="form-group">
            <label for="nama_petugas">Nama Petugas</label>
            <input type="text" id="nama_petugas" name="nama_petugas" value="<?php echo @$data->nama_petugas; ?>" readonly>
        </div>

        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="text" id="tanggal" name="tanggal" value="<?php echo @$data->tanggal; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="tanggal">Jumlah Penderita</label>
            <input type="text" id="tanggal" name="tanggal" value="<?php echo @$data->jumlah; ?>" readonly>
        </div>

    <table>
        <thead>
            <tr>
                <th>Parameter</th>
                <th>Pilihan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>bak mandi</td>
                <td>
                    <div class="radio-group">
                        <label>
                            <input type="radio" name="bak_mandi" value="1" <?php echo @$data->bak_mandi == 1 ? 'checked' : ''; ?> disabled> Ya
                        </label>
                        <label>
                            <input type="radio" name="bak_mandi" value="0" <?php echo @$data->bak_mandi == 0 ? 'checked' : ''; ?> disabled> Tidak
                        </label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>vas bunga</td>
                <td>
                    <div class="radio-group">
                        <label>
                            <input type="radio" name="vas_bunga" value="1" <?php echo @$data->vas_bunga == 1 ? 'checked' : ''; ?> disabled> Ya
                        </label>
                        <label>
                            <input type="radio" name="vas_bunga" value="0" <?php echo @$data->vas_bunga == 0 ? 'checked' : ''; ?> disabled> Tidak
                        </label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>aquarium</td>
                <td>
                    <div class="radio-group">
                        <label>
                            <input type="radio" name="aquarium" value="1" <?php echo @$data->aquarium == 1 ? 'checked' : ''; ?> disabled> Ya
                        </label>
                        <label>
                            <input type="radio" name="aquarium" value="0" <?php echo @$data->aquarium == 0 ? 'checked' : ''; ?> disabled> Tidak
                        </label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>perangkap_semut</td>
                <td>
                    <div class="radio-group">
                        <label>
                            <input type="radio" name="perangkap_semut" value="1" <?php echo @$data->perangkap_semut == 1 ? 'checked' : ''; ?> disabled> Ya
                        </label>
                        <label>
                            <input type="radio" name="perangkap_semut" value="0" <?php echo @$data->perangkap_semut == 0 ? 'checked' : ''; ?> disabled> Tidak
                        </label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>dispenser</td>
                <td>
                    <div class="radio-group">
                        <label>
                            <input type="radio" name="dispenser" value="1" <?php echo @$data->dispenser == 1 ? 'checked' : ''; ?> disabled> Ya
                        </label>
                        <label>
                            <input type="radio" name="dispenser" value="0" <?php echo @$data->dispenser == 0 ? 'checked' : ''; ?> disabled> Tidak
                        </label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>kolam_ikan</td>
                <td>
                    <div class="radio-group">
                        <label>
                            <input type="radio" name="kolam_ikan" value="1" <?php echo @$data->kolam_ikan == 1 ? 'checked' : ''; ?> disabled> Ya
                        </label>
                        <label>
                            <input type="radio" name="kolam_ikan" value="0" <?php echo @$data->kolam_ikan == 0 ? 'checked' : ''; ?> disabled> Tidak
                        </label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>perangkap_semut</td>
                <td>
                    <div class="radio-group">
                        <label>
                            <input type="radio" name="perangkap_semut" value="1" <?php echo @$data->perangkap_semut == 1 ? 'checked' : ''; ?> disabled> Ya
                        </label>
                        <label>
                            <input type="radio" name="perangkap_semut" value="0" <?php echo @$data->perangkap_semut == 0 ? 'checked' : ''; ?> disabled> Tidak
                        </label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>drum</td>
                <td>
                    <div class="radio-group">
                        <label>
                            <input type="radio" name="drum" value="1" <?php echo @$data->drum == 1 ? 'checked' : ''; ?> disabled> Ya
                        </label>
                        <label>
                            <input type="radio" name="drum" value="0" <?php echo @$data->drum == 0 ? 'checked' : ''; ?> disabled> Tidak
                        </label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>pembuangan air kulkas</td>
                <td>
                    <div class="radio-group">
                        <label>
                            <input type="radio" name="pembuangan_kulkas" value="1" <?php echo @$data->pembuangan_kulkas == 1 ? 'checked' : ''; ?> disabled> Ya
                        </label>
                        <label>
                            <input type="radio" name="pembuangan_kulkas" value="0" <?php echo @$data->pembuangan_kulkas == 0 ? 'checked' : ''; ?> disabled> Tidak
                        </label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>kolam_renang</td>
                <td>
                    <div class="radio-group">
                        <label>
                            <input type="radio" name="kolam_renang" value="1" <?php echo @$data->kolam_renang == 1 ? 'checked' : ''; ?> disabled> Ya
                        </label>
                        <label>
                            <input type="radio" name="kolam_renang" value="0" <?php echo @$data->kolam_renang == 0 ? 'checked' : ''; ?> disabled> Tidak
                        </label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>kaleng_bekas</td>
                <td>
                    <div class="radio-group">
                        <label>
                            <input type="radio" name="kaleng_bekas" value="1" <?php echo @$data->kaleng_bekas == 1 ? 'checked' : ''; ?> disabled> Ya
                        </label>
                        <label>
                            <input type="radio" name="kaleng_bekas" value="0" <?php echo @$data->kaleng_bekas == 0 ? 'checked' : ''; ?> disabled> Tidak
                        </label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>pagar</td>
                <td>
                    <div class="radio-group">
                        <label>
                            <input type="radio" name="pagar" value="1" <?php echo @$data->pagar == 1 ? 'checked' : ''; ?> disabled> Ya
                        </label>
                        <label>
                            <input type="radio" name="pagar" value="0" <?php echo @$data->pagar == 0 ? 'checked' : ''; ?> disabled> Tidak
                        </label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>pelepah_pisang</td>
                <td>
                    <div class="radio-group">
                        <label>
                            <input type="radio" name="pelepah_pisang" value="1" <?php echo @$data->pelepah_pisang == 1 ? 'checked' : ''; ?> disabled> Ya
                        </label>
                        <label>
                            <input type="radio" name="pelepah_pisang" value="0" <?php echo @$data->pelepah_pisang == 0 ? 'checked' : ''; ?> disabled> Tidak
                        </label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>meteran_air</td>
                <td>
                    <div class="radio-group">
                        <label>
                            <input type="radio" name="meteran_air" value="1" <?php echo @$data->meteran_air == 1 ? 'checked' : ''; ?> disabled> Ya
                        </label>
                        <label>
                            <input type="radio" name="meteran_air" value="0" <?php echo @$data->meteran_air == 0 ? 'checked' : ''; ?> disabled> Tidak
                        </label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>talang_air</td>
                <td>
                    <div class="radio-group">
                        <label>
                            <input type="radio" name="talang_air" value="1" <?php echo @$data->talang_air == 1 ? 'checked' : ''; ?> disabled> Ya
                        </label>
                        <label>
                            <input type="radio" name="talang_air" value="0" <?php echo @$data->talang_air == 0 ? 'checked' : ''; ?> disabled> Tidak
                        </label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>reservisor</td>
                <td>
                    <div class="radio-group">
                        <label>
                            <input type="radio" name="reservisor" value="1" <?php echo @$data->reservisor == 1 ? 'checked' : ''; ?> disabled> Ya
                        </label>
                        <label>
                            <input type="radio" name="reservisor" value="0" <?php echo @$data->reservisor == 0 ? 'checked' : ''; ?> disabled> Tidak
                        </label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>tempat_wudhu</td>
                <td>
                    <div class="radio-group">
                        <label>
                            <input type="radio" name="tempat_wudhu" value="1" <?php echo @$data->tempat_wudhu == 1 ? 'checked' : ''; ?> disabled> Ya
                        </label>
                        <label>
                            <input type="radio" name="tempat_wudhu" value="0" <?php echo @$data->tempat_wudhu == 0 ? 'checked' : ''; ?> disabled> Tidak
                        </label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>botor_air</td>
                <td>
                    <div class="radio-group">
                        <label>
                            <input type="radio" name="botol_air" value="1" <?php echo @$data->botol_air == 1 ? 'checked' : ''; ?> disabled> Ya
                        </label>
                        <label>
                            <input type="radio" name="botol_air" value="0" <?php echo @$data->botol_air == 0 ? 'checked' : ''; ?> disabled> Tidak
                        </label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>tampungan_ac</td>
                <td>
                    <div class="radio-group">
                        <label>
                            <input type="radio" name="tampungan_ac" value="1" <?php echo @$data->tampungan_ac == 1 ? 'checked' : ''; ?> disabled> Ya
                        </label>
                        <label>
                            <input type="radio" name="tampungan_ac" value="0" <?php echo @$data->tampungan_ac == 0 ? 'checked' : ''; ?> disabled> Tidak
                        </label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>minum_burung</td>
                <td>
                    <div class="radio-group">
                        <label>
                            <input type="radio" name="minum_burung" value="1" <?php echo @$data->minum_burung == 1 ? 'checked' : ''; ?> disabled> Ya
                        </label>
                        <label>
                            <input type="radio" name="minum_burung" value="0" <?php echo @$data->minum_burung == 0 ? 'checked' : ''; ?> disabled> Tidak
                        </label>
                    </div>
                </td>
            </tr>
            <!-- Tambahkan baris lainnya sesuai kebutuhan -->
        </tbody>
    </table>
</body>

</html>
