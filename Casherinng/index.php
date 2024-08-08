<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width,initial-scale-1.0">
        <link rel="stylesheet" href="loginstyle.css">
        <title>Cashering</title>
 
        <script>
        window.onload = function() {
            const params = new URLSearchParams(window.location.search);
            if (params.has('error')) {
                alert('Incorrect username or password. Please try again.');
            }
        }
    </script>
    </script>
    </head>
    <body>
         <div class="container">
        <div class="login-box">
           
            <h2>Login</h2>

            <form method="post" action="control.php">
                <div class="input-box">
                <input type="text" name="username" id="username" required>
                <label>Username</label>
           </div>
                <div class="input-box">
                <input type="password" name="password" id="password" required>
                    <label>Password</label>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="signup-link">
                    <p>Don't have an account?</p><br>
                    <a href="register.php">Signup</a>
                </div>
            </form>
        </div>
        </div>
        <img src="img\istockphoto-1040931786-612x612.jpg" alt="Img">

    <script src="popup.js"></script>
    </body>
</html>