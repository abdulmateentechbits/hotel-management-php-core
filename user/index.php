<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discovery Chitral || Login Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Muli:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        .srouce{
            text-align: center;
            color: #ffffff;
            padding: 10px;
        }
    </style>
	
</head>
<body>
    <div class="main-container">
        <div class="form-container">

            <div class="form-body">
                <h2 class="title">Log in with</h2>
                <div class="social-login">
                    <ul>
                        <li class="google"><a href="#">Google</a></li>
                        <li class="fb"><a href="#">Facebook</a></li>
                    </ul>
                </div><!-- SOCIAL LOGIN -->

                <div class="_or">or</div>

                <form action="login.php" class="the-form" method="POST">
                    <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

                    <label for="email">User Name</label>
                    <input type="text" name="uname" id="email" placeholder="Enter User Name">

                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password">

                    <input type="submit" value="Log In">



                </form>
                <div class="form-footer">
                <div>
                  <a href="../index.php">Back</a>
                </div>
            </div>
            </div><!-- FORM BODY-->

            <div class="form-footer">
                <div>
                    <span>Don't have an account?</span> <a href="signup.php">Sign Up</a>
                </div>
            </div><!-- FORM FOOTER -->

        </div><!-- FORM CONTAINER -->
    </div>
</body>
</html>