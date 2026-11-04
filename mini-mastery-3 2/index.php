<?php 
    // STEP 1: Define calculateTotal
    // STEP 2: Define parameters $price and $taxRate
    function calculateTotal(int $price, float $taxRate) {
        // STEP 3: Calculates total by adding the tax amount to the total
        $total = $price + ($price * $taxRate);
        // STEP 4: Returns the calculated total from the function.
        return $total;
    }

    // STEP 5: Calls the function using 40 as the price and 0.08 as the tax rate.
    // STEP 6: Stores the returned value in a variable named orderTotal.
    $orderTotal = calculateTotal(40, 0.08);

    // STEP 7: Displays orderTotal in the console.
    echo($orderTotal);
?>