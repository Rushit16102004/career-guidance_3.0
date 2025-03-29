<?php
$first_name = ($_POST['firstName']);
$last_name = ($_POST['lastName']);
$email_address = ($_POST['emailAddress']);
$phone_number = ($_POST['phoneNumber']);
$password = ($_POST['password']);

$conn = mysqli_connect("localhost", 'root', '', 'career_guidance_3.0');

$query = "INSERT INTO `signup`(`first_name`, `last_name`, `email`, `phone_number`, `password`) VALUES ('$first_name','$last_name','$email_address','$phone_number','$password')";

$result = mysqli_query($conn, $query);

if($result){
    echo '<script>alert("Registered Successfully.");</script>';
    echo '<script>window.location.href="login.php"</script>';
}
?>