<html>
<head>
    <link type="text/css" rel="stylesheet" href="stil2.css">
<title>Creeare cont</title>
</head>
    <body>
<div align="right">
    <div id="scris">
    <font color="white" size="8" face="Lucida Calligraphy">Repeat after me:<br>I deserve new shoes!</font>
</div>
</div>
<center>
<div id="sign">
<table>
<form name="signup" method="post" action="">
<tr><center><b><font color="white" face="TimesNewRoman" size="6"><b><i>Creează cont</i></b></font></b></center></tr><br><br>
    <tr><td><font color="white" size="4">Nume</font></td></tr><tr><td><input type="text" name="num" size="50" REQUIRED></td></tr>
    <tr><td><font color="white" size="4">Prenume</font></td></tr><tr><td><input type="text" name="prenum" size="50" REQUIRED></td></tr>
    <tr><td><font color="white" size="4">Email</font></td></tr><tr><td> <input type="email" name="email" size="50" REQUIRED></td></tr>
    <tr><td><font color="white" size="4">Nume utilizator</font></td></tr><tr><td> <input type="text" name="username" size="50" REQUIRED></td></tr>
    <tr><td><font color="white" size="4">Parola</font></td></tr><tr><td><input type="password" name="password" size="50"></td></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
    <tr><td><center>
    <input type="submit" name="submit1" value="Înregistrează-te"></center></td></tr>
</form>
</table>
</div>
</center>
<?php
if(isset($_POST["submit1"]))
{
    include("conectare.php");
    $nume=$_POST["num"];
    $prenume=$_POST["prenum"];
    $e=$_POST["email"];
    $utilizator=$_POST["username"];
    $p=$_POST["password"];
    $parola_criptata=password_hash($p,PASSWORD_DEFAULT);
    $sql="SELECT *from user where username='$utilizator'";
    if($r=mysqli_query($conn,$sql))
    {
        if(mysqli_num_rows($r))
        {
           ?>
                    <script type="text/javascript">
                        alert("Utilizator deja existent);
                    </script>
                    <?php
        }
        else
        {
            $sql="INSERT INTO user(nume,prenume,email,username,password) VALUES('$nume','$prenume','$e','$utilizator','$parola_criptata')";
            if(mysqli_query($conn,$sql))
            {
                 header("Location:indexn1.php");
            }
            else
            {
                echo"Error:".$sql."<br>".mysqli_error($conn);
            }
        }
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
?>
    </body>
</html>