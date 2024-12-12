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
            
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 14px; /* Ukuran font diperkecil */
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
            overflow-x: auto; /* Scroll horizontal untuk layar kecil */
            margin: 10px;
            background: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 10px;
        }

        .card {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px 10px;
            padding: 15px;
        }

        .card h3 {
            margin-top: 0;
            font-size: 18px;
            color: #333;
        }
        .card p {
            font-size: 14px;
            color: #666;
        }

        /* Media queries untuk layar kecil */
        @media (max-width: 768px) {
            table {
                font-size: 12px; /* Font lebih kecil untuk tablet */
            }
            th, td {
                padding: 5px;
            }
        }
        @media (max-width: 480px) {
            table {
                font-size: 10px; /* Font lebih kecil untuk ponsel */
            }
            th, td {
                padding: 4px;
            }
        }
    </style>
</head>
<body>
    
        <table>
            <thead>
                <tr>
                    <th>Nama KK</th>
                    <th>Tanggal</th>
                    <th>Alamat</th>
                    <th>Status</th>
                    
                </tr>
            </thead>
            <tbody>
            <?php if ($data->getNumRows() > 0): ?>
                <?php 
                    foreach ($data->getResult() as $row): ?>
                <tr>
                    <td><?= $row->nama_kk?></td>
                    <td><?= $row->tanggal?></td>
                    <td><?= $row->alamat?></td>
                    <td><?= ($row->status > 0) ? 'Positif' : (($row->status == 0) ? 'Negatif' : 'Negatif') ?></td>
                    
                </tr>
                <?php endforeach?>
                <?php else: ?>
                    <tr>
                        <td colspan="10" class="text-center">Data Tidak ditemukan</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    

   
</body>
</html>
