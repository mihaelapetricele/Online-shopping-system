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