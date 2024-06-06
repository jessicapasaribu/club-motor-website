<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klien Kami - Dealer-Kita</title>
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
            <h2>Klien Kami</h2>
            <div class="welcome">
                <div class="client-list">
                    <div class="client">
                        <img src="images/c1.jpeg" alt="Client 1">
                        <h3>Perusahaan A</h3>
                    </div>
                    <div class="client">
                        <img src="images/c2.jpeg" alt="Client 2">
                        <h3>Perusahaan B</h3>
                    </div>
                    <div class="client">
                        <img src="images/c3.jpeg" alt="Client 3">
                        <h3>Perusahaan C</h3>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <footer>
        <?php include 'temp/footer.php'; ?>
    </footer>
</body>

</html>