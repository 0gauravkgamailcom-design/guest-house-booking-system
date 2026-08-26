<?php

$booking_id = $_GET["id"] ?? "";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Successful</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8f8f8;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .success-box {
            background: white;
            padding: 45px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            max-width: 450px;
            width: 90%;
        }

        h1 {
            color: #c59d5f;
        }

        p {
            color: #555;
            line-height: 1.6;
        }

        .booking-id {
            font-weight: bold;
            color: #333;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 20px;
            background: #c59d5f;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        a:hover {
            opacity: 0.9;
        }
    </style>
</head>

<body>

    <div class="success-box">

        <h1>Booking Successful! 🎉</h1>

        <p>
            Thank you for your booking.
        </p>

        <p>
            Your booking request has been saved successfully.
        </p>

        <?php if ($booking_id !== ""): ?>
            <p class="booking-id">
                Booking ID: #<?php echo htmlspecialchars($booking_id); ?>
            </p>
        <?php endif; ?>

        <p>
            Our team will contact you shortly.
        </p>

        <a href="index.php">Back to Website</a>

    </div>

</body>
</html>