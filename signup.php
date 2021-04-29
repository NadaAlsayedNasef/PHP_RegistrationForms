<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="icon" href="images/icon.png">  
    <title>University Website</title>
    <link rel="stylesheet" type="text/css" href="font-awesome.css">
    <link rel="stylesheet" href="css/style.css">
    </head>
    
    <body>
        <div class="signin">
            <div class="container">
                
                <form class="input-group" id="contact" action="register.php" method="post">
                    <h1>Sign Up Form</h1>
        
                      <fieldset>
                        <input type="text" name="UserName" class="input-field" placeholder="User Name" required>
                      </fieldset>
                      <fieldset>
                        <input type="email" name="E_mail" class="input-field" placeholder="Email" required>
                      </fieldset>
                      <fieldset>
                        <input type="password" name="Password" class="input-field" placeholder="Password" required>
                      </fieldset>
                      <fieldset>
                        <button type="submit" id="form-submit" class="main-button-icon">Sign Up </button><br>
                          <p style="text-align: center; margin: 10px 0">If you already has an account, just sign in</p>
                          <button type="submit" id="form-submit" class="main-button-icon"><a href="signin.html">Sign In</a></button>
                      </fieldset>
                </form>
            </div>
        </div>
    </body>
</html>