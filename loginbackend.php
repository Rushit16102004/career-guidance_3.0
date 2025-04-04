<?php
$email_address = ($_POST['email']);
$password = ($_POST['password']);

$conn = mysqli_connect('localhost', 'root', '', 'career_guidance_3.0');

$query = "SELECT * FROM `signup` WHERE `email` = '$email_address' AND `password` = '$password'";

$result = mysqli_query($conn, $query);

$data = mysqli_fetch_row($result);


if($data){
    echo '<script>alert("Login Successfully");</script>';
    echo '<script>window.location.href="RateSelf.php"</script>';
}else{
    echo '<script>alert("Account Does Not Exist.");</script>';
    echo '<script>window.location.href="signup.php"</script>';
}
?>