<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="styles.css"> <!-- Link ke file CSS eksternal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

</head>
<body>

<!-- Container for the content -->
<div class="container">

    <!-- Card for displaying item data -->
    

    <!-- Cards for the Charts -->
    <div class="charts-container">
        <div class="chart-card">
        <h3 class="chart-card-title">Grafik Kasus Demam Berdarah</h3>
            <h3 class="chart-card-title">Grafik Batang</h3>
            <!-- Line Chart -->
            <canvas style="border: 2px solid black;" id="surveyChart" width="400" height="200"></canvas>

            <h3 class="chart-card-title">Grafik Bulat</h3>
            <!-- Pie Chart -->
            <canvas style="border: 2px solid black;" id="surveyPieChart" width="400" height="200"></canvas>
        </div>

        
    </div>

    <div class="card">
        <h2 class="card-title">Rangkuman</h2>
        <p style="padding-top: 5px; font-style: italic;"> Berdasarkan grafik diatas total terjangkit demam berdarah adalah <?= array_sum($totals); ?>. Data tertampil adalah data <?= count($totals); ?> bulan terakhir terhitung dari bulan sekarang. Data tersebut terakhir terupdate pada bulan <?= date('F Y'); ?></p>
       <center>
        <button id="downloadPdf" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">
    Download PDF
</button>
</center>

    </div>

</div>

<div id="downloadLinkContainer" style="display: none; margin-top: 10px;">
    <p>Salin link berikut untuk mengunduh PDF:</p>
    <input type="text" id="downloadLink" value="" readonly class="w-full px-4 py-2 border border-gray-300 rounded">
    <button id="copyLink" class="mt-2 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">
        Salin Link
    </button>
</div>

<script>
    document.getElementById('downloadPdf').addEventListener('click', function() {
        const { jsPDF } = window.jspdf; // Menggunakan jsPDF

        // Membuat instance baru jsPDF
        const doc = new jsPDF();

        // Menambahkan Judul di Bagian Atas
        doc.setFontSize(18);
        doc.setFont("helvetica", "bold");
        doc.text("                                 Grafik Kasus Demam Berdarah", 10, 10); // Menambahkan judul di atas (x, y)

        // Ambil grafik dari canvas dan konversi menjadi gambar
        const surveyChartCanvas = document.getElementById('surveyChart');
        const surveyPieChartCanvas = document.getElementById('surveyPieChart');

        // Menambahkan Line Chart (grafik pertama) ke PDF
        const lineChartImage = surveyChartCanvas.toDataURL('image/png');
        doc.addImage(lineChartImage, 'PNG', 10, 20, 180, 90); // Menambahkan gambar ke PDF (x, y, width, height)

        // Menambahkan Pie Chart (grafik kedua) ke PDF
        const pieChartImage = surveyPieChartCanvas.toDataURL('image/png');
        doc.addImage(pieChartImage, 'PNG', 10, 120, 180, 90); // Menambahkan gambar ke PDF (x, y, width, height)

        // Menambahkan Deskripsi Teks di Bagian Bawah dengan Baris Baru
        doc.setFontSize(12);
        doc.setFont("helvetica", "italic");
        
        const text = [
            "Rangkuman: Berdasarkan grafik diatas total terjangkit demam berdarah adalah " + <?= array_sum($totals); ?> + ".",
            "Data tertampil adalah data " + <?= count($totals); ?> + " bulan terakhir terhitung dari bulan sekarang.",
            "Data tersebut terakhir terupdate pada bulan " + "<?= date('F Y'); ?>."
        ];

        let yPosition = 220; // Posisi Y awal untuk teks

        // Loop untuk menambahkan setiap baris teks ke dalam PDF
        text.forEach(function(line) {
            doc.text(line, 10, yPosition);
            yPosition += 10; // Menambah jarak antara baris teks
        });
        doc.save('grafik_kasus_demam_berdarah.pdf');
    });
</script>
<script>
    const months = <?= json_encode($months); ?>; // Bulan-bulan yang sudah diproses
    const totals = <?= json_encode($totals); ?>; // Jumlah yang sudah diproses, dengan 0 jika tidak ada data

    // Line Chart
    const ctxLine = document.getElementById('surveyChart').getContext('2d');
    const surveyLineChart = new Chart(ctxLine, {
        type: 'line',
        data: {
            labels: months, // Label bulan
            datasets: [{
                label: 'Jumlah Survey',
                data: totals, // Data jumlah per bulan
                borderColor: 'rgba(75, 192, 192, 1)',
                fill: false
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Pie Chart
    const ctxPie = document.getElementById('surveyPieChart').getContext('2d');
    const surveyPieChart = new Chart(ctxPie, {
        type: 'pie',
        data: {
            labels: months, // Label bulan
            datasets: [{
                label: 'Jumlah Survey',
                data: totals, // Data jumlah per bulan
                backgroundColor: [
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 99, 132, 0.2)'
                ],
                borderColor: [
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255, 99, 132, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true
        }
    });
</script>

</body>

<style>

    /* CSS for the general layout */
body {
    font-family: Arial, sans-serif;
    background-color: #f3f4f6; /* Light gray background */
    
    margin: 0;
}

/* Container that holds all content */
.container {
    background-image: url('https://i.pinimg.com/originals/62/7f/fa/627ffa8faacfee2c52110c63541eb926.gif');
    max-width: 100%;
    margin: 0;
    padding: 20px;
}

/* Card styling for item data */
.card {
    
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin-bottom: 40px;
    
}

.card-title {
    font-size: 24px;
    font-weight: 600;
    color: #4a5568;
    margin-bottom: 16px;
}

.card-list {
    padding-left: 20px;
    list-style-type: disc;
}

.card-list li {
    font-size: 16px;
    color: #4a5568;
}

/* Card for charts */
.chart-card {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin-bottom: 40px;
    width: 80%;
    text-align: center;
}

.chart-card-title {
    font-size: 20px;
    font-weight: 600;
    color: #4a5568;
    margin-bottom: 16px;
}

/* Charts Container */
.charts-container {
    display: flex;
    flex-direction: column;
    
    align-items: center;
}

.chart-wrapper {
    max-width: 80%;
    margin-bottom: 40px;
}

@media (min-width: 768px) {
    /* For tablet and larger screens */
    .charts-container {
        flex-direction: row;
        justify-content: space-around;
    }
    .chart-wrapper {
        max-width: 45%;
    }
}

</style>
</html>
