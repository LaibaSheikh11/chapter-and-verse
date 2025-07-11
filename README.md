# Chapter & Verse - Modern Bookstore Website

This is a PHP-based modern bookstore website called "Chapter & Verse" that allows users to browse books by category. The project includes:

## Key Features

1. **Responsive Design**: Works on all device sizes with a clean, modern aesthetic
2. **Category Browsing**: Users can explore books in three main categories:
   - Fiction
   - Non-Fiction
   - Science
3. **Book Display**: Each book is shown with:
   - Cover image
   - Title
   - Price
   - Star rating system
   - Description
   - Add to cart button

## Technical Implementation

- **Frontend**:
  - Clean HTML5/CSS3 with responsive grid layouts
  - Google Fonts integration (Playfair Display for headings, Roboto for body text)
  - Font Awesome icons
  - Modern CSS variables for consistent theming

- **Backend**:
  - PHP with PDO for database connectivity
  - MySQL database (connection configured in config.php)
  - Secure parameterized queries to prevent SQL injection
  - Input sanitization with htmlspecialchars()

## File Structure

- **index.php**: Homepage with category selection
- **category.php**: Category-specific book listings
- **config.php**: Database connection configuration
- **style.css**: Main stylesheet
- **Book cover images**: Various JPG files for book covers

## How to Use

1. Clone the repository to your web server
2. Set up the MySQL database with a 'books' table containing the required fields
3. Update config.php with your database credentials
4. Access the site through your web browser

The site demonstrates clean PHP/HTML separation, secure coding practices, and responsive web design principles.
