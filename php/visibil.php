<?php
 ?>
 <script type="text/javascript">
<!--
function toggleBox(szDivID, iState) // 1 visible, 0 hidden
{
   var obj = document.layers ? document.layers[szDivID] :
   document.getElementById ?  document.getElementById(szDivID).style :
   document.all[szDivID].style;
   obj.visibility = document.layers ? (iState ? "show" : "hide") :
   (iState ? "visible" : "hidden");
}
-->
</script>



<?php
//session_start();
if (isset($_SESSION["admin"])) {//<-- aici modificati pentru alt variabila sesiune
?>
<div  id="logat">
    <br>
     Buna,&nbsp;<?echo $_SESSION['admin']?><br><a href='schimba_parola.php'>Modifica parola</a>|&nbsp;<a href='deconectare.php'>Deconectare</a>
</div>
	<script language="Javascript">
	<!--
  	toggleBox("logat",1)
	-->
	</script>
<?php
}
?>

