<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Dealer-Kita</title>
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
            <h2>About Us</h2>
            <div class="welcome">
                <div class="about-content">
                    <h3>Tentang Dealer-Kita</h3>
                    <p>Dealer-Kita adalah perusahaan yang bergerak di bidang otomotif sejak tahun 2005. Kami didirikan
                        dengan tujuan untuk menyediakan layanan terbaik dalam penjualan mobil dan motor, serta
                        menyediakan suku cadang dan layanan purna jual yang handal.</p>
                    <p>Sejak awal berdirinya, kami telah berkomitmen untuk memberikan pengalaman pelanggan yang
                        memuaskan dengan menyediakan produk berkualitas dan layanan yang ramah. Kami percaya bahwa
                        setiap pelanggan layak mendapatkan kendaraan impian mereka tanpa harus mengorbankan kualitas dan
                        keamanan.</p>
                    <p>Dengan tim profesional dan berpengalaman, Dealer-Kita terus berkembang untuk menjadi salah satu
                        dealer terkemuka di Indonesia. Kami berkomitmen untuk terus meningkatkan kualitas layanan kami
                        dan memenuhi kebutuhan setiap pelanggan kami.</p>
                    <img src="images/a1.jpeg" alt="Image 1">
                    <img src="images/a2.jpeg" alt="Image 2">
                    <img src="images/a3.jpeg" alt="Image 3">
                </div>
            </div>
        </main>

    </div>

    <footer>
        <?php include 'temp/footer.php'; ?>
    </footer>
</body>

</html>