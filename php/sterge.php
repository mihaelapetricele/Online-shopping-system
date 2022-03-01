<html>
     <head>
        <title>Stergere</title>
        <link type="text/css" rel="stylesheet" href="stil4.css">
    </head>
<body>
<center>
<h1>Ștergere produse</h1>
<div id="sterge">
<form action="" method="post">
Denumire produs<input type="text" name="denum"><br>
<input type="submit" name="trimit" value="Șterge"><br>
</form>
</div>
</center>
</body>
</html>
<?php
if(isset($_POST['trimit']))
{
    include("conectare.php");
    $denumire=$_POST['denum'];
    $sql1="Select cale from produse where denumire='$denumire'";
    $r=mysqli_query($conn,$sql1);
    $linie=mysqli_fetch_array($r);
    $p=$linie[0];
    unlink($p);
    $sql="DELETE FROM produse WHERE denumire='$denumire' ";
    if(mysqli_query($conn,$sql))
    { 
        $sql2="ALTER TABLE produse DROP id_p";
        if(mysqli_query($conn,$sql2))
        {
            $sql3="ALTER TABLE produse ADD id_p int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST";
            if(mysqli_query($conn,$sql3))
               {
                   ?>
                    <script type="text/javascript">
                    alert("Stergerea produsului s-a efectuat cu succes");     
                    </script>
                    <?php
               }
        }
    }
    else
    {
        echo "Error:" .$sql. "<br>".mysqli_error($conn);
    }
}
?>