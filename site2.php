<h1><?php echo $title; ?></h1>
<h2><?php echo $name; ?></h2>
<h2><?php echo $age; ?></h2>

<?php
function examResultt($name){
$result=array("Dipto"=>"Good Marks","Shihab"=>"A+");
echo "$name Get $result[$name]";
}

?>