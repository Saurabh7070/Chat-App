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
        <section class="form signup">
            <header>Realtime Chat App</header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-txt">This Is An Error Message</div>
                <div class="name-details">
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" name="fname" placeholder="First Name" required />
                    </div>
                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" name="lname" placeholder="Last Name" required />
                    </div>
                </div>
                <div class="field input">
                    <label>Email Address</label>
                    <input type="text" name="email" placeholder="Enter Your Email" required />
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter Password" required />
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label>Select Image</label>
                    <input type="file" name="image" required />
                </div>
                <div class="field button">
                    <input type="Submit" value="Continue to Chat" />
                </div>
                <div class="link">Already Singed up? <a href="login.php">Login Now</a></div>
            </form>
        </section>
    </div>

    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/signup.js"></script>
</body>

</html>