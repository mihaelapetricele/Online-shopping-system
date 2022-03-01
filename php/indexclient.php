<html>
    <head>
        <title>Sunteti logat ca si client</title>
    <link type="text/css" rel="stylesheet" href="stil.css">
    </head>
    <body>
 <?php
session_start();
    if(!isset($_SESSION['client']))
        header("location:indexn.php");
?>
<div id="tot">
<div id="sus">
    <div align="right">
    <div id="cos">
            <img src="imagini/cos.gif" height="30" width="30">
    </div>
<div id="mod">
    <font color="black"><a href="modparola.php">Modificare parolă</a></font>
</div>
        <div id="dec">
            <center>
                <a href="deconectare.php"><font color="black" size="4">Deconectare</font></a>
            </center>
        </div>
         <div align="left">
        <font color="black" size="6" face="Lucida Calligraphy"><i><b><a href="home.php">MerchShop</a></b></i></font>
    </div>
    </div>
<div id="bara_meniu1">
                <?php
                    include("meniucl.php");
                ?>   
</div>
    </div>
<div id="antet1">
    <?php
    include("zona.php");
    ?>
</div><br><br><br><br><br><br><br>
<div id="mijloc">
<div align="left">
     <a href="pantaloni1.php"> <img src="imagini/img4.jpg" height="330" width="270" ></a>&nbsp&nbsp&nbsp&nbsp
    <div id="text1">
        <font size="6"><i><b>Colecția de <br>pantaloni</b></i></font>
    </div>
    <a href="pantofi1.php"><img src="imagini/img3.jpg" height="330" width="270"></a>&nbsp&nbsp&nbsp&nbsp
    <div id="text2">
        <font size="6"><i><b>Colecția de <br>pantofi</b></i></font>
    </div>
    <a href="rochie1.php"><img src="imagini/img2.jpg" height="330" width="270"></a>&nbsp&nbsp&nbsp&nbsp
    <div id="text3">
        <font size="6"><i><b>Colecția de <br>rochii</b></i></font>
    </div>
    <a href="tricou1.php"><img src="imagini/img10.jpg" height="330" width="270"></a>
     <div id="text4">
        <font size="6"><i><b>Colecția de <br>tricouri</b></i></font>
    </div>
</div>
</div>
        </div>
    </body>
</html>