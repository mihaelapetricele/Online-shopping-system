<html>
    <head>
        <title>Adaugare</title>
        <link type="text/css" rel="stylesheet" href="stil4.css">
    </head>
<body>
<center>
<h1>Adăugare produse</h1>
<div id="adauga">
<form action="" method="post" enctype="multipart/form-data">
Denumirea produsului<input type="text" name="denum" required=''><br>
Tipul produsului <input type="text" name="tip" required=''><br>
Descrierea produsului<input type="text" name="desc" required=''><br>
Prețul produsului <input type="text" name="pret" required=''><br>
Numarul de bucați<input type="text" name="nr" required=''><br>
    Alege o imagine a produsului:
<input type="file" name="fis" id="fis"><br><br><br>
<input type="submit" name="submit" value="Adaugă"><br>
</form>
</div>
</center>
    </body>
</html>
<?php
    if(isset($_POST['submit']))
    {
        $uploadok=1;
        $denumire=$_POST['denum'];
        $tipul=$_POST['tip'];
        $pretul=$_POST['pret'];
         $nrbuc=$_POST['nr'];
         $descriere=$_POST['desc'];
         $ok=0;
         include("conectare.php");
        $sql="select * from produse where denumire='$denumire'";
        if($r=mysqli_query($conn,$sql))
        {
              if(mysqli_num_rows($r))
             {
                   $sql="update produse set nrbuc=nrbuc+'$nrbuc'where denumire='$denumire'";
                  if($r=mysqli_query($conn,$sql))
                  {
                         ?>
                            <script type="text/javascript">
                                alert("Actualizare reusit cu succes!");
                           </script>
                         <?php
                     }
                     else
                     {
                            ?>
                          <script type="text/javascript">
                               alert("Eroare la update!");
                          </script>
                         <?php
                  }
             }
            else
            {
                $caleapoza_posibila="produse/".basename($_FILES["fis"]["name"]);
                if(file_exists($caleapoza_posibila))
                {

                    $uploadok=0;
                }
                else
                {
                    if($_FILES['fis']['size']<=1000000000)
                    {
                        if(is_uploaded_file($_FILES['fis']['tmp_name']))
                        {
                            move_uploaded_file($_FILES['fis']['tmp_name'],"produse/".$_FILES['fis']['name']);
                        }
                        $cale="produse/".$_FILES['fis']['name'];
                        $inte="insert into produse(denumire,tip,descriere,pret,nrbuc,cale) values ('$denumire','$tipul','$descriere','$pretul','$nrbuc','$cale')";
                        if($error=mysqli_query($conn,$inte))
                         {
                              ?>
                            <script type="text/javascript">
                                  alert("Produs adaugat!");
                                   </script>
                            <?php
                         }
                         else
                         {
                            ?>
                             <script type="text/javascript">
                                   alert("Eroare la insert!");
                               </script>
                             <?php
                          }
                         mysqli_close($conn);
                    }
                    else
                    {
                        ?>
                        <script type="text/javascript">
                            alert("Alegeti un fisier a carui marime sa fie de cel mult 1000 octeti");
                         </script>
                        <?php
                    }
                }
            }
        }
    }
?>