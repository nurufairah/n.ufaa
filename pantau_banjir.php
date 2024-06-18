<?php
// Koneksi ke database
$servername = "localhost"; // Ganti dengan nama server Anda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$dbname = "semarang"; // Ganti dengan nama database Anda

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Filter data jika filter telah disubmit
$sql = "SELECT kecamatan, tanggal, cuaca, tinggi_air, status FROM banjir WHERE 1=1";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["kecamatan"]) && $_POST["kecamatan"] != "all") {
        $sql .= " AND kecamatan='" . $_POST["kecamatan"] . "'";
    }
    if (!empty($_POST["date"])) {
        $sql .= " AND tanggal='" . $_POST["date"] . "'";
    }
    if (!empty($_POST["weather"]) && $_POST["weather"] != "all") {
        $sql .= " AND cuaca='" . $_POST["weather"] . "'";
    }
    if (!empty($_POST["status"]) && $_POST["status"] != "all") {
        $sql .= " AND status='" . $_POST["status"] . "'";
    }
}

// Query untuk mengambil data dari tabel banjir
$result = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Education Template - Meeting Detail Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <style>
    /* Animasi Mesin Ketik */
    @keyframes typing {
        from {
            width: 0
        }

        to {
            width: 100%
        }
    }

    @keyframes blink-caret {

        from,
        to {
            border-color: transparent
        }

        50% {
            border-color: #fff
        }
    }

    /* Tampilan Input */
    .typed-text {
        display: inline-block;
        border-right: 2px solid #fff;
        white-space: nowrap;
        overflow: hidden;
        margin: 0;
        padding: 0;
        animation: typing 2s steps(30, end), blink-caret 0.5s step-end infinite alternate;
    }
    </style>
  </head>

<body>

   

  <!-- Sub Header -->
  

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                          PANTAU BANJIR
                      </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="has-sub">
                            <a href="javascript:void(0)">Beranda</a>
                            <ul class="sub-menu">
                                <li><a href="beranda.html">Tata Kelola Birokrasi</a></li>
                                <li><a href="ekonomi.html">Ekonomi</a></li>
                                <li><a href="kehidupanberkota.html">Kehidupan Berkota</a></li>
                            </ul>
                        </li>
                        <li class="has-sub">
                          <a href="javascript:void(0)">Produk</a>
                          <ul class="sub-menu">
                              <li><a href="siharpa.php">SIHARPA</a></li>
                              <li><a href="bunda.php">Sayang Bunda</a></li>
                              <li><a href="pantau_banjir.php">Pantau Banjir</a></li>
                              <li><a href="rusun.php">E-Rusun</a></li>
                              <li><a href="riptek.php">Jurnal RIPTEK</a></li>
                          </ul>
                      </li>
                        <li class="scroll-to-section"><a href="index.html">Contact Us</a></li>
                        
                    </ul>        
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

  <section class="heading-page header-text" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="typed-text">Pantau Banjir</h2>
          <h6>Mengetahui informasi terkini tentang banjir di wilayah Anda</h6>
        </div>
      </div>
    </div>
  </section>

  <section class="meetings-page" id="meetings">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="meeting-single-item">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="filters">
                                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label for="kecamatan">Nama:</label>
                                                        <select class="form-control" id="name" name="kecamatan">
                                                            <option value="all">Semua</option>
                                                            <option value="tembalang">Tembalang</option>
                                                            <option value="gayamsari">Gayamsari</option>
                                                            <option value="pedurungan">Pedurungan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label for="date">Tanggal:</label>
                                                        <input type="date" class="form-control" id="date" name="date">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label for="weather">Cuaca:</label>
                                                        <select class="form-control" id="weather" name="weather">
                                                            <option value="all">Semua</option>
                                                            <option value="cerah">Cerah</option>
                                                            <option value="hujan">Hujan</option>
                                                            <option value="berawan">Berawan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label for="status">Status:</label>
                                                        <select class="form-control" id="status" name="status">
                                                            <option value="all">Semua</option>
                                                            <option value="aman">Aman</option>
                                                            <option value="siaga">Siaga</option>
                                                            <option value="Waspada">Waspada</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                </div>
                                                <div class="form-group">
                                                    <br><button type="submit" class="btn btn-primary" id="filter-button">Filter</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="down-content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="table-responsive" style="overflow-y: auto; max-height: 400px;">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Kecamatan</th>
                                                        <th>Tanggal</th>
                                                        <th>Cuaca</th>
                                                        <th>Tinggi Air</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    // Tampilkan data hasil query
                                                    if ($result->num_rows > 0) {
                                                        while ($row = $result->fetch_assoc()) {
                                                            echo "<tr>";
                                                            echo "<td>" . $row["kecamatan"] . "</td>";
                                                            echo "<td>" . $row["tanggal"] . "</td>";
                                                            echo "<td>" . $row["cuaca"] . "</td>";
                                                            echo "<td>" . $row["tinggi_air"] . "</td>";
                                                            echo "<td>" . $row["status"] . "</td>";
                                                            echo "</tr>";
                                                        }
                                                    } else {
                                                        echo "<tr><td colspan='5'>Tidak ada data</td></tr>";
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
      <p>Copyright © 2024 
          <br>Design: KPUINWS</p>
    </div>
</section>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>

</html>
<?php
// Tutup koneksi database
$conn->close();
?>
