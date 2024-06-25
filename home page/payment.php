<?php
session_start();
include('includes/header.php');
?>

<main>
    <h2>Payment</h2>
    <form method="POST" action="process_payment.php">
        <label for="card-number">Card Number:</label>
        <input type="text" id="card-number" name="card-number" required>
        <label for="expiry-date">Expiry Date:</label>
        <input type="text" id="expiry-date" name="expiry-date" required>
        <label for="cvv">CVV:</label>
        <input type="text" id="cvv" name="cvv" required>
        <button type="submit">Pay</button>
    </form>
</main>

<?php
include('includes/footer.php');
?>
