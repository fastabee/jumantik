<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <style>
        body {
            background-image: url('https://i.pinimg.com/originals/ef/c6/d2/efc6d29967edb7c2130b9979e868ea14.gif');
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        
        img {
            max-width: 80%;
            height: auto;
            margin-bottom: 20px;
        }
        
        button {
            border-radius: 10px;
            color: white;
            background-color: cadetblue;
            padding: 10px 20px;
            border: none;
            height: 100px;
            font-size: 16px;
            cursor: pointer;
            width: 80%; /* Responsif di layar kecil */
            max-width: 300px; /* Maksimal lebar tombol */
            margin: 10px 0;
        }
        
        button:hover {
            background-color: darkcyan;
        }

        @media (max-width: 600px) {
            button {
                font-size: 14px;
                padding: 8px 16px;
            }
        }
    </style>
</head>
<body>

    <img src="https://cdn.dribbble.com/users/8619169/screenshots/16116886/data_inform_illustration_animation.gif" alt="Report Image">

    <a href="<?= base_url('riwayat')?>"><button style="font-style: italic; font-size: medium; width: 300px;">Report</button></a>
    <a href="<?= base_url('grafik2')  ?>"><button style="font-style: italic; font-size: medium; width: 300px;">Grafik</button></a>

</body>
</html>
