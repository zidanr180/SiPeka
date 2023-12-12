<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<link rel="icon" href="img/sipekaaja.png" type="image/png">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SiPeka | Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:400,700&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.22.0/font/bootstrap-icons.css">

    
   <link rel="stylesheet" href="css/style.css">

   <style>
        #grafikKetinggian {
            max-width: 300%;
            max-height: 300%;
            align-items: center;
        }

       
    </style>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>
<body>

<div class="navbar" id="navbar">
    <div class="logo">
        <a href="#">
            <img src="img/sipekaaja.png" alt="Logo"> 
            Si<span>Peka</span>
        </a>
    </div>
    <div class="menu">
    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speedometer2" viewBox="0 0 16 16">
  <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
  <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
</svg> Dashboard</a>
        <a href="sejarah.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
  <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
  <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
  <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
</svg> Sejarah</a>
        <a href="kejadian.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-collection" viewBox="0 0 16 16">
  <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13z"/>
</svg> Kejadian</a>
        <a href="sop.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book-fill" viewBox="0 0 16 16">
  <path d="M8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
</svg> SOP</a>
        <a href="kontak.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
</svg> Kontak</a>
    </div>
</div>

<div style="margin-top: 60px;">
   
</div>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    
    <ul class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ul>


  
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/pice.png" width="100%" height="auto" alt="Gambar 1">
            <div class="carousel-caption">
            <p><?php
                    date_default_timezone_set('Asia/Jakarta');
                    $current_time = date('H:i:s');
                    echo 'Belitung Timur: ' . $current_time;
                    ?>WIB</p>
                <h3>SiPeka | Sistem Pemantauan Ketinggian Air</h3>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/pice2.png" width="100%" height="auto" alt="Gambar 2">
            <div class="carousel-caption">
            <p><?php
                    date_default_timezone_set('Asia/Jakarta');
                    $current_time = date('H:i:s');
                    echo 'Belitung Timur: ' . $current_time;
                    ?>WIB</p>
                <h3>SiPeka | Sistem Pemantauan Ketinggian Air</h3>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/pice13.png" width="100%" height="auto" alt="Gambar 3">
            <div class="carousel-caption">
            <p><?php
                    date_default_timezone_set('Asia/Jakarta');
                    $current_time = date('H:i:s');
                    echo 'Belitung Timur: ' . $current_time;
                    ?>WIB</p>
                <h3>SiPeka | Sistem Pemantauan Ketinggian Air</h3>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/pice4.png " width="100%" height="auto" alt="Gambar 2">
            <div class="carousel-caption">
            <p><?php
                    date_default_timezone_set('Asia/Jakarta');
                    $current_time = date('H:i:s');
                    echo 'Belitung Timur: ' . $current_time;
                    ?>WIB</p>
                <h3>SiPeka | Sistem Pemantauan Ketinggian Air</h3>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/pice5.png" width="100%" height="auto" alt="Gambar 2">
            <div class="carousel-caption">
            <p><?php
                    date_default_timezone_set('Asia/Jakarta');
                    $current_time = date('H:i:s');
                    echo 'Belitung Timur: ' . $current_time;
                    ?>WIB</p>
                <h3>SiPeka | Sistem Pemantauan Ketinggian Air</h3>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/pice6.png" width="100%" height="auto" alt="Gambar 2">
            <div class="carousel-caption">
            <p><?php
                    date_default_timezone_set('Asia/Jakarta');
                    $current_time = date('H:i:s');
                    echo 'Belitung Timur: ' . $current_time;
                    ?>WIB</p>
                <h3>SiPeka | Sistem Pemantauan Ketinggian Air</h3>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/pice7.png" width="100%" height="auto" alt="Gambar 2">
            <div class="carousel-caption">
            <p><?php
                    date_default_timezone_set('Asia/Jakarta');
                    $current_time = date('H:i:s');
                    echo 'Belitung Timur: ' . $current_time;
                    ?>WIB</p>
                <h3>SiPeka | Sistem Pemantauan Ketinggian Air</h3>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/pice8.png" width="100%" height="auto" alt="Gambar 2">
            <div class="carousel-caption">
            <p><?php
                    date_default_timezone_set('Asia/Jakarta');
                    $current_time = date('H:i:s');
                    echo 'Belitung Timur: ' . $current_time;
                    ?>WIB</p>
                <h3>SiPeka | Sistem Pemantauan Ketinggian Air</h3>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/pice9.png" width="100%" height="auto" alt="Gambar 2">
            <div class="carousel-caption">
            <p><?php
                    date_default_timezone_set('Asia/Jakarta');
                    $current_time = date('H:i:s');
                    echo 'Belitung Timur: ' . $current_time;
                    ?>WIB</p>
                <h3>SiPeka | Sistem Pemantauan Ketinggian Air</h3>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/pice10.png" width="100%" height="auto" alt="Gambar 2">
            <div class="carousel-caption">
            <p><?php
                    date_default_timezone_set('Asia/Jakarta');
                    $current_time = date('H:i:s');
                    echo 'Belitung Timur: ' . $current_time;
                    ?>WIB</p>
                <h3>SiPeka | Sistem Pemantauan Ketinggian Air</h3>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/pice11.png" width="100%" height="auto" alt="Gambar 2">
            <div class="carousel-caption">
            <p><?php
                    date_default_timezone_set('Asia/Jakarta');
                    $current_time = date('H:i:s');
                    echo 'Belitung Timur: ' . $current_time;
                    ?>WIB</p>
                <h3>SiPeka | Sistem Pemantauan Ketinggian Air</h3>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/pice12.png"  width="100%" height="auto" alt="Gambar 2">
            <div class="carousel-caption">
            <p><?php
                    date_default_timezone_set('Asia/Jakarta');
                    $current_time = date('H:i:s');
                    echo 'Belitung Timur: ' . $current_time;
                    ?>WIB</p>
                <h3>SiPeka | Sistem Pemantauan Ketinggian Air</h3>
            </div>
        </div>
    </div>

   
    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>

<section id="data-bencana-alam">
    <div class="container">
        <h2>Data Sensor Saat Ini</h2>
        
        <p>5.5 cm</p>
        
    </div>
</section>

<div class="container-a">
    <div class="gauge-container">
        <h2>Ketinggian <span class="bold-text">Air</span></h2>
        <img src="img/gauge.png" alt="Chart Image">
        <p></p>
    </div>
    <div class="chart-container">
        <h2>Grafik <span class="bold-text">Ketinggian Air</span></h2>
        <img src="img/chart.png" alt="Gauge Image">
        <p></p>
    </div>
</div>

<section id="data-bencana-alam">
    <div class="container">
        <h2>Data Ketinggian Air Bendungan Pice</h2>
        
        <p>5.5 cm</p>
        
    </div>
</section>

<div class="container-b">
    <div class="gauge-container">
        <h2>Ketinggian <span class="bold-text">Air Bendungan Pice</span></h2>
        
        <a href="jajal.php"><canvas id="grafikKetinggian"></canvas></a>
   
    <div class="ketinggian">
        <p><a href="jajal.php">Klik Untuk Lihat Rekap Data Ketinggian Air</a></p>
        </div>
    </div>

</div>

<div class="dibuka-tutup">
    <br>
    <h3> STATUS Pintu Bendungan Sedang Dibuka/Tutup</h3>
    <br>
    <p>-</p>
    <p>-</p>
    <p>-</p>
    <p>-</p>
    <p>-</p>
    <p>-</p>
    <br>
</div>

<div class="jagoan">
    <br>
    <h3>Status Bendungan</h3>
    <div id="status-container">
<div class="status status-aman">
        <p><a href="sopuser.php">Aman</a></p>
    </div>
    <div class="status status-waspada">
        <p><a href="sopuser.php">WaspadaSiaga 3</a></p>
    </div>
    <div class="status status-siaga">
        <p><a href="sopuser.php">Siaga 2</a></p>
    </div>
    <div class="status status-awas">
        <p><a href="sopuser.php">Awas Siaga 1</a></p>
    </div>
</div>
    <br>
    <br>
</div>
    
    


<div class="apa">
    <br>
<h3>Banjir 2017</h3>
<br>
</div>
<div class="video-container">
    
    <br>
    <br>
        <iframe id="main-video" src="https://www.youtube.com/embed/XQRUBlC6qC4?si=VBIBFcZgmSlxOsld" frameborder="0" allowfullscreen></iframe>
        <div id="other-videos">
            <iframe class="other-video" src="https://www.youtube.com/embed//Z5su8s4ayb4?si=qjRl4kxys9StaNl0" frameborder="0" allowfullscreen></iframe>
            <iframe class="other-video" src="https://www.youtube.com/embed/dLHp1vMlKkU?si=hrwnYWVBYfnzTddd" frameborder="0" allowfullscreen></iframe>
              
                <br>
        </div>
    </div>

   


<!-- 
    footer -->
    <footer class="footer-distributed">

<div class="footer-left">
<img src="img/sipekaaja.png">
    <h3>Sipe<span>Ka</span></h3>

    <p class="footer-links">
        <a href="#">Home</a>
        |
        <a href="#">Blog</a>
        |
        <a href="#">About</a>
        |
        <a href="#">Contact</a>
    </p>

    <p class="footer-company-name"> Sipeka app © 2023 </p>
</div>

<div class="footer-center">
    <div>
        <i class="fa fa-map-marker"></i>
          <p><span>25R8+733,
          Kec. Gantung, Kabupaten Belitung Timur,</span>
          Kepulauan Bangka Belitung</p>
    </div>

    <div>
        <i class="fa fa-phone"></i>
        
    </div>
    <div>
        <i class="fa fa-envelope"></i>
        <p><a href="">teampillarpice@gmail.com</a></p>
    </div>
</div>
<div class="footer-right">
    <p class="footer-company-about">
        <span>Tentang Kami</span>
        Ini adalah situs web resmi untuk informasi tentang Proyek KBKM Kemah Budaya 2023 di Desa Lenggang, Kelompok Bendungan Pice.</p>
    <div class="footer-icons">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-youtube"></i></a>
        <br>
        <img src="img/kemendikbud.png" alt="">
        <img src="img/kbkm.png" alt="">
      
    </div>
</div>
</footer>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script>
    
    window.onscroll = function() {
        var navbar = document.getElementById("navbar");
        if (window.scrollY > 0) {
            navbar.classList.add("navbar-scrolled");
        } else {
            navbar.classList.remove("navbar-scrolled");
        }
    };

       $(document).ready(function() {
            $('.carousel').carousel({
                interval: 2000, 
                wrap: true, 
            });
        });

        function getStatus() {
      fetch('/status')
        .then(response => response.json())
        .then(data => {
          document.getElementById('status').textContent = 'Status Pintu Bendungan: ' + data.status;
        });
    }

    getStatus();

    var dataKetinggian = [];
        var dataJam = [];
        var grafik = null;

        // Ambil data dari localStorage
        var storedData = JSON.parse(localStorage.getItem("ketinggianData"));

        if (storedData) {
            // Membuat objek rekap data per bulan
            var rekapDataPerBulan = {};

            storedData.forEach(function(item) {
                var jam = item.jam;
                var bulan = new Date(jam).toLocaleString('default', { month: 'long' });

                if (!rekapDataPerBulan[bulan]) {
                    rekapDataPerBulan[bulan] = { jam: [], ketinggian: [] };
                }

                rekapDataPerBulan[bulan].jam.push(jam);
                rekapDataPerBulan[bulan].ketinggian.push(item.ketinggian);

                dataJam.push(jam);
                dataKetinggian.push(item.ketinggian);
            });

            // Menggambar grafik utama
            var ctx = document.getElementById('grafikKetinggian').getContext('2d');
            grafik = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: dataJam,
                    datasets: [{
                        label: 'Ketinggian (meter)',
                        data: dataKetinggian,
                        borderColor: 'rgb(75, 192, 192)',
                        fill: false,
                    }]
                },
                options: {
                    scales: {
                        x: {
                            beginAtZero: true,
                        },
                        y: {
                            beginAtZero: true,
                        }
                    },
                    maintainAspectRatio: false,
                    responsive: true,
                }
            });
        }


</script>

</body>
</html>
