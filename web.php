<!DOCTYPE html>

<?php 
$file1;
$file2;
$file3;
$file4;
$file1= file_get_contents ("index.php");
$file2= file_get_contents ("blender.php");
$file3= file_get_contents ("styl.css");
$file4= file_get_contents ("js.js");
        ?>

<html>
    <head>
		<title>K-Site</title>
                      <link rel="Shortcut icon" href="Resources/icon.ico" />
        <link rel="stylesheet" type="text/css" href="styl.css"/>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="js.js"></script>
        <script>
        var file1 = <?php echo json_encode ($file1,JSON_HEX_TAG);?> ;
        var file2 = <?php echo json_encode ($file2,JSON_HEX_TAG);?> ;
         var file3 = <?php echo json_encode ($file3,JSON_HEX_TAG);?>;
        var file4 = <?php echo json_encode ($file4,JSON_HEX_TAG);?> ;
        function Text1(){
            document.getElementById("lefttext").innerHTML = file1;
        }function Text2(){
            document.getElementById("lefttext").innerHTML = file2;
        }function Text3(){
           document.getElementById("lefttext").innerHTML = file3;
      }
        function Text4(){
            document.getElementById("lefttext").innerHTML = file4;
        }
        function Text5(){
            document.getElementById("righttext").innerHTML = file1;
        }
        function Text6(){
            document.getElementById("righttext").innerHTML = file2;
        }
        function Text7(){
            document.getElementById("righttext").innerHTML = file3;
        }
        function Text8(){
            document.getElementById("righttext").innerHTML = file4;
        }
        </script>
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
            <div id="Rest"><br><br><br><br><br><br><br><br>
                <h1> Tested & works in: </h1><br><br>
                <div id="logos">
                  
                    <img src="Resources/chrome.png" alt=""/>
                    <img src="Resources/firefox.png" alt=""/>
                    <img src="Resources/opera.png" alt=""/>
                    <img src="Resources/edge.png" alt=""/>
                    
                </div>
                <h1>Technologies used in this site:<h1><br><br>
                <div id="logos">
                  
                    <img src="Resources/html.png" alt=""/>
                    <img src="Resources/css.png" alt=""/>
                    <img src="Resources/js.png" alt=""/>
                    <img src="Resources/jquerry.png" alt=""/>
                    <img src="Resources/angular.png" alt=""/>
                    <img src="Resources/php.png" alt=""/>
                   
                </div><br>
                   Or do you wish to look at my code?<br>
                   <h1>No problem!</h1><br><br><br><br>
                <div id="lefty">
                    <button type="button" onclick="Text1()">Index.php</button>
                     <button type="button" onclick="Text2()">Blender.php</button>
                    <button type="button" onclick="Text3()">CSS</button>
                    <button type="button" onclick="Text4()">JavaScript</button>
                    <br>
                    <textarea id="lefttext" name="left" cols="110" rows="60" readonly></textarea>
                </div>
                
                <div id="olrighty">
<button type="button" onclick="Text5()">Index.php</button>
<button type="button" onclick="Text6()">Blender.php</button>
<button type="button" onclick="Text7()">CSS</button>
<button type="button" onclick="Text8()">JavaScript</button>
<br>               
<textarea id="righttext" name="righttext" cols="110" rows="60" readonly></textarea>
                </div>
<br><br>
              
              <div id="footer"><a href="https://www.youtube.com/channel/UCpWik9jqoE5Rl6055sIUoyA"><img src="Resources/yt.png" alt='yt'></a><br></div>  
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