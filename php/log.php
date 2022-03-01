<html>
<head>
 <link type="text/css" rel="stylesheet" href="stil1.css">
<title>Logarea</title></head>
<body>
<br>
<div align="right">
    <div id="scris">
    <font color="white" size="8" face="Lucida Calligraphy">Clothes mean nothing<br>until someone lives in them</font>
</div>
</div>
    <div id="log">
        <table>
<tr><center><font color="white" size="6" face="Lucida Calligraphy"><b>Login</b></font></center></tr>
<form name="login" method="post" action="login.php">
    <tr><td><font size="4" color="white">Nume utilizator</font></td></tr><tr><td><input type="text" name="username" size="50" required></td></tr>
    <tr><td><font size="4" color="white">Parolă</font></td></tr><tr><td><input type="password" name="password" size="50" required></td></tr><br><br>
    <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
    <tr><td><center>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="Login"></center></td></tr>
            </form>
        </table>
<br>
<hr><center><font color="white">SAU</font></center> <hr><br><br><br>
<div id="sign">
    <center><a href="signup.php"><font size="4" >Creează cont</font></a></center>
</div>

    </div>
<?php
if(isset($_POST['username'])&&isset($_POST['password']))
{
    include("conectare.php");
    $utilizator=$_POST['username'];
    $p=$_POST['password'];
    $sql="SELECT * FROM user WHERE username='$utilizator'";
    if($r=mysqli_query($conn,$sql))
    {
        if(mysqli_num_rows($r))
        {
            $linie=mysqli_fetch_array($r);
            if($linie[4]=='admin'&& password_verify($p,$linie[5]))
            {
                session_start();
                $_SESSION['admin']=$utilizator;
                header("Location:index.php");
            }
            else
            {
                if(password_verify($p,$linie[5]))
                {
                    session_start();
                    $_SESSION['client']=$utilizator;
                    header("Location:index.php");
                }
                else
                {
                    ?>
                    <script type="text/javascript">
                        alert("Utilizator sau parolă invalid/ă")
                    </script>
                    <?php
                }
            }
        }
        else
        {
            ?>
                    <script type="text/javascript">
                        alert("Utilizator sau parolă invalid/ă")
                    </script>
                    <?php
        }
    }
    else
    {
        ?>
         <script type="text/javascript">
          alert("Utilizator sau parolă invalid/ă")
             </script>
        <?php
    }
}
?>
</body>
</html>