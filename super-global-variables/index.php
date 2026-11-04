<?php
    //Super Global Variables $_GET
    // REMEMBER: Associated arrays use key-value pairs like objects
    
    $message = "Not submitted";
    $result = 0;
    if($_GET){
        print_r($_GET);
        $message = "Form submitted";

        //Retrieve the values from the $_GET array
        $value1 = $_GET['testValue1'] ?? 0;
        $value2 = $_GET['testValue2'] ?? 0;
        
        //Float casting to allow arithmetic operations
        $value1 = (float)$value1;
        $value2 = (float)$value2;
        $result = $value1 + $value2;

        // ternary expression
        $message = isset($_GET['testCzechbox']) ? "checkbox checked":"checkbox not checked";    
        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        echo("<p>$message</p>");
    ?>
    <?php
        if($_GET){
            echo("<p>Value 1: $value1, Value 2: $value2</p>");
            print("<h2>Result: ". number_format($result,2) ."</h2>");
        }
    ?>
    <form method="get">
        <input type="number" name="testValue1" step="any">
        <span>+</span>
        <input type="number" name="testValue2" step="any">
        <p>
            <label>
                <input 
                type="checkbox" 
                name="testCzechbox" 
                value="yes">
                Test Checkbox
            </label>
        </p>

        <input type="submit" value="Submit">
    </form>
</body>
</html>