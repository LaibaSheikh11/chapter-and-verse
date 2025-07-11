<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter & Verse | Modern Bookstore</title>
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
                    <a href="#" class="active">Home</a>
                    <a href="#">Categories</a>
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
        <section class="hero-section">
            <div class="container">
                <div class="hero-content">
                    <h2>Discover Your Next Favorite Book</h2>
                    <p>Explore our curated collection across all genres</p>
                    <div class="category-selector">
                        <form action="category.php" method="get">
                            <select name="category" required>
                                <option value="" disabled selected>Browse by Category</option>
                                <option value="Fiction">Fiction</option>
                                <option value="Non-Fiction">Non-Fiction</option>
                                <option value="Science">Science</option>
                            </select>
                            <button type="submit" class="btn-explore">Explore <i class="fas fa-arrow-right"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="featured-section">
            <div class="container">
                <h3 class="section-title">Featured Collections</h3>
                <div class="category-cards">
                    <a href="category.php?category=Fiction" class="category-card">
                        <div class="card-content">
                            <h4>Fiction</h4>
                            <p>Imaginary worlds and compelling stories</p>
                        </div>
                    </a>
                    <a href="category.php?category=Non-Fiction" class="category-card">
                        <div class="card-content">
                            <h4>Non-Fiction</h4>
                            <p>Real stories, real knowledge</p>
                        </div>
                    </a>
                    <a href="category.php?category=Science" class="category-card">
                        <div class="card-content">
                            <h4>Science</h4>
                            <p>Explore the wonders of our universe</p>
                        </div>
                    </a>
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