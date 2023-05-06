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
            <div id="MovieSlider"><img src="Resources/job.gif" id="jobgif"></div>
            <div id="Rest">
                <br><br><br><br><br>
                <ul>
                    <li><img class="imgzoom" src="Resources/foto8.png" alt="8" draggable='false'><br><strong>Home Visualization</strong><br>This was my second try on visualizations and I am pretty happy about the outcome.<br>I have done it in really short amount of time (just one day).<br>Made in Blender Cycles 2.78 , 1000 Samples.</li>
                    <li><img class="imgzoom" src="Resources/foto7.png" alt="7" draggable='false'><br>Home Visualization<br>My first attempt, despite 900 Samples it is very noisy and I do not know why.<br><br><br></li>
                    <li><img class="imgzoom" src="Resources/foto6.png" alt="6" draggable='false'><br>Another take of my first visualization<br><br></li>
                    <li><img class="imgzoom" src="Resources/foto5.png" alt="5" draggable='false'><br>One frame from "movie" I tried to make some time ago.<br>But sadly my PC isn't capable of rendering such things.<br></li>
                    <li><img class="imgzoom" src="Resources/foto4.png" alt="4" draggable='false'><br>Movie for my "movie". Movieception.<br><br></li>
                    <li><img class="imgzoom" src="Resources/foto3.png" alt="3" draggable='false'><br>Coke with water drops. <br>Some time ago I was kind of proud , when I figured out how to make waterdrops<br></li>
                    <li><img class="imgzoom" src="Resources/foto2.png" alt="2" draggable='false'><br>Piggy Bank! One of my first models several years ago.<br> Made with blender internal.<br></li>
                    <li><img class="imgzoom" src="Resources/foto1.png" alt="1" draggable='false'><br>My attemp on forest scene. Not very successful.<br><br></li>
                </ul>
                <div id="footer"><a href="https://www.youtube.com/channel/UCpWik9jqoE5Rl6055sIUoyA"><img src="Resources/yt.png"></a></div>
            </div>
           
            <div id="zoom">
                <ul>
                    <li><img id="zoom_img" src="Resources/placeholder.png" alt="" draggable='false'><br><button id="buttonwprawo" type="button"><--</button><button type="button" onclick="Closee()">Close</button><button id="buttonwlewo" type="button">--></button></li>
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