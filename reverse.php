<html>
  <body>
    <form method="post">
      Enter Number:
         <input type="text" name="n1" ><br>
      <input type="submit" value="Check"><br>
    </form>  
  </body>
</html>
<?php
  $n=$_POST["n1"];
   for($i=2;$i<$n;$i++)
   {
     if($n%$i==0)
     {
        break;
     }
   }
  if($n==$i)
    printf("Number is prime");
  else 
   printf("Number is not prime");
  
   
?>