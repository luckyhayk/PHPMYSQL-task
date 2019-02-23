<?php
include '../includes/head.php';
?>

<div class="container">
    <div class="row">
        <div class="offset-3 col-lg-6 mt-5 ">
            <div class="card bg-dark">
                <div class="mt-3 card-title bg-primary text-dark">
                    <h3 class="text-center py-2 ">Send message to our admin</h3>
                </div>
                <?php
                if (isset($_GET['Empty'])) {
                    if ($_GET['Empty'] == true) {
                        ?>
                        <div class="alert-light text-danger text-center py-1"><?= $_GET['Empty'] ?></div>
                    <?php }
                } ?>

                <?php
                if (isset($_GET['Email'])) {
                    if ($_GET['Email'] == true) {
                        ?>
                        <div class="alert-light text-danger text-center py-1"><?= $_GET['Email'] ?></div>
                    <?php } } ?>
                <?php
                if (isset($_GET['Success'])) {
                    if ($_GET['Success'] == true) {
                        ?>
                        <div class="alert-light text-success text-center py-1"><?= $_GET['Success'] ?></div>
                    <?php } } ?>
                <div class="card-body">
                    <form action="insertmsg.php" method="post">
                        <input type="text"  id="date" name="date" placeholder="DD/MM/YYYY h:m" class="form-control mb-3 ">
                        <input type="text" name="first_name" placeholder="First Name" class="form-control mb-3">
                        <input type="text" name="last_name" placeholder="Last Name" class="form-control mb-3">
                        <input type="text" name="email" placeholder="Email" class="form-control mb-3">
                        <textarea rows="4" cols="50" name="message" placeholder="Your Message"
                                  class="form-control mb-3"></textarea>
                        <button id="send" class="btn btn-success mt-2" name="send">Send</button>
                    </form>
                    <span class="text-primary"> If you are Admin then go to <a href="../index.php"
                                                                               class="text-decoration-none"> Log In Form</a></span>

                </div>
            </div>
        </div>
    </div>
</div>



<script>
    document.getElementById('send').addEventListener('click', function () {

        d = new Date();
        p = new Date(d.getTime() + 1 * 86400000);
        monthA = '01,02,03,04,05,06,07,08,09,10,11,12'.split(',');
        document.getElementById("date").value= p.getDate() - 1 + '.' + monthA[p.getMonth()] + '.' + p.getFullYear();
        console.log(document.getElementById("date").value);

    });
</script>

<?php
include '../includes/foot.php';

?>
