<?php
session_start();
include('includes/header.php');
?>

<main>
    <h2>Chat with Us</h2>
    <div id="chat-box"></div>
    <input type="text" id="chat-input" placeholder="Type a message...">
    <button id="send-button">Send</button>
</main>

<script src="js/scripts.js"></script>

<?php
include('includes/footer.php');
?>


<!-- includes/chat.php -->
<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = $_POST['message'];

    $sql = "INSERT INTO chat (message) VALUES ('$message')";
    $conn->query($sql);
}

$sql = "SELECT * FROM chat ORDER BY id DESC";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
    echo "<p>" . $row['message'] . "</p>";
}
?>
