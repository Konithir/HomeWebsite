
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
                <ul>
                    <li><h1> Hello there, my deer visitor!</h1><br>
                        You are my visitor!<?php require 'SqlCounter.php';SqlCounter(); ?><br>
                    <img src="Resources/Oh_Deer.png" alt="dear" draggable='false'><br>Surely you now wonder, what is the purpose of this website?<br>Well, that's two of us.</li>
                <br>
                <li>
                    <img src="Resources/givemeajob.jpg" alt="job" draggable='false'></li>
                </ul>
              <div id="footer"><a href="https://www.youtube.com/channel/UCpWik9jqoE5Rl6055sIUoyA"><img src="Resources/yt.png" alt="yt"></a><br></div>  
            </div>
            <div id="shade"></div>
            <div id="shadecookie"></div>
            <div id="cookiepanel"><br>This site uses cookies and poor jokes.<br>If you can't stand poor jokes then we can't be friends.<br><br>
                <button type="button" onclick="CreateCookies()">I love poor jokes!</button>
                <button type="button" onclick="Exit()">Flee you fools!</button>
            </div>
            
<?php
if(isset($_COOKIE["Ciacho"])) {
   echo" <script>CloseCookies();</script>";
}
?>
	</body>
</html>