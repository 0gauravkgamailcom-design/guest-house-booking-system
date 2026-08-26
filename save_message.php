<?php

require_once "config/database.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $phone = trim($_POST["phone"] ?? "");
    $message = trim($_POST["message"] ?? "");

    if ($name === "" || $email === "" || $phone === "" || $message === "") {
        die("Please fill all fields.");
    }

    $stmt = $conn->prepare(
        "INSERT INTO messages (name, email, phone, message)
         VALUES (?, ?, ?, ?)"
    );

    $stmt->bind_param("ssss", $name, $email, $phone, $message);

    if ($stmt->execute()) {
        echo "<script>
                alert('Message sent successfully!');
                window.location.href='index.php#contact';
              </script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();

?>