<html>
   <body>
     <form method="post">
        Enter number:<input type="text" name="t1">
                     <input type="submit" value="Click">
     </form>  
 </body>
</html>
<?php
  $n=$_POST["t1"];
  while($n>0)
  {
    $d=$n%10;
    $r=$r*10+$d;
    $n=(int)$n/10;
  }
  while($r>0)
  {
    $d=$r%10;
    $r=(int)$r/10;
    switch($d)
    {
       case 0 : printf("Zero\t"); break;
       case 1 : printf("One\t"); break;
       case 2 : printf("Two\t"); break;      case 3 : printf("Three\t"); break;
       case 4 : printf("Four\t"); break;
       case 5 : printf("Five\t"); break;
       case 6 : printf("Six\t"); break;
       case 7 : printf("Seven\t"); break;
       case 8 : printf("Eight\t"); break;
       case 9 : printf("Nine\t "); break;    
       
   }
  }
?>