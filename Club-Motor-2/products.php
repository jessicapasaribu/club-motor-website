<?php
// Informasi produk (contoh)
$products = [
    ['name' => 'Yamaha R15', 'price' => 'Rp 35.000.000', 'image' => '1.jpeg'],
    ['name' => 'Honda CBR250RR', 'price' => 'Rp 50.000.000', 'image' => '2.jpeg'],
    ['name' => 'Kawasaki Ninja 250', 'price' => 'Rp 45.000.000', 'image' => '3.jpeg'],
    ['name' => 'Suzuki GSX-R150', 'price' => 'Rp 37.000.000', 'image' => '4.jpeg'],
    ['name' => 'KTM RC200', 'price' => 'Rp 55.000.000', 'image' => '5.jpeg'],
    ['name' => 'BMW S1000RR', 'price' => 'Rp 150.000.000', 'image' => '6.jpeg'],
    ['name' => 'Ducati Panigale V4', 'price' => 'Rp 300.000.000', 'image' => '7.jpeg'],
    ['name' => 'Aprilia RSV4', 'price' => 'Rp 250.000.000', 'image' => '8.jpeg'],
    ['name' => 'Triumph Street Triple RS', 'price' => 'Rp 190.000.000', 'image' => '9.jpeg'],
    ['name' => 'Harley-Davidson Iron 883', 'price' => 'Rp 150.000.000', 'image' => '10.jpeg'],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Kami - Dealer-Kita</title>
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
        <h2>Product Kami</h2>
            <div class="welcome">
                <?php foreach ($products as $product): ?>
                    <div class="product">
                        <img src="images/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                        <h3><?php echo $product['name']; ?></h3>
                        <p>Harga: <?php echo $product['price']; ?></p>
                        <button class="buy-button">Buy</button> 
                    </div>
                <?php endforeach; ?>
            </div>
        </main>
    </div>

    <footer>
        <?php include 'temp/footer.php'; ?>
    </footer>
</body>

</html>
