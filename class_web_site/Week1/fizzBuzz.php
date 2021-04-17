<?php include __DIR__ . '/../include/header.php'; ?>

<?php



function fizzBuzz($num)
{
    if ($num % 3 === 0) {
        return ("Fizz");
    }
    
    if ($num % 5 === 0){
        return ("Buzz");
    }

    if ($num % 3 === 0 && $num % 5 === 0){
        return ("FizzBuzz");
    }

    return ($num);
}

for ($i=1; $i<=100; $i++) {
    echo fizzBuzz($i) . "<br />";
}




include __DIR__ . '/../include/footer.php'; ?>