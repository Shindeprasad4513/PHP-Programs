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
   while($n>0)
    {
       $d=$n%10;
       $s=$s+$d;
       $n=$n/10;
    }     
   printf("Sum of Digit=%d",$s);

?>
