<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom SMS</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        .btn-custom {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-size: 1rem;
            margin: 5px;
            width: calc(100% / 3 - 10px); /* Distribute buttons evenly */
        }
      h4{ text-align: center }

        .btn-custom:hover {
            background-color: #0056b3;
        }

        /* Adjust spacing between form elements */
        .form-group {
            margin-bottom: 15px;
        }

        /* Center the buttons horizontally */
        .btn-group {
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Telegram: <a href="https://t.me/errordrive"> @errordrive</a></h1>
        <form id="messageForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="phoneNumber">Phone Number:</label>
                <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Enter phone number" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea class="form-control" id="message" name="message" placeholder="Enter your message" rows="4" required></textarea>
            </div>
            <div class="btn-group" role="group">
                <button type="submit" class="btn btn-custom" name="sendMessageBtn">Send Message</button>
                <button type="button" class="btn btn-custom" id="clearMessageBtn">Clear Message</button>
                <button type="button" class="btn btn-custom" id="clearAllBtn">Clear All</button>
            </div>
        </form>
        <div id="notification" class="mt-3">
            <?php
            // Handle form submission
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["sendMessageBtn"])) {
                // Get phone number and message from form
                $phoneNumber = $_POST["phoneNumber"];
                $message = $_POST["message"];

                // Construct API URL
                $apiUrl = "http://exhibitionistic-ins.000webhostapp.com/Rfcyberteam,sms%20custom%20sms%20php%20api%20crop/sms.php";
                $apiParams = "?number=" . urlencode($phoneNumber) . "&sms=" . urlencode($message);

                // Send request to API
                $response = file_get_contents($apiUrl . $apiParams);

                // Check response from API
                if ($response && strpos($response, "Successfully") !== false) {
                    echo '<div class="alert alert-success" role="alert">Message sent successfully!</div>';
                } else {
                    echo '<div class="alert alert-danger" role="alert">Failed to send message. Please try again.</div>';
                }
            }
            ?>
        </div>
    </div>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            // Button click handlers
            $('#clearMessageBtn').click(function() {
                $('#message').val('');
            });
            $('#clearAllBtn').click(function() {
                $('#phoneNumber').val('');
                $('#message').val('');
            });
        });
    </script>
              <h4 >Created By <a href="https://t.me/nayembrox">@nayembrox</a></h4>
</body>
</html>