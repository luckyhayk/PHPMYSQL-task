<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Task</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="offset-3 col-lg-6 mt-5">
            <div class="card bg-dark">
                <div class="mt-3 card-title bg-primary text-white">
                    <h3 class="text-center py-2 ">Login Form</h3>
                </div>
                <?php
                if (isset($_GET['Empty'])){
                if ($_GET['Empty'] == true) {
                    ?>
                    <div class="alert-light text-danger text-center py-1"><?= $_GET['Empty'] ?></div>
                <?php }} ?>
                <?php
                if (isset($_GET['Invalid'])){
                    if ($_GET['Invalid'] == true) {
                        ?>
                        <div class="alert-light text-danger text-center py-1"><?= $_GET['Invalid'] ?></div>
                    <?php }} ?>
                <div class="card-body">
                    <form action="process.php" method="post">
                        <input type="text" name="username" placeholder="First Name" class="form-control mb-3">
                        <input type="password" name="password" placeholder="********" class="form-control mb-3">
                        <button class="btn btn-success mt-2" name="login">Log In</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>