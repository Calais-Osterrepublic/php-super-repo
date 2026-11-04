<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Form</title>
</head>

<body>
    <?php
    //IF the form has been submitted
    if ($_GET) {
        //Display the customer name
        echo ("<p>" . $_GET['customerName'] . "</p>");
        //Display the number of tickets
        echo ("<p>Number of Tickets: " . $_GET['numberOfTickets'] . "</p>");
        //Cast the number of tickets to an integer
        $tickets = (int) $_GET['numberOfTickets'];
        //Define the price per ticket
        $TICKET_PRICE = 10.00;
        //Calculate the subtotal
        $SUBTOTAL = $tickets * $TICKET_PRICE;
        //Calculate the discount if a coupon is selected
        $DISCOUNT = 2.00 * $tickets;
        //Calculate the total after discount
        $TOTAL = $SUBTOTAL - $DISCOUNT;
        
        //Display the subtotal
        echo ("<p>Subtotal: " . number_format($SUBTOTAL, 2) . "</p>");
        
        //If coupon is selected, display the discount
        if (isset($_GET['coupon'])) {
            echo ("<p>Coupon selected, Discount: " . number_format($DISCOUNT, 2) . "</p>");
        } else {
            echo ("<p>No coupon selected</p>");
        }

        //Display the snack choice
        echo ("<p>Snack Choice: " . $_GET['snackChoice'] . "</p>");
        
        //Display the total. If no coupon is selected, display the subtotal as the total.
        if (isset($_GET['coupon'])) {
            echo ("<p>Total: " . number_format($TOTAL, 2) . "</p>");
        } else {
            echo ("<p>Total: " . number_format($SUBTOTAL, 2) . "</p>");
        }
    }
    ?>
    <form method="get">
        <label for="customerName">Name:</label>
        <input type="text" name="customerName">
        <br>
        <label for="numberOfTickets">Number of Tickets: </label>
        <input type="number" name="numberOfTickets">
        <br>
        <label for="coupon">Coupon? <input type="checkbox" name="coupon" value="yes"></label>

        <br>
        <label for="snackChoice">Snack Choice: </label>
        <select name="snackChoice">
            <option value="Chips">Chips</option>
            <option value="Candy">Candy</option>
            <option value="Popcorn">Popcorn</option>
        </select>
        <br>
        <input type="submit" value="Submit">
        <br>
    </form>
</body>

</html>