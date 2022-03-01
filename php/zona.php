<html>
<head>
<script type="text/javascript">
<!--
src = ["imagini/img.jpg" , "imagini/img6.jpg", "imagini/img9.jpg" ]
durata = 4;

ads=[]; ct=0;
function schimbaAd() 
{
  var n=(ct+1)%src.length;
  if (ads[n] && (ads[n].complete || ads[n].complete==null)) 
  {
    document["Imagine"].src = ads[ct=n].src;
  }
  ads[n=(ct+1)%src.length] = new Image;
  ads[n].src = src[n];
  setTimeout("schimbaAd()",durata*1000);
} 
onload = function() 
{
  if (document.images)
    schimbaAd();
}
//-->
</script>
</head>
<body bgcolor="669933">
<a href="javascript:adLink();" onMouseOver="status=url[ct]; return true;" onMouseOut="status=''"></a>
<center>  <img name="Imagine" src="imagini/img.jpg" border="0" width="90%" height="350">
    </center>
</body>
</html>