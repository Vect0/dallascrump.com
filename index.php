<html>
<head>
<link rel="stylesheet" type="text/css" href="Loginc.css">
<link rel="icon" href="/Files/favicon32.png">
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
<title>Dallas Crump</title>
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
 <div class="container-fluid">  
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#section1">Intro</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#section2">About</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#section3">Contact</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="https://dallascrump.net/projects.php">Projects</a>
    </li>
  </ul>
  <div class="nav navbar-nav navbar-right">
    <a href="https://www.github.com/dcrump011" target="_blank"><img src="Files/githubLogoOrange.png" style="height: 32px; width: 32px; margin-right: 8px;"></img></a>
    <a href="https://www.linkedin.com/in/dallas-crump-16b178127/" target="_blank"><img src="Files/LinkedIn_logo.png" style="height: 32px; width: 32px;"></img></a>
  </div>
  </div>
</nav>


<div data-spy="scroll" data-target=".navbar" data-offset="50">
    
    <div id="section1" class="jumbotron text-center" style="Height: 100%;">
      <h1 style="margin-top: 175px;">Welcome to Dallas Crump's website.</h1>
      <p>Take a look below for more information.</p> 
    </div>

    <div id="section2" class="jumbotron" style="Height: 100%;">
        <h2 style = "text-align: center; margin-top: 30px;">Who am I?</h2>
            <h3 style="margin-top: 45px;">Summary/Education</h3>
            <p>Graduated from the <b>University of Missouri-St. Louis</b> with a <b>Bachelors in Information Systems</b>, December 2017.  Currently living in Los Angeles, CA.
            Proven Full-Stack Software Engineer open to new and interesting opportunities.</p>
            
            <h3 style="margin-top: 60px;">Skills</h3>
            <p>As far as <b>Languages</b>, I am proficient in Java, Javascript, and SQL.  I am familiar with C#, C++, PHP, and HTML/CSS/Bootstrap(Which I used to make this site). <br>  As far as 
            <b>Utilities</b>, the IDEs I have the most experience with are Eclipse, Visual Studio, and Oracle SQL Developer.  The version control system I am proficient with is Subversion(SVN).
            Additionally, I have much experience with the front-end design tool Sencha Architect (Which utilizes the ExtJS framework).</p>
            
            <h3 style="margin-top: 60px;">Experience</h3>
            <p>I've worked, and am currently employed, as a Software Engineer for Tapestry Solutions, a Boeing Company since May, 2018.   </p>
    </div>

</div>


<div id="section3" class="jumbotron" style="Height: 100%;">

<h2 style = "text-align: center; margin-top: 30px;">Contact me.</h2>
<div class="row" style="margin-top: 50px; margin-left: 300px;">
<div class="col-sm-4" style="margin-right: 100px;">
<h3 style="margin-left: 50px;">Send me a message.</h3>

    <form method="post" name="emailForm">
    <div class = "inputBox">
        <input type = "text" name = "email" placeholder = "Your email" required> <br><br>
        <textarea name="comment" placeholder = "Message" required></textarea> <br><br>
        <div class="g-recaptcha" data-sitekey="6Ld4IfkpAAAAAKRtRuRqpJP71mo-4ck71Z-KKTW_" style="margin-bottom: 10px;"></div>
        <button disabled="true" class = "btn btn-secondary" type = "submit">Submit</button>
    </div>
    </form>
    
</div>
<div class="col-sm-4">
<h3>Download my resume.</h3>
<p><a href="Files/Crump_Resume.docx"><img src="Files/open-resume.png" style="Height: 45%;"></a></p>
</div>
</div>
</div>


<script>
        
        <?php
        $secret = "";
        $response = null;
        $reCaptcha = new ReCaptcha($secret);
        
        if ($_POST["g-recaptcha-response"]) {
                $response = $reCaptcha->verifyResponse(
                    $_SERVER["REMOTE_ADDR"],
                    $_POST["g-recaptcha-response"]
            );
        }
    
      if ($response != null && $response->success) {
          
        $message = "From ". $_POST['email'] . ": ". $_POST['comment'];
        // In case any of our lines are larger than 70 characters, we should use wordwrap()
        $message = wordwrap($message, 70, "\r\n");
        
        if (strlen( $_POST['email'])>3 && strlen( $_POST['comment'])>3)
        {
            mail('CHANGEME@gmail.com', 'My Subject', $message);
        }
        ?>
            alert("Email sent.  Thanks for reaching out!");
            window.location = "https://www.dallascrump.com/#section3";
        <?php
      } else {}
      ?>
    
</script>

</body>
</html>
