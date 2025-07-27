<html>
  <body>
    <form method="post">
      Enter no:<input type="text" name="t1">
               <input type="submit" value="Verify">
    </form>
  </body>
</html>
<?php
   $n=$_POST["t1"];
   $s=0;    
   $n1=$n;
   while($n1>0)
    {
      $d=$n1%10;
      $s=$s+$d*$d*$d;
      $n1=$n1/10;
    }
   if($s==$n)
    printf("Number is Armstrong");
   else
    printf("Number not Armstrong");  
?>
