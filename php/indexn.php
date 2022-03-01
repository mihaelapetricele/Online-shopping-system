<html>
    <head>
        <title>Pagina principala</title>
    <link type="text/css" rel="stylesheet" href="stil.css">
    </head>
    <body>
<div id="tot">
<div id="sus1">
    <div align="right">
    <div id="cos">
            <img src="imagini/cos.gif" height="30" width="30">
    </div>
         <a href="log.php">
        <div id="log">
         Login
        </div>
        </a>
    </div>
    <div align="left">
        <a href="home.php"><font color="black" size="6" face="Lucida Calligraphy"><b>MerchShop</b></font></a>
    </div>
 <div id="bara_meniu1">
                <?php
                    include("meniun.php");
                ?>   
</div>
    </div>
        <br>
<div id="antet1">
    <?php
    include("zona.php");
    ?>
</div><br><br><br><br><br><br>
<div id="mijloc1">
<div align="left">
   <a href="pantaloni.php"> <img src="imagini/img4.jpg" height="330" width="270" ></a>&nbsp&nbsp&nbsp&nbsp
    <div id="text1">
        <font size="6"><i><b>Colecția de <br>pantaloni</b></i></font>
    </div>
    <a href="pantofi.php"><img src="imagini/img3.jpg" height="330" width="270"></a>&nbsp&nbsp&nbsp&nbsp
    <div id="text2">
        <font size="6"><i><b>Colecția de <br>pantofi</b></i></font>
    </div>
    <a href="rochie.php"><img src="imagini/img2.jpg" height="330" width="270"></a>&nbsp&nbsp&nbsp&nbsp
    <div id="text3">
        <font size="6"><i><b>Colecția de <br>rochii</b></i></font>
    </div>
    <a href="tricou.php"><img src="imagini/img10.jpg" height="330" width="270"></a>
     <div id="text4">
        <font size="6"><i><b>Colecția de <br>tricouri</b></i></font>
    </div>
</div>
</div>
        </div>
    </body>
</html>