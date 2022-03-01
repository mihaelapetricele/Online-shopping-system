<html>
    <head><title>Sunteti in contul de admin</title>
         <link type="text/css" rel="stylesheet" href="stil3.css">
    </head>
<body background="imagini/back3.png">
<?php
session_start();
    if(!isset($_SESSION['admin']))
        header("location:indexn.php");
?>
<div id="antet">
    <div align="right">
    <div id="cos"></div>
    <div id="dec">
          <form method="post" action="">
    <input type="submit" name="but" value="Deconectare">
</form>
<?php
    if(isset($_POST['but']))
{
    unset($_SESSION);
    session_destroy();
    header("Location:indexn.php");
}

?>
        </div>
    </div>
    <div align="left">
        <a href="home.php"><font color="black" size="6" face="Lucida Calligraphy"><b>MerchShop</b></font></a>
    </div>
 <div id="bara_meniu4">
                <?php
                    include("meniulog.php");
                ?>   
</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<center>
    <div>
    <h1>Ești logat ca administrator!</h1>
</div>
</center>
</body>
</html>