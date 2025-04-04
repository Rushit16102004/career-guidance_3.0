<?php
$first_name = ($_POST['firstname']);
$last_name = ($_POST['lastname']);
$email_address = ($_POST['email']);
$mobile_number = ($_POST['mobile']);
$message = ($_POST['message']);

$conn = mysqli_connect('localhost', 'root', '', 'career_guidance_3.0');

$query = "INSERT INTO `review`(`first_name`, `last_name`, `email_address`, `mobile_number`, `message`) VALUES ('$first_name','$last_name','$email_address','$mobile_number','$message')";

$result = mysqli_query($conn, $query);

if($result){
    echo '<script>alert("Feedback Submitted Successfully.");</script>';
    echo '<script>window.location.href="index.php"</script>';
}
?>