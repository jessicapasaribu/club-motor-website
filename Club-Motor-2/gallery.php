<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Foto - Dealer-Kitab</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/gallery.css"> <!-- File CSS untuk galeri foto -->
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
                <h2>Galeri Foto Dealer-Kita</h2>
            </div>
            <!-- Galeri Foto -->
            <div class="gallery">

                <figure class="image">
                    <img src="images/1.jpeg" alt="Photo 1">
                    <figcaption>Yamaha R15</figcaption>
                </figure>
                <figure class="image">
                    <img src="images/2.jpeg" alt="Photo 2">
                    <figcaption>Honda CBR250RR</figcaption>
                </figure>
                <figure class="image">
                    <img src="images/3.jpeg" alt="Photo 3">
                    <figcaption>Kawasaki Ninja 250</figcaption>
                </figure>
                <figure class="image">
                    <img src="images/4.jpeg" alt="Photo 4">
                    <figcaption>Suzuki GSX-R150</figcaption>
                </figure>
                <figure class="image">
                    <img src="images/5.jpeg" alt="Photo 5">
                    <figcaption>KTM RC200</figcaption>
                </figure>
                <figure class="image">
                    <img src="images/6.jpeg" alt="Photo 6">
                    <figcaption>BMW S1000RR</figcaption>
                </figure>
                <figure class="image">
                    <img src="images/7.jpeg" alt="Photo 7">
                    <figcaption>Ducati Panigale V4</figcaption>
                </figure>
                <figure class="image">
                    <img src="images/8.jpeg" alt="Photo 8">
                    <figcaption>Aprilia RSV4</figcaption>
                </figure>
                <figure class="image">
                    <img src="images/9.jpeg" alt="Photo 9">
                    <figcaption>Triumph Street Triple RS</figcaption>
                </figure>
                <!-- Tambahkan lebih banyak gambar di sini -->
            </div>
        </main>
    </div>

    <footer>
        <?php include 'temp/footer.php'; ?>
    </footer>
</body>

</html>
