<html>
<head>
 <link type="text/css" rel="stylesheet" href="stil1.css">
<title>Modificare parola</title>
</head>
<body>
<div align="left">
    <div id="scris1">
    <font color="white" size="8" face="Lucida Calligraphy">&nbsp&nbsp&nbspShoping rule #1<br>&nbsp&nbsp&nbsp&nbsp Grab it now!<br>Tomorrow it might<br> &nbsp&nbsp be gone forever.</font>
</div>
</div>
<center>
    <div id="mod">
        <table>
<form name="modificare" method="post" action="">
    <tr><font size="6" color="white" face="Lucida Calligraphy"><center>Modificare parolă</center></font></tr>
    <tr><td><font size="4" color="white">Parola veche</font></td></tr><tr><td><input type="password" name="pveche" size="50" REQUIRED></td></tr>
    <tr><td><font size="4" color="white">Parola nouă</font></td></tr><tr><td><input type="password" name="pnoua" size="50" REQUIRED></td></tr><br><br>
    <tr><td><font size="4" color="white">Reintroduceți parola nouă</font></td></tr><tr><td><input type="password" name="repnoua" size="50" REQUIRED></td></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
    <tr><td><center>
    <input type="submit" name="submit2" value="Schimbă parola"></center></td></tr>
            </form>
        </table>
    </div>
    </center>
<?php
if(isset($_POST["submit2"]))
{
   include("conectare.php");
    session_start();
    if(isset($_SESSION['admin']))
    $utilizator=$_SESSION['admin'];
        $utilizator=$_SESSION['client'];
    $p=$_POST['pveche'];
    $pn=$_POST['pnoua'];
    $repn=$_POST['repnoua'];
    if(trim($pn)!=trim($repn))
    {
        ?>
                    <script type="text/javascript">
                        alert("Parolele noi nu se potrivesc");
                    </script>
                    <?php
    }
    else
    {
        $pnn=password_hash($pn,PASSWORD_DEFAULT);
        $sql="UPDATE user SET password='$pnn' WHERE username='$utilizator'";
        if($r=mysqli_query($conn,$sql))
        {
             ?>
                    <script type="text/javascript">
                        alert("Parolă modificată cu succes");
                    </script>
                    <?php
        }
        else
        {
             ?>
                    <script type="text/javascript">
                        alert("Eroare la interogare");
                    </script>
                    <?php
        }
    }
}
?>
    </body>
</html>