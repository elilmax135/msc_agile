<?php 

echo "Hi can you say your AGE ";

//$age = fgets(STDIN);
    $age = trim(fgets(STDIN)); // Use fgets(STDIN) for reading from the command line

    // Validate input: ensure it's a number and greater than 0
    if (!is_numeric($age) || $age <= 0) {
        echo "Invalid input. Please enter a positive number for years.\n";
        exit(1); // Exit with an error code
    }
echo "You entered: $age\n";
$year = $age;
$month = $age *12;
$days = $month * 365;
$min = $days *60*60;
$second= $min *60;


echo "$year\n";

echo "$month\n";
echo "$days\n";
echo "$min\n";
echo "$second\n";

?>
