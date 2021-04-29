<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="icon" href="images/icon.png">  
    <title>University Sign In</title>
    <link rel="stylesheet" type="text/css" href="font-awesome.css">
    <link rel="stylesheet" href="css/style.css">
    </head>
    
    <body>
        <div class="signin">
            <div class="container">
                <form class="input-group"  id="contact" action="logIn.php" method="post" >
                    <h1>Sign In Form</h1>
                      <fieldset>
                        <input type="email" name="E_mail" class="input-field" placeholder="Email" required>
                      </fieldset>
                      <fieldset>
                        <input type="password" name="Password"  class="input-field" placeholder="Password" required>
                      </fieldset>
                      <fieldset>
                        <br>
                          <input type="checkbox">
                          <label> Rememmber Me</label><br>
                        <button type="submit" id="form-submit" class="main-button-icon">Sign In<i class="fa fa-arrow-right"></i></button>
                          
<!--              <input type="checkbox" class="check-box" ><span>I agree to the terms & conditions</span>-->
                          
                          <button type="submit" id="form-submit" class="main-button-icon"><a href="signup.html">Sign Up</a></button>
                      </fieldset>
                </form>
            </div>
        </div>
    </body>
</html>