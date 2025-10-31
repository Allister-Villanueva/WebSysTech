<?php ?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <style>
            body{
                display:flex;
                align-items: center;
                flex-direction: column;
                padding-top: 20vh;
                background-image:url('bg.jpg'); 
                background-size: cover;
            }

            h1, a{
                 color:#ccfcff;
            }
            
            .temp{
                color:#ff6000;
                text-shadow: 0 0 5px #ccfcff;
            }

            form{
                display:flex;
                flex-direction: column;
            }

            input{
                margin-bottom: 20px;
                border: 2px solid lightseagreen ;
                border-radius: 4px;
                padding: 13px;
                width: 200px;
            }

            /* From https://css.glass */
            .glass{
                background: rgba(254, 157, 107, 0.26);
                border-radius: 16px;
                box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
                backdrop-filter: blur(3.2px);
                -webkit-backdrop-filter: blur(3.2px);
                border: 1px solid rgba(254, 245, 107, 0.2);
                
                padding: 25px;
                display:flex;
                flex-direction: column;
                align-items: center;
            }
        </style>
        
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
     <script src="./validations.js"></script>
    </head>

    <body>
        <div class="glass">
        <h1>Log In</h1>
        <form action="signup.php" method="post" class="login" id="loginForm">
            <input type="text" name="username" placeholder=" User Name">
            <input type="password" name="password" placeholder=" Password">
            <button type="submit">Log In</button>
        </form>
        <p><a href="signup.php">Need an account?</a></p>
        </div>
    </body>

</html>