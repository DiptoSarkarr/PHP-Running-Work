<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section>
<?php 
    echo("Dipto Sarkar");
    ?></section>
    <section>
    <?php
    $characterName="Shihab";
    $characterJob="Software";
    echo "$characterName is a $characterJob designer<br>";
    echo "$characterName is a $characterJob developer";
    ?>
    
    </section>
    <section>
    <?php
    $name="Dipto Sarkar";
    echo strtolower( $name);
    echo"<br>";
    echo strlen( $name);
    echo"<br>";
    echo str_replace("Sarkar","Mukharjee",$name)
    
    ?>
    </section>
    <section>
    <form action="site.php" method="get">
    Name: <input type="text" name="name">
    <input type="submit">
    </form>
   <h1>Your Name : <?php echo strtoupper( $_GET["name"]);?></h1> 
   </section>
   
   <section>
   <form action="site.php" method="post">
   Num 1: <input type="number" name="num1">
   <br>
   Num 2: <input type="number" name="num2">
   <br>
   <input type="submit">
   <h1>Result: <?php 
   $num1= $_POST["num1"];
   $num2= $_POST["num2"];
   $num3=$num1+$num2;
   echo $num3;

   
   ?></h1>
   </form>
   
   </section>
   
</body>
</html>