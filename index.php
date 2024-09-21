<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Invitation System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f9;
        }
        h2 {
            color: #333;
            text-align: center;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            max-width: 400px;
            margin: 0 auto;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }
        input[type="text"],
        input[type="date"] {
            width: 100%;
            padding: 8px;
            margin: 8px 0 20px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            background-color: #25D366;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #1DA851;
        }
    </style>
</head>
<body>

<h2>Personalize Your Wedding Invitation</h2>

<form action="process.php" method="POST">
    <label for="guest_name">Guest Name:</label>
    <input type="text" id="guest_name" name="guest_name" required>

    <label for="wedding_date">Wedding Date:</label>
    <input type="date" id="wedding_date" name="wedding_date" required>

    <label for="wedding_location">Wedding Location:</label>
    <input type="text" id="wedding_location" name="wedding_location" required>

    <label for="phone">Guest WhatsApp Number:</label>
    <input type="text" id="phone" name="phone" placeholder="e.g. 255XXXXXXXXX" required>

    <input type="submit" value="Send Invitation">
</form>

</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Invitation System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            max-width: 400px;
            width: 100%;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            font-weight: bold;
            text-align: left;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 14px;
        }
        input[type="submit"] {
            width: 100%;
            background-color: #25D366;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #1DA851;
        }
        input[type="text"]:focus,
        input[type="date"]:focus {
            border-color: #25D366;
            outline: none;
        }
        .hint {
            font-size: 12px;
            color: #666;
            text-align: left;
            margin-bottom: 10px;
        }
        @media (max-width: 500px) {
            body {
                padding: 20px;
            }
            .container {
                padding: 15px;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Send Your Wedding Invitation</h2>
    <form action="process.php" method="POST">
        <label for="guest_name">Guest Name:</label>
        <input type="text" id="guest_name" name="guest_name" placeholder="Enter the guest's full name" required>

        <label for="wedding_date">Wedding Date:</label>
        <input type="date" id="wedding_date" name="wedding_date" required>

        <label for="wedding_location">Wedding Location:</label>
        <input type="text" id="wedding_location" name="wedding_location" placeholder="e.g. The Royal Garden, City" required>

        <label for="phone">Guest WhatsApp Number:</label>
        <input type="text" id="phone" name="phone" placeholder="e.g. 255XXXXXXXXX" pattern="[0-9]{12}" title="Please enter a valid phone number with country code" required>

        <input type="submit" value="Send Invitation">
    </form>
</div>

</body>
</html>
