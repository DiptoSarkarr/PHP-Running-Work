<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <section>
      <?php 
    echo("Dipto Sarkar");
    ?>
    </section>
    <section>
      <?php
    $characterName="Shihab";
    $characterJob="Software";
    echo "$characterName is a $characterJob designer<br>"; echo "$characterName
      is a $characterJob developer"; ?>
    </section>
    <section>
      <?php
    $name="Dipto Sarkar";
    echo strtolower( $name);
    echo"<br>"; echo strlen( $name); echo"<br />"; echo
      str_replace("Sarkar","Mukharjee",$name) ?>
    </section>
    <section>
      <form action="site.php" method="get">
        Name: <input type="text" name="name" />
        <input type="submit" />
      </form>
      <h1>
        Your Name :
        <?php echo strtoupper( $_GET["name"]);?>
      </h1>
    </section>

    <section>
      <form action="site.php" method="post">
        Num 1: <input type="number" name="num1" />
        <br />
        Num 2: <input type="number" name="num2" />
        <br />
        <input type="submit" />
        <h1>
          Result:
          <?php 
   $num1= $_POST["num1"];
   $num2= $_POST["num2"];
   $num3=$num1+$num2;
   echo $num3;
        ?>
        </h1>
      </form>
    </section>
    <section>
        <?php
        $friends= array("Dipto","Shihab","Tanmoy");
        echo $friends[2];
        ?>
    </section>
<section>

<form action="site.php" method="post">

Apple : <input type="checkbox" name="fruits[]" value="apple"><br>
Oranges : <input type="checkbox" name="fruits[]" value="oranges"><br>
Guava : <input type="checkbox" name="fruits[]" value="guava"><br>
<input type="submit">

</form>
<?php
$fruits=$_POST["fruits"];
echo $fruits[1];

?>


</section>


<section>
<?php
$job=array("Dipto"=>"Developer","Shihab"=>"Designer");
$job["Dipto"]="Senior Developer";
echo $job["Dipto"]

?>
</section>
<section>


<?php
function examResult($name){
$result=array("Dipto"=>"A","Shihab"=>"A+");
echo "$name Get $result[$name]";
}

examResult("Shihab");
?>


</section>
<section>

<?php

$job=true;
$salary=3;
if ($job && $salary==2) {
  echo "You are in job and salary is $salary";
}elseif($job && $salary==3){
  echo "You are in job and salary is $salary";
}else{
  echo "you are not in job";
}

?>


</section>

<section>

<form action="site.php" method="post">

Grade: <input type="text" name="grade">
<input type="submit">


</form>
<?php
$grade=$_POST["grade"];

switch ($grade) {
  case 'A+':
    echo "You are the best";
    break;
  
  case 'A':
    echo "You are good";
    break;
    default:
    echo "Put Worong Command";
    break;
}

?>

</section>


<section>

<?php
$index=10;
while ($index>=0) {
 echo $index;
 $index--;
}
 
?>

</section>

<section>
<?php
//for look

$frName=array("Dipto","Shihab","Tanmoy");
for ($i=count($frName); $i >= 0; $i--) { 
 echo $frName[$i];
}

?>

</section>

<?php
include "header.html"
?>
<h2>This is the body</h2>
<?php
include "footer.html"
?>

<section>

<?php 

$title="first post";
$name="dipto sarkar";
$age=22;


?>
<?php
include "site2.php";
?>
<h1><?php examResultt("Dipto");?></h1>


</section>

<section>
  
<?php
//class concept & constructer
class Friend {
private $name;
var $number;
var $address;
function __construct($name) {
  $this->name=$name;
  echo "This is $name Data";
  
}
function fun1($name){
  /*if ($this->name=="Shihab") {
    echo "Very Good";
  }
*/
$this->name=$name;
return $name;

}


}

$friend1= new Friend("Shihab Uddin");


$friend1->number="01234565";
$friend1->address="Dhaka";


echo $friend1->number;
echo $friend1->address;
echo $friend1->fun1("Dipto");





?>


</section>

  </body>
</html>
