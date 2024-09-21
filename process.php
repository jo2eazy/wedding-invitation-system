<!-- <php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $guest_name = $_POST['guest_name'];
    $email = $_POST['email'];
    $wedding_date = $_POST['wedding_date'];
    $wedding_location = $_POST['wedding_location'];
    $phone = $_POST['phone'];

    // Tengeneza ujumbe wa mwaliko
    $message = "Dear $guest_name,\n\n";
    $message .= "You are invited to our wedding on $wedding_date at $wedding_location.\n";
    $message .= "Looking forward to celebrating with you!\n\nBest regards,\nThe Wedding Couple";

    // Tuma mwaliko kupitia barua pepe
    $subject = "Wedding Invitation for $guest_name";
    // $headers = "From: your_jo2eazy@gmail.com";
    // mail($email, $subject, $message, $headers);

    // Tuma mwaliko kupitia WhatsApp
    $whatsapp_message = urlencode($message);
    $url = "https://api.whatsapp.com/send?phone=$phone&text=$whatsapp_message";

    // Tuma barua pepe na elekeza WhatsApp
    // echo "Invitation sent to $guest_name via email.<br>";
    echo "<a href='$url' target='_blank'>Send Invitation via WhatsApp</a> <br>";
    echo "Invitation sent to $guest_name Via whatsapp.";
}
?> -->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $guest_name = $_POST['guest_name'];
    $wedding_date = $_POST['wedding_date'];
    $wedding_location = $_POST['wedding_location'];
    $phone = $_POST['phone'];

    // Tengeneza ujumbe wa mwaliko
    $message = "Dear $guest_name,\n\n";
    $message .= "You are invited to our wedding on $wedding_date at $wedding_location.\n";
    $message .= "Looking forward to celebrating with you!\n\nBest regards,\nThe Wedding Couple";

    // Tuma mwaliko kupitia WhatsApp
    $whatsapp_message = urlencode($message);
    $url = "https://api.whatsapp.com/send?phone=$phone&text=$whatsapp_message";

    // UI ya kuonyesha mwaliko kupitia WhatsApp
    echo "<div style='font-family: Arial, sans-serif; text-align: center; margin-top: 20px;'>";
    echo "<h2>Invitation for $guest_name</h2>";
    echo "<p>Click the button below to send the invitation via WhatsApp:</p>";
    echo "<a href='$url' target='_blank' style='display: inline-block; background-color: #25D366; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; font-size: 16px;'>Send Invitation via WhatsApp</a>";
    // echo "<p style='margin-top: 20px;'>Invitation sent to $guest_name via WhatsApp.</p>";
    echo "</div>";
}
?>
