<?php

require_once "config/database.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit;
}

/* =========================
   GET FORM DATA
========================= */

$name      = trim($_POST["name"] ?? "");
$phone     = trim($_POST["phone"] ?? "");
$email     = trim($_POST["email"] ?? "");
$guests    = filter_input(INPUT_POST, "guests", FILTER_VALIDATE_INT);
$check_in  = trim($_POST["check_in"] ?? "");
$check_out = trim($_POST["check_out"] ?? "");
$room      = trim($_POST["room"] ?? "");
$message   = trim($_POST["message"] ?? "");


/* =========================
   REQUIRED FIELDS
========================= */

if (
    $name === "" ||
    $phone === "" ||
    $email === "" ||
    !$guests ||
    $check_in === "" ||
    $check_out === "" ||
    $room === ""
) {
    die("Please fill all required booking details.");
}


/* =========================
   NAME VALIDATION
========================= */

if (mb_strlen($name) < 2 || mb_strlen($name) > 100) {
    die("Please enter a valid name.");
}


/* =========================
   PHONE VALIDATION
========================= */

if (!preg_match('/^[0-9]{10}$/', $phone)) {
    die("Please enter a valid 10-digit mobile number.");
}


/* =========================
   EMAIL VALIDATION
========================= */

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Please enter a valid email address.");
}


/* =========================
   GUEST VALIDATION
========================= */

if ($guests < 1 || $guests > 4) {
    die("Number of guests must be between 1 and 4.");
}


/* =========================
   DATE VALIDATION
========================= */

$check_in_date = DateTime::createFromFormat(
    "Y-m-d",
    $check_in
);

$check_out_date = DateTime::createFromFormat(
    "Y-m-d",
    $check_out
);

if (
    !$check_in_date ||
    $check_in_date->format("Y-m-d") !== $check_in
) {
    die("Invalid check-in date.");
}

if (
    !$check_out_date ||
    $check_out_date->format("Y-m-d") !== $check_out
) {
    die("Invalid check-out date.");
}


/* Check-out must be after check-in */

if ($check_out_date <= $check_in_date) {
    die("Check-out date must be after check-in date.");
}


/* =========================
   PREVENT PAST CHECK-IN
========================= */

$today = new DateTime("today");

if ($check_in_date < $today) {
    die("Check-in date cannot be in the past.");
}


/* =========================
   ROOM VALIDATION
========================= */

$allowed_rooms = [
    "Deluxe Room",
    "Family Room",
    "Premium Room"
];

if (!in_array($room, $allowed_rooms, true)) {
    die("Invalid room selected.");
}


/* =========================
   MESSAGE VALIDATION
========================= */

if (mb_strlen($message) > 1000) {
    die("Message is too long. Maximum 1000 characters allowed.");
}


/* =========================
   INSERT BOOKING
========================= */

$sql = "
    INSERT INTO bookings
    (
        name,
        phone,
        email,
        guests,
        check_in,
        check_out,
        room,
        message
    )
    VALUES (?, ?, ?, ?, ?, ?, ?, ?)
";

$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Database error. Please try again.");
}


/* =========================
   BIND PARAMETERS
========================= */

$stmt->bind_param(
    "sssissss",
    $name,
    $phone,
    $email,
    $guests,
    $check_in,
    $check_out,
    $room,
    $message
);


/* =========================
   SAVE BOOKING
========================= */

if ($stmt->execute()) {

    $booking_id = $conn->insert_id;

    $stmt->close();
    $conn->close();

    header(
        "Location: booking-success.php?id=" .
        (int)$booking_id
    );

    exit;
}


/* =========================
   ERROR
========================= */

$stmt->close();
$conn->close();

die("Booking could not be saved. Please try again.");

?>
