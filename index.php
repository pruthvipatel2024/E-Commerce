<?php include 'includes/header.php'; ?>

<section class="hero">
    <div class="container hero-content">
        <div>
            <p>AUDIO AND VIDEO</p>
            <h1>NIKKON PHOTO<br><span style="color:#2563eb">With Wifi</span></h1>
            <a href="products.php" class="btn">Discover Now</a>
        </div>
        <img src="assets/images/hero-camera.png">
    </div>
</section>

<section class="container">
    <h2>Best Selling Products</h2>
    <div class="grid grid-4">
        <?php for($i=1;$i<=4;$i++): ?>
        <div class="product-card">
            <img src="assets/images/product1.png">
            <h3>Canon EOS <?= $i ?></h3>
            <p><strong>$199.95</strong></p>
            <button class="btn">Add to Cart</button>
        </div>
        <?php endfor; ?>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
