<html>
    <head><title>Pantaloni</title>
        <link type="text/css" rel="stylesheet" href="stil3.css">
    </head>
<body>
<div id="antet">
    <div align="right">
    <div>
    </div>
    <div>
          
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
<br><br><br><br>
<hr>
<div id="mijloc">
<?php
include("conectare.php");
$sql="SELECT pret,cale,descriere,promo from produse where tip='p'";
    $c=0;
     if($r=mysqli_query($conn,$sql))
    {
         echo"<table><tr>";
        if(mysqli_num_rows($r)>0)
        {
            while($linie=mysqli_fetch_array($r))
            {
                $c++;
                if($linie[3])
                {
                    $p=$linie[0]-10;
                     if($c<=4)
                    {
                        echo"<td><img src=$linie[1] height=370px width=270px><br><br><center><i><font size=4>$linie[2]</i></font><br><br><font size=4><b><s>$linie[0]</s> $p RON</b></font></center></td>";
                     }
                    else
                    {
                        echo"</tr><tr><td><img src=$linie[1] height=370px width=270px><br><br><center><i><font size=4>$linie[2]</i></font><br><br><font size=4><b><s>$linie[0]</s> $p RON</b></font></center></td>";
                        $c=1;
                    }
                }
                else
                {
                    if($c<=4)
                    {
                        echo"<td><img src=$linie[1] height=370px width=270px><br><br><center><i><font size=4>$linie[2]</i></font><br><br><font size=4><b>$linie[0] RON</b></font></center></td>";
                    }
                    else
                    {
                        echo"</tr><tr><td><img src=$linie[1] height=370px width=270px><br><br><center><i><font size=4>$linie[2]</i></font><br><br><font size=4><b>$linie[0] RON</b></font></center></td>";
                    $c=1;
                    }
                }
            }
            echo"</tr></table>";
        }
     }
    else
        echo "Eroare";
    ?>
    </div>
<div id="stanga">
<br>
<h4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Ai nevoie de ajutor?</h4><br>
    <b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Sună-ne la 0 800 07 00 01</b><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp De luni până vineri de la 10:00 la 19:00.<br><br>
    <b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp sau scrieți-ne oricând.</b><br><br>
<div align="left">
<font size=3 color="dimgray">&nbsp&nbsp&nbsp&nbsp&nbsp © 2019 Merchshop</font>
</div>
    </div>
<div id="centru">
<br><br><br>
<h3>Plăți online sigure</h3><br>
<img src="imagini/visa.jpg" height="35" width="50">&nbsp&nbsp
<img src="imagini/mastercard.png" height="35" width="55">&nbsp&nbsp  
<img src="imagini/express.jpg" height="35" width="50">&nbsp&nbsp
</div>
<div id="dreapta">
<h3>Ne puteți urmări și pe:</h3><br>
<img src="imagini/fb.gif" height="45" width="65">
<img src="imagini/insta.png" height="45" width="45">&nbsp&nbsp
<img src="imagini/twit.png" height="40" width="40">&nbsp&nbsp
</div>
</body>
</html>