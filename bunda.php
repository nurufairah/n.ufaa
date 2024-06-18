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
        animation: typing 2s steps(15, end), blink-caret 0.5s step-end infinite alternate;
    }
    </style>
    <script>
    // Fungsi untuk memprediksi tanggal kelahiran berdasarkan tanggal hari pertama haid terakhir
    function prediksiKelahiran(tanggalHaidTerakhir) {
        // Mengonversi tanggalHaidTerakhir menjadi objek Date
        let tanggal = new Date(tanggalHaidTerakhir);

        // Menambahkan 280 hari (40 minggu) ke tanggal hari pertama haid terakhir
        tanggal.setDate(tanggal.getDate() + 280);

        // Mengembalikan tanggal kelahiran dalam format yang sesuai
        return tanggal.toDateString();
    }

    // Fungsi untuk menampilkan tanggal kelahiran prediksi
    function tampilkanPrediksi() {
        // Mendapatkan nilai dari input tanggal hari pertama haid terakhir
        let tanggalHaidTerakhir = document.getElementById('tanggalHaid').value;

        // Memanggil fungsi prediksiKelahiran untuk mendapatkan tanggal prediksi
        let tanggalKelahiran = prediksiKelahiran(tanggalHaidTerakhir);

        // Menampilkan tanggal prediksi di dalam elemen dengan id 'hasilPrediksi'
        document.getElementById('hasilPrediksi').innerText = "Perkiraan tanggal kelahiran: " + tanggalKelahiran;
    }
    </script>
   
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
                          SAYANG BUNDA
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
                    <h2 class="typed-text">Sayang Bunda</h2>
                    <h6>Dapatkan Pengetahuan Lengkap dan Tepercaya Seputar Kehamilan Anda!</h6>
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
                                <div class="down-content">
                                    <h4>Prediksi Kelahiran</h4>
                                    anggal hari pertama haid terakhir -->
                                    <form>
                                        <label for="tanggalHaid">Tanggal Hari Pertama Haid Terakhir:</label>
                                        <input type="date" id="tanggalHaid" name="tanggalHaid">
                                        <button type="button" onclick="tampilkanPrediksi()">Prediksi Tanggal
                                            Kelahiran</button>
                                    </form>
                                    <!-- Elemen untuk menampilkan hasil prediksi -->
                                    <p id="hasilPrediksi"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-courses" id="courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Artikel</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="owl-courses-item owl-carousel">
                        <div class="item">
                            <img src="assets/images/kurma.jpg" alt="Course One">
                            <div class="down-content">
                                <h4>Simak yuk Bunda, Manfaat Buah Kurma bagi Ibu Hamil</h4>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/resize_bunda/parenting.jpg" alt="Course Two">
                            <div class="down-content">
                                <h4>Parenting : Anak Kedua Lahir, Bagaimana Memberi Pengertian Kepada Si Sulung</h4>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/resize_bunda/anemia.jpg" alt="">
                            <div class="down-content">
                                <h4>Waspada Anemia pada Ibu Hamil</h4>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/resize_bunda/bunda_gizi.jpg" alt="">
                            <div class="down-content">
                                <h4>5 Superfood untuk Ibu Hamil</h4>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/resize_bunda/mengasuhBalita.jpg" alt="">
                            <div class="down-content">
                                <h4>5 Cara Mengasuh Balita Saat Anda Memiliki Bayi Baru</h4>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/resize_bunda/beratbadan.jpg" alt="">
                            <div class="down-content">
                                <h4>Tips Menambah Berat Badan Ideal selama Kehamilan</h4>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/resize_bunda/persalinan.jpg" alt="">
                            <div class="down-content">
                                <h4>Mengenal Pilihan Persalinan: Normal, Caesar, dan Water Birth</h4>

                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/resize_bunda/beratbadan.jpg" alt="">
                            <div class="down-content">
                                <h4>Menjaga Kesehatan dan Kebugaran setelah Persalinan</h4>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/resize_bunda/beratbadan.jpg" alt="">
                            <div class="down-content">
                                <h4>Meningkatkan Kualitas Tidur Ibu Hamil: Tips dan Trik</h4>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/resize_bunda/mengasuhBalita.jpg" alt="">
                            <div class="down-content">
                                <h4>Persiapan Persalinan: Apa yang Perlu Dipersiapkan Ibu Hamil?</h4>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/resize_bunda/parenting.jpg" alt="">
                            <div class="down-content">
                                <h4>Pentingnya Pendidikan dan Kesadaran tentang Kehamilan dan Persalinan</h4>

                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/resize_bunda/kisah.jpg" alt="">
                            <div class="down-content">
                                <h4>Kisah Inspiratif Ibu Hamil dan Persalinan</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <p>Copyright © 2024 <br>Design: KPUINWS</p>
        </div>
    </section>




    <script>
    const filterButton = document.querySelector('#filter-button');

    filterButton.addEventListener('click', (event) => {
        event.preventDefault();

        // Dapatkan nilai dari setiap input filter
        const name = document.querySelector('#name').value;
        const date = document.querySelector('#date').value;
        const weather = document.querySelector('#weather').value;
        const waterLevel = document.querySelector('#water_level').value;
        const status = document.querySelector('#status').value;

        // Filter data
        const filteredData = data.filter((item) => {
            return (
                (name === 'all' || item.name === name) &&
                (date === '' || item.date === date) &&
                (weather === 'all' || item.weather === weather) &&
                (waterLevel === 'all' || item.water_level === waterLevel) &&
                (status === 'all' || item.status === status)
            );
        });

        // Tampilkan data yang difilter
        const tableBody = document.querySelector('tbody');
        tableBody.innerHTML = '';

        filteredData.forEach((item) => {
            const row = document.createElement('tr');

            const nameCell = document.createElement('td');
            nameCell.textContent = item.name;

            const dateCell = document.createElement('td');
            dateCell.textContent = item.date;

            const weatherCell = document.createElement('td');
            weatherCell.textContent = item.weather;

            const waterLevelCell = document.createElement('td');
            waterLevelCell.textContent = item.water_level;

            const statusCell = document.createElement('td');
            statusCell.textContent = item.status;

            row.appendChild(nameCell);
            row.appendChild(dateCell);
            row.appendChild(weatherCell);
            row.appendChild(waterLevelCell);
            row.appendChild(statusCell);

            tableBody.appendChild(row);
        });

        // Sembunyikan data yang tidak difilter
        const unfilteredRows = document.querySelectorAll('tbody tr');
        unfilteredRows.forEach((row) => {
            if (!filteredData.some((item) => item.name === row.children[0].textContent)) {
                row.style.display = 'none';
            }
        });
    });
    </script>
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
                    scrollTop: reqSectionPos
                },
                800);
        } else {
            $('body, html').scrollTop(reqSectionPos);
        }

    };

    var checkSection = function checkSection() {
        $('.section').each(function() {
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

    $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function(e) {
        e.preventDefault();
        showSection($(this).attr('href'), true);
    });

    $(window).scroll(function() {
        checkSection();
    });
    </script>
</body>


</body>

</html>