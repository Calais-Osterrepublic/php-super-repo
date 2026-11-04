<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // This is a single line comment
    /*
    This is a multi-line comment
    */
    $first_name = "Gordon";
    echo "<h1>Variables and Arrays</h1>";
    echo ("<h1>$first_names</h1>");
    
    //Constants
    define("PI", 3.14159); // You can't redefine a constant
    echo (PI);
    
    //Concatenations
    $name = $first_name .  " Freeman"; //PHP concatenates with a period ( . )
    echo ("<h1>$name</h1>");
    echo ('<p>Hello again, $name</p>');// Doesn't display the value within the variable
    echo ("<p>Hello again, $name</p>");// Displays the value within the variable
    echo ("<p>They're waiting for you $first_name, in the test chamber room</p>");

    //Arrays

    //Parallel arrays = arrays that have the same index representing related data
    //Multi-dimensional arrays = arrays that contain other arrays
    // Multi-dimensional arrays are accessed by "example array[0][0]"
    //Associative array = arrays that track the position of values in other arrays\
    // $example['key'] = value

    //Multidimentional Array example
    $student2 = [
        'name' => "Bean",
        'id' => 987545,
        'grade' => "B"
    ];
    var_dump($student2);
    echo ('<br>');
    print_r($student2);
    echo ("<p>". $student2['name'] ."</p>");
    ?>
</body>
</html>