<DOCTYPE html>
<html>
<body>
<?php
$cars = [
    ['Volkswagen', 22, 18,12],
    ['BMW', 15, 13,123],
    ['Honda', 5, 2,12,10],
    ['Audi', 17, 15,100],
    ['Nandha', 10, 11,100],
  ];
  for($i=0; $i<count($cars);$i++)
  {
	 
	echo"<br>";	
for($j=0;$j<count($cars[$i]);$j++)
{	
  echo $cars[$i][$j];
  echo"<br>";
  }
  }
  ?>
  </body>
  </html>
  
  
  