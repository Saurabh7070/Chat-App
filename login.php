<?php
session_start();
if (isset($_SESSION['unique_id'])) {
    header("location: users.php");
}
?>
<?php
include_once "header.php";
?>

<body>
    <h1>P o l y c h a t</h1>

    <div class="wrapper">
        <section class="form login">
            <header>Realtime Chat App</header>
            <form action="#" class="action">
                <div class="error-txt">This Is An Error Message</div>

                <div class="field input">
                    <label>Email Address</label>
                    <input type="text" name="email" placeholder="Enter Your Email" />
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter Password" />
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field button">
                    <input type="Submit" value="Continue to Chat" />
                </div>
                <div class="link">New User? <a href="index.php">Signup</a></div>
            </form>
        </section>
    </div>
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/login.js"></script>
</body>

</html>