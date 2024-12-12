<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi</title>
    <style>
        body {
    background-image: url('https://i.pinimg.com/originals/e6/0c/4a/e60c4ae6305c1b5d57e9954166761db9.gif');
    background-size: 1000%; /* Memastikan background memenuhi seluruh halaman */
    background-repeat: no-repeat; /* Mencegah pengulangan gambar */
    
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
}


        .search-container {

            width: 80%;
            /* Lebar default menjadi 80% layar */
            max-width: 600px;
            /* Batas maksimum untuk perangkat lebih besar */
        }

        .search-container input {
            width: 95%;
            padding: 5px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            margin-top: 20px;
            padding: 0 10px;
        }

        .card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 90%;
            /* Lebar default menjadi 80% layar */
            max-width: 400px;
            /* Batas maksimum untuk perangkat lebih besar */
            text-align: center;
            padding: 20px;
            box-sizing: border-box;
        }

        .card img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .card h3 {
            margin: 10px 0;
            font-size: 18px;
        }

        .card p {
            font-size: 14px;
            color: gray;
        }

        /* Media Query for Mobile Screens */
        @media (max-width: 768px) {
            .search-container {
                margin: 10px 0;
            }

            .search-container input {
                font-size: 14px;
                padding: 8px;
            }

            .card {
                height: auto;
                width: 300px;
                /* Tetap 80% layar pada perangkat mobile */
            }

            .card img {
                max-width: 100%;
                height: 150px;
                border-radius: 10px;
            }

            .card h3 {
                margin: 10px 0;
                font-size: 18px;
            }

            .card p {
                font-size: 14px;
                color: gray;
            }

        }
    </style>
</head>

<body>
    <br>
    <div class="search-container">
        <form method="get" action="<?= base_url('informasi') ?>">
            <input
                type="text"
                name="search"
                placeholder="Cari informasi..."
                value="<?= isset($search) ? $search : '' ?>"> <!-- Isi kembali pencarian -->
        </form>
    </div>


    <div class="card-container">


        <div class="card">

            <?php if ($data->getNumRows() > 0): ?>
                <?php foreach ($data->getResult() as $row): ?>
                    <div>
                        <img src="<?= base_url('public/assets/foto/' . $row->foto) ?>" alt="<?= $row->nama ?>">
                        <a href="<?= base_url('detail/info/') . $row->id?>"><h3><?= $row->nama ?></h3></a>
                        <p><?= $row->subdes ?></p>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Tidak ada informasi yang ditemukan.</p>
            <?php endif; ?>



        </div>
</body>

</html>