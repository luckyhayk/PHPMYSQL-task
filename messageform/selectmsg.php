<?php
if (isset($_SESSION['User'])) {
//    echo "Welcome " . $_SESSION['User'] . '</br>';
//    echo '<a href="../logout.php?Logout= ">Logout</a>';

} else {
    header("location:index.php");
}
$sql = "SELECT * FROM messages ";
$result = mysqli_query($con,$sql);
$resultcheck = mysqli_num_rows($result);


?>