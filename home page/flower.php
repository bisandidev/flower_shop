<?php
session_start();
include('includes/header.php');
?>

<main>
    <h2>Our Flowers</h2>
    <div class="flower-list">
        <div class="flower-item">
            <img src="images/flower1.jpg" alt="Flower 1">
            <p>Beautiful Flower 1</p>
            <button>Add to Cart</button>
        </div>
        <div class="flower-item">
            <img src="images/flower2.jpg" alt="Flower 2">
            <p>Beautiful Flower 2</p>
            <button>Add to Cart</button>
        </div>
        <!-- Add more flowers as needed -->
    </div>
</main>

<?php
include('includes/footer.php');
?>
