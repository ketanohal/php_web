<?php
    // String
    $name = "John Doe";
    echo "Name: " . $name . "<br>";

    // Integer
    $age = 30;
    echo "Age: " . $age . "<br>";

    // Float
    $price = 19.99;
    echo "Price: $" . $price . "<br>";

    // Boolean
    $isAvailable = true;
    echo "Availability: " . ($isAvailable ? "Yes" : "No") . "<br>";

    // Array
    $fruits = ["Apple", "Banana", "Cherry"];
    echo "Fruits: " . implode(", ", $fruits) . "<br>";

    // Null
    $nothing = null;
    echo "Nothing: " . ($nothing === null ? "Nothing" : "Something") . "<br>";
?>
