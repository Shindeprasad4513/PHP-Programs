<html>
  <body bgcolor="yellow" align="center">
   <form method="post">
     Enter no:<input type="text" name="t1">
              <input type="submit" value="Check"> 
  </form>
  </body>
</html>

<?php
   $n=$_POST["t1"];
   $s=0;  
  for($i=1;$i<$n;$i++)
   {
     if($n%$i==0)
      {
         $s=$s+$i;
      }
   }
  if($s==$n)
    printf("Number is Perfect");
  else
    printf("Number is not Perfect");
?>
