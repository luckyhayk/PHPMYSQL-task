<?php
//connection to db
$con = mysqli_connect('localhost', 'root', '', 'task');
if (!$con) {
    die('please check you con' . mysqli_error());
}
//db insert query
if (isset($_POST['send'])) {
    $date = $_POST['date'];
    $first = $_POST['first_name'];
    $last = $_POST['last_name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    if (empty($_POST['date']) || empty($_POST['first_name']) || empty($_POST['last_name']) || empty($_POST['email']) || empty($_POST['message'])) {
        header("location:msgform.php?Empty= please fill empty blanks");
    } else if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
        header("location:msgform.php?Email= Your Email is not valid");
    } else {
        $query = "INSERT INTO messages (date,firstname,lastname,email,message) VALUES ('".$_POST['date']."','".$_POST['first_name']."','".$_POST['last_name']."','".$_POST['email']."','".$_POST['message']."')";
        $result = mysqli_query($con, $query);
        header("location:msgform.php?Success= Message send");
    }
} else {
    echo "Not Working Now";
}
?>