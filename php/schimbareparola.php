<form name="signup" method="post" action="">
    Parola veche: <input type="password" name="pveche" size="10" REQUIRED><br>
    Parola noua: <input type="password" name="pnoua" size="10" REQUIRED><br>
    Reintroduceti parola noua: <input type="password" name="repnoua" size="10" REQUIRED><br>
    <input type="submit" name="submit2" value="Schimba parola" REQUIRED><br>
</form>
<?php
if(isset($_POST["submit"]))
{
    include("conectare.php");
    $utilizator=$_SESSION['admin'];
    $p=$_POST['pveche'];
    $pn=$_POST['pnoua'];
    $repn=$_POST['repnoua'];
    if(trim($p)!=trim($repn))
    {
        echo("Parolele noi nu se potrivesc");
    }
    else
    {
        $pnn=password_hash($pn,PASSWORD_DEFAULT);
        $sql="UPDATE elevi Set password='$pnn' where username='$utilizator'";
        if($t=mysqli_query($conn,$sql))
        {
            echo("Parola modificata cu succes");
        }
        else
            echo"eroare la interogare";
    }

}
?>