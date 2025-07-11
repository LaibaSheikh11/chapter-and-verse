<?php 
include 'config.php';

$category = isset($_GET['category']) ? $_GET['category'] : '';
$validCategories = ['Fiction', 'Non-Fiction', 'Science'];

if (!in_array($category, $validCategories)) {
    header("Location: index.php");
    exit();
}

$stmt = $pdo->prepare("SELECT * FROM books WHERE category = ?");
$stmt->execute([$category]);
$books = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($category); ?> | Chapter & Verse</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <header class="site-header">
        <div class="container">
            <div class="header-content">
                <h1 class="logo">Chapter & Verse</h1>
                <nav class="main-nav">
                    <a href="index.php">Home</a>
                    <a href="#" class="active"><?php echo htmlspecialchars($category); ?></a>
                    <a href="#">New Releases</a>
                    <a href="#">About</a>
                </nav>
                <div class="header-actions">
                    <a href="#" class="search-btn"><i class="fas fa-search"></i></a>
                    <a href="#" class="cart-btn"><i class="fas fa-shopping-cart"></i></a>
                </div>
            </div>
        </div>
    </header>

    <main class="main-content">
        <section class="category-header">
            <div class="container">
                <h2><?php echo htmlspecialchars($category); ?></h2>
                <p>Showing <?php echo count($books); ?> books in this category</p>
            </div>
        </section>

        <section class="book-listing">
            <div class="container">
                <div class="book-grid">
                    <?php foreach ($books as $book): ?>
                    <div class="book-card">
                        <div class="book-cover">
                            <img src="images/<?php echo htmlspecialchars($book['image']); ?>" alt="<?php echo htmlspecialchars($book['name']); ?>">
                        </div>
                        <div class="book-details">
                            <h3><?php echo htmlspecialchars($book['name']); ?></h3>
                            <div class="book-meta">
                                <span class="price">$<?php echo htmlspecialchars($book['price']); ?></span>
                                <span class="rating">
                                    <?php 
                                    $fullStars = floor($book['rating']);
                                    $halfStar = ($book['rating'] - $fullStars) >= 0.5 ? 1 : 0;
                                    
                                    for ($i = 0; $i < $fullStars; $i++) {
                                        echo '<i class="fas fa-star"></i>';
                                    }
                                    if ($halfStar) {
                                        echo '<i class="fas fa-star-half-alt"></i>';
                                    }
                                    for ($i = 0; $i < (5 - $fullStars - $halfStar); $i++) {
                                        echo '<i class="far fa-star"></i>';
                                    }
                                    ?>
                                </span>
                            </div>
                            <p class="book-desc"><?php echo htmlspecialchars($book['description']); ?></p>
                            <button class="btn-add-to-cart">Add to Cart</button>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">Chapter & Verse</div>
                <div class="footer-links">
                    <a href="#">About Us</a>
                    <a href="#">Contact</a>
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                </div>
                <div class="footer-social">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="copyright">
                &copy; <?php echo date('Y'); ?> Chapter & Verse. All rights reserved.
            </div>
        </div>
    </footer>
</body>
</html>