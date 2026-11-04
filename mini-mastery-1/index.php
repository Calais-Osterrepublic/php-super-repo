<?php
    // 1-2 USBs: 6.99 shipping price
    // 3-5 USBs: 4.99 shipping price
    // 6+ USBs: 0.00 shipping price
    
    // Values used by Program
    $usbPrice = 12.50;
    $usbOrderedAmount = 6;
    $shippingPrice = 0;

    // Calculations
    $orderPrice = $usbPrice * $usbOrderedAmount;

    // shippingPrice logic
    if ($orderPrice >= 75) {
        $shippingPrice = 0;
    }
    elseif ($orderPrice >= 30 && $orderPrice < 75) {
        $shippingPrice = 4.99;
    }
    elseif ($orderPrice < 30) {
        $shippingPrice = 6.99;
    }

    // Calculating final value
    $totalPrice = $shippingPrice + $orderPrice;
    
    // echo relevant data
    echo("<p>Order Price: " . number_format($orderPrice, 2). "</p>");
    echo("<p>Shipping Cost: " .number_format($shippingPrice, 2). "</p>");
    echo("<p>Total Price: " . number_format($totalPrice, 2) . "</p>");
?>