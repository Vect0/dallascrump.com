<?php
    $db = mysqli_connect('localhost','dallaump_dcrump','1994Vecto?','dallaump_newDB') or die('Error connecting to MySQL server.');
?>


<html>
<link rel="stylesheet" type="text/css" href="Loginc.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  body {
      position: relative; 
  }
  
  .g-recaptcha {
    transform:scale(0.8);
    transform-origin:0 0;
}
</style>

<meta charset="UTF-8">
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js"></script>

    <?php
        require_once "recaptchalib.php";
    ?>
  
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<!--Navigation Bar.-->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">  
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#section1">Section 1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#section2">Section 2</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#section3">Section 3</a>
    </li>
  </ul>
</nav>


<div data-spy="scroll" data-target=".navbar" data-offset="50">
    
    

</div>


<div id="section3" class="jumbotron" style="Height: 100%;">

<h2 style = "text-align: center; margin-top: 30px;">Contact me.</h2>
<div class="row" style="margin-top: 50px; margin-left: 300px;">
<div class="col-sm-4" style="margin-right: 100px;">
<h3 style="margin-left: 50px;">Create an account.</h3>

    <form method="post" name="emailForm">
    <div class = "inputBox">
        <input type = "text" name = "accountNameField" id="accountNameField" placeholder = "Account Name" required> <br><br>
        <input type = "text" name="passwordField" placeholder = "Password" required></textarea> <br><br>
        <button class = "btn btn-secondary" type = "submit">Submit</button>
        
    </div>
    </form>
    
</div>

</div>
</div>


<script>
     
            
        
    <?php
        $accountNameField = $_POST['accountNameField'];
        $passwordField= $_POST['passwordField'];
        
        if (strlen($_POST['accountNameField'])>3 && strlen($_POST['passwordField'])>3)
        {
            
            // $query= mysqli_query($db,"INSERT INTO SITE_USERS (USER_NAME, PASSWORD) VALUES ('$accountNameField', '$passwordField')") or die("Errors");
            
            $query= mysqli_query($db,"SELECT USER_NAME FROM SITE_USERS WHERE USER_NAME = '$accountNameField'") or die("Errors");
            $numQueryRows=mysqli_num_rows($query);
            
            
            
            
            if ($numQueryRows>0)
            {
            ?>
            
                alert("An account already exists with the name " + '<?php echo $accountNameField ?>' +". Please try again." );
                // window.location = "https://www.dallascrump.com/createAccount.php";
            <?php
            }
            else if ($numQueryRows==0)
            {
                ?>
                    alert("Account created succesfully." );
                    // window.location = "https://www.dallascrump.com/createAccount.php";
                <?php
            }
        }
        
        
    ?>
        
    
</script>

</body>
</html>





