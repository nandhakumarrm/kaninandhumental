<?php
//combine 
$name=array("kani","keerthu","pavaithar");
$marks=array("90","60","80");
$c=array_combine($name,$marks);
//print_r($c);
//count all the valuse 
$a=["name","honda","car","name","yamaha"];
//print_r(array_count_values($a));
// array_diff
$diff1=["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"];
$diff2=["e"=>"red","f"=>"green","g"=>"orange"];
$valus=array_diff($diff1,$diff2);
//print_r($valus);
//array filter
function odd($var)
{
	return($var & 1);
}
$a=[1,3,2,3,5];
//print_r(array_filter($a,"odd"));
//array fill
$a1=array_fill(1,2,"nandhu");
//print_r($a1);

// arrayfillkeys
$fil=[1,2,3,4];
$num=array_fill_keys($fil,"program");
//print_r($num);


//arrayfilp
$name=array("1"=>"red","2"=>"green","3"=>"blue","4"=>"yellow");
$result=array_flip($name);
//print_r($result);
//array key
$name=array("yamaha"=>"R15","Honda"=>"Cbr","KTM"=>"Duke200");
//print_r(array_keys($name));
//echo"<br>";
//print_r(array_keys($name,"Cbr"));

// array map()
function myfunction($v)
{
  return($v+$v);
}

$a=array(1,2,3,4,5);
//print_r(array_map("myfunction",$a));

//array_key_exists
$bike=array("honda"=>"cbr650","BMW"=>"RR10000");
if (array_key_exists("honda",$bike))
  {
  //echo "Key exists!";
  }
else
  {
 // echo "Key does not exist!";
  }
  ///array merge
 $color1=array("red","green");
$color2=array("blue","yellow");
//print_r(array_merge($color1,$color2));
//array pop
$bookname=array("java","python","software testing","communication enginner");
array_pop($bookname);
//print_r($bookname);
//array push
$bookname=array("java","python","software testing","communication enginner");
array_push($bookname,"TOC","C#");
//print_r($bookname);

//array_rand
$bookname=["java","python","software testing","communication enginner","TOC","C#"];
$random_keys=array_rand($bookname,3);
echo $bookname[$random_keys[0]]."<br>";
echo $bookname[$random_keys[1]]."<br>";
echo $bookname[$random_keys[2]];
?>