<?php
// Main entry file for PHP-based pages

// Attempt to include the header; if unavailable, show an error
if (!@include('templates/header.html')) {
    echo "<p>Error: Unable to load the header.</p>";
}

?>

<!-- Main content -->
<div class="main-content">
    <h1>Welcome to the News Website</h1>
    <p>Stay updated with the latest news from around the world.</p>
    <!-- Additional main content goes here -->
</div>

<?php
// Attempt to include the footer; if unavailable, show an error
if (!@include('templates/footer.html')) {
    echo "<p>Error: Unable to load the footer.</p>";
}
?>
