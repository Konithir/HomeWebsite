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
             <button id='Fourties' type='button'>4</button>
            <button id='Single' type='button'>1</button>
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
                    <li><img class="imgzoomPhotoshop" src="Resources/photo2.png" alt="2" draggable='false'><br>Lost Pug<br>Made with help of tutorial , but still an interesting photo manipulation.</li>
                    <li><img class="imgzoomPhotoshop" src="Resources/photo1.png" alt="1" draggable='false'><br>One of several posters I made , when I have been trying to find a job as graphic designer.<br>Didn't succeed.</li>
                </ul>
                <div id="footer"><a href="https://www.youtube.com/channel/UCpWik9jqoE5Rl6055sIUoyA"><img src="Resources/yt.png"></a><br></div>
            </div>
           
            <div id="zoom">
                <ul>
                    <li><img id="zoom_img" src="Resources/placeholder.png" alt="" draggable='false'><br><button id="buttonwprawoPhotoshop" type="button"><--</button><button type="button" onclick="Closee()">Close</button><button id="buttonwlewoPhotoshop" type="button">--></button></li>
                </ul>
            </div>
            <div id="shade"></div>
            <div id="shadecookie"></div>
            <div id="cookiepanel"><br>This site uses cookies and poor jokes.<br>If you can't stand poor jokes then we can't be friends.<br><br><button type="button" onclick="CreateCookies()">I love poor jokes!</button><button type="button" onclick="Exit()">Flee you fools!</button></div>
            <?php
if(isset($_COOKIE["Ciacho"])) {
   echo" <script>CloseCookies();</script>";
}
if(isset($_COOKIE["Uklad"])&& $_COOKIE['Uklad'] == "Four") {
   echo" <script>Uklad4();</script>";
}
?>
	</body>
</html>