<!DOCTYPE html>

<html>
    <head>
		<title>K-Site</title>
                      <link rel="Shortcut icon" href="Resources/icon.ico" />
        <link rel="stylesheet" type="text/css" href="styl.css"/>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="js.js"></script>
        <meta charset="utf-8">
	</head>
	<body>
            <div id="Top">
              
                <ul id="nav">
<li><a href="index.php" >Main Page</a></li>
<li><a href="blender.php" >Blender</a></li>
<li><a href="photoshop.php">Photoshop</a></li>
<li><a href="wc3.php">Warcraft 3 Maps</a></li>
<li><a href="web.php">About Website</a></li>
<li><a href="contact.php">Contact</a></li>
</ul>
             
            </div>
            <div id="Rest">
                <br><br><br><br><br>
                <?php
                if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['sbtext']))
{
$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: Your name <info@address.com>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    mail("konithir@gmail.com","K-Site Message from".$_POST['name'],$_POST['sbtext'],$headers);
  echo("Message Sent");
} else {
    
?>
                Your Email Adress:<br>
                <form action="contact.php" method="POST">
                <input type="email" name="email" placeholder=" WebmastersAreSexy@gmail.com" size="30" maxlength="25"/><br>
Name:<br>
<input type="text" name="name" placeholder=" For a example 'Beautiful Lara'" size="30" maxlength="25"/><br><br>
<label><input type="radio" name="check"/>Love Letter</label><label><input type="radio" name="check"/>Job Offer</label><br>
<br>
Your Message:<br>
<textarea name="sbtext" cols="80" rows="40" placeholder=" Type in your love letter here..." maxlength="750"></textarea><br>

<input type="submit" value="Send" />
                </form>
                <?php
}
?>
<br><br>
              
              <div id="footer"><a href="https://www.youtube.com/channel/UCpWik9jqoE5Rl6055sIUoyA"><img src="Resources/yt.png"></a><br></div>  
            </div>
            <div id="shade"></div>
            <div id="shadecookie"></div>
            <div id="cookiepanel"><br>This site uses cookies and poor jokes.<br>If you can't stand poor jokes then we can't be friends.<br><br><button type="button" onclick="CreateCookies()">I love poor jokes!</button><button type="button" onclick="Exit()">Flee you fools!</button></div>
            <?php
if(isset($_COOKIE["Ciacho"])) {
   echo" <script>CloseCookies();</script>";
}
?>
	</body>
</html>