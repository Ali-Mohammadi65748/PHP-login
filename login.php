<?php
define('_CONFIG_',true);
require_once "inc/config.php"; ?> 
<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/uikit.min.css" />
        <link rel="stylesheet" href="css/style.css"/>
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
    </head>
    <body>
        <div class="uk-section uk-container ">
            <div clas="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid=""><form class="uk-form-stacked js-login" >

    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Email</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-stacked-tex" type="Email" placeholder="Example@.com" required="required">
        </div>        <label class="uk-form-label" for="form-stacked-text">Password</label>
                <div class="uk-form-controls">
            <input class="uk-input" id="form-stacked-text" type="password" placeholder="put some password" required="required">
        </div>
        <div class="uk-margin"><button class="uk-button uk-button-default" type="submit"><b>login</b></button>
    </div>
    </div>



</form>
  <p uk-margin>
    <button class="uk-button uk-button-primary color2" ><a href="register.php">Register</a></button>
    <button class="uk-button uk-button-secondary color1"><a href="index.php">Home</a></button>

</p>
                  
            
            
            
            </div>
        </div>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    </body>
</html>
