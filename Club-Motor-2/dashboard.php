<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <header>
        <?php include 'temp/navbar.php'; ?>
    </header>

    <div class="main-container">
        <aside class="sidebar">
            <?php include 'temp/sidebar.php'; ?>
        </aside>
        <main class="content">
            <div class="welcome">
                <h2>Perusahaan Dealer-Kita</h2>
            </div>
            <!-- Slider -->
            <div class="slide-bar">
                <div class="slide-content">
                    <img src="images/1.jpeg" alt="Slide 1">
                    <img src="images/2.jpeg" alt="Slide 2">
                    <img src="images/3.jpeg" alt="Slide 3">
                </div>
                <button onclick="prevSlide()">Previous</button>
                <button onclick="nextSlide()">Next</button>
            </div>

            <!-- News Feed -->
            <div class="news-feed">
                <h3>Berita Terbaru</h3>
                <ul class="news-list">
                    <li>
                        <div class="news-item">
                            <img src="images/d1.jpeg" alt="Berita 1">
                            <div class="news-content">
                                <h4>Dealer-Kita merilis produk baru</h4>
                                <p>Dealer-Kita baru-baru ini meluncurkan produk terbaru mereka. Produk ini dilengkapi
                                    dengan fitur-fitur canggih dan inovatif.</p>
                                <a href="#" class="read-more">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="news-item">
                            <img src="images/d2.jpeg" alt="Berita 2">
                            <div class="news-content">
                                <h4>Perusahaan meraih penghargaan prestisius</h4>
                                <p>Dealer-Kita berhasil meraih penghargaan bergengsi sebagai perusahaan terbaik dalam
                                    industri otomotif. Ini merupakan pencapaian yang membanggakan bagi kami.</p>
                                <a href="#" class="read-more">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="news-item">
                            <img src="images/d3.jpeg" alt="Berita 3">
                            <div class="news-content">
                                <h4>Dealer-Kita mengadakan event charity</h4>
                                <p>Dealer-Kita akan mengadakan event charity untuk membantu mereka yang membutuhkan.
                                    Acara ini diharapkan dapat memberikan dampak positif bagi masyarakat.</p>
                                <a href="#" class="read-more">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Testimonial -->
            <div class="testimonial">
                <h3>Testimonial</h3>
                <div class="testimonial-content">
                    <div class="testimonial-item">
                        <p>"Saya sangat puas dengan layanan Dealer-Kita. Produk berkualitas dan pelayanan yang ramah!"
                        </p>
                        <p>- Jessica</p>
                    </div>
                    <div class="testimonial-item">
                        <p>"Terima kasih Dealer-Kita atas produk-produk yang inovatif. Sangat membantu dalam kegiatan
                            sehari-hari!"</p>
                        <p>- Indah</p>
                    </div>
                </div>
            </div>

            <!-- Promo -->
            <div class="promo">
                <h3>Promo Spesial</h3>
                <p>Dapatkan diskon 20% untuk semua produk Dealer-Kita. Promo berlaku hingga akhir bulan ini!</p>
                <button onclick="window.location.href = 'products.php';">Lihat Produk</button>
            </div>

        </main>

    </div>

    <?php include 'temp/footer.php'; ?>

    <script>
        let slideIndex = 0;
        const slides = document.querySelectorAll('.slide-content img');

        function showSlide(n) {
            slides.forEach(slide => slide.style.display = 'none');
            if (n >= slides.length) slideIndex = 0;
            if (n < 0) slideIndex = slides.length - 1;
            slides[slideIndex].style.display = 'block';
        }

        function nextSlide() {
            slideIndex++;
            showSlide(slideIndex);
        }

        function prevSlide() {
            slideIndex--;
            showSlide(slideIndex);
        }

        function autoSlide() {
            nextSlide();
        }

        // Set interval untuk mengatur perpindahan slide otomatis setiap 3 detik
        setInterval(autoSlide, 3000);

        showSlide(slideIndex);
    </script>
    </