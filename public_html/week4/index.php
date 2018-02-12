<?php
$date =  date('Y/m/d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year)

?>
<br>
<br>
<br>
<?php

if ($date - $tar >0) {
  echo "the future";
} elseif ($date - $tar <0) {
	echo "the Past";
} elseif ($date - $tar ==0){
	echo "oops";
}
?>
<br>
<?php
$x=0;
while($x<=strlen($date)){
	echo strpos($date, "/", $x)." ";
	$x+=strpos($date, "/", $x)+1;
}

echo "<br>";
///#5 Number of words
echo "the date contains ".str_word_count($date)." words <br>";

///#5 Number of Values (wasnt sure what you wanted)

echo "the number of values in Date is ".count(explode("/", $date))."<br>";

///#6
$str1 = "This is a string.";

echo strlen($str1)."<br>";
 ///#7
echo ord($str1)."<br>";
///#8
echo substr($date,-2)."<br>";
///#9
$dateArr=(explode("/", $date));
$x = 0;
while($x<count($dateArr)){
	echo $dateArr[$x]." ";
	$x++;
}
echo "<br> <br> <br>";
/// #10 
///Not really sure why you would want a switch within a while loop within a foreach loop to do this when it can be done with a single foreach loop. However, here it is, determinig if the year in this array is a leap year using far more loops than needed and a very strange switch. 
foreach($year as $value){
	$i=0;
	$val=0;
	while ($i<1){
			if ($value%4==0){
				if($value%100==0){
					if ($value%100==0){
						$val= "True ";
					} else {
						$val= "False ";
					}
				} else{
					$val= "True ";
				}
			}else {
				$val= "False ";
			}
	$i++;
	switch ($val){
	case "True ":
		echo "True ";
	case "False ":
		echo "False ";
	}
	}
}

?>