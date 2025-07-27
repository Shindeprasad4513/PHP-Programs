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
   $r=0;
   $n1=$n;
   while($n1>1)
    {
      $d=$n1%10;
      $r=$r*10+$d;
      $n1=$n1/10;
    }
   if($r==$n)
    printf("Number is palindrome");
   else
    printf("Number not palindrome");  
?>
