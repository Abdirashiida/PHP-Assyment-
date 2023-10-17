<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment </title>

    <style>
       body{
        background-color:#e8e8e8;
       }
       .container{
        width:500px;
        background-color:white;
        margin:20px auto;
        padding:15px;
        border-radius:10px;
       }
       h1{
        text-align:center;
       }
       .question{
        background-color:#efefef;
        width:60%;
        margin:0px auto;
        border-radius:5px;
        padding:10px;
        margin-bottom:10px;
       }
       .question-head{
        text-align:center;
        font-size:28px;
        color:#192655
       }
       .question-body{
        text-align:center;
        font-size:20px;
        color:#192655
       }

    </style>
</head>
<body>

<div class="container">
    <h1 >Assigment 1</h1>

<div class="question">
<h2 class='question-head'> su'aasha 1aad</h2>
<div class="question-body">

<?php
   
   //su'aasha 1aad

 function isEven($number) {
       if ($number % 2 == 0) {
         return "$number is even.";
       } else {
         return "$number is odd.";
       }
     }
     
     $number = 14;
     
     echo isEven($number);
     
   ?>
</div>
    
</div>

<div class="question">
<h2 class='question-head'>su'aasha 2aad</h2>
<div class="question-body">


    <?php

$i = 1;

while ($i <= 50) {
  if ($i % 5 == 0) {
    echo "$i\n";
  }
  $i++;
}

?>
</div>




    
</div>


    


<div class="question">
<h2 class='question-head'>su'aasha 3aad</h2>
<div class="question-body">


<?php
for ($i = 35; $i >= 7; $i--) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}
?>
</div>




    
</div>




<div class="question">
<h2 class='question-head'>su'aasha 4aad</h2>
<div class="question-body">


<?php
function findPrimeFactors($number)
{
    $factor = 2;
    echo "Prime factors of $number are: ";

    while ($number > 1) {
        if ($number % $factor === 0) {
            echo $factor . " ";
            $number /= $factor;
        } else {
            $factor++;
        }
    }
}

$number = 42;
findPrimeFactors($number);
?>
</div>    
</div>





<div class="question">
<h2 class='question-head'>su'aasha 5aad</h2>
<div class="question-body">


<?php
function isPrime($number)
{
    if ($number <= 1) {
        return false;
    }

    $divisor = 2;
    $isPrime = true;

    do {
        if ($number % $divisor === 0) {
            $isPrime = false;
            break;
        }
        $divisor++;
    } while ($divisor < $number);

    return $isPrime;
}

$number = 18;

if (isPrime($number)) {
    echo $number . " is a prime number.";
} else {
    echo $number . " is a non-prime number.";
}
?>
</div>    
</div>




<div class="question">
<h2 class='question-head'>su'aasha 6aad</h2>
<div class="question-body">

<?php
$number = 2;

do {
    $factorial = 1;
    $n = $number;

    do {
        $factorial *= $n;
        $n--;
    } while ($n > 0);

    echo "Factorial of  $number is: $factorial<br>";

    $number++;
} while ($number <= 10);
?>

</div>    
</div>





<div class="question">
<h2 class='question-head'>su'aasha 7aad</h2>
<div class="question-body">

<?php
$number = 200;

do {
    $isPrime = true;

    for ($divisor = 2; $divisor < $number; $divisor++) {
        if ($number % $divisor === 0) {
            $isPrime = false;
            break;
        }
    }

    if (!$isPrime) {
        echo $number . " ";
    }

    $number--;
} while ($number >= 160);
?>

</div>    
</div>




<div class="question">
<h2 class='question-head'>su'aasha 8aad</h2>
<div class="question-body">


<?php
$limit = 15; //Fibonacci numbers to print

$num1 = 0;
$num2 = 1;
$count = 0;

echo "Fibonacci series:<br> ";

while ($count < $limit) {
    echo $num1 . " ".'<br>';

    $num3 = $num1 + $num2;
    $num1 = $num2;
    $num2 = $num3;

    $count++;
}
?>


</div>    
</div>





</div>
   

</body>
</html>