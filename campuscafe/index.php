<?php
$customerType = "student";
$mealPeriod = "lunch";

$menu = [
    "Burger" => 6.50,
    "Salad" => 5.75,
    "Pizza" => 4.50,
    "Soup" => 3.25
];
$discountMessage = ($customerType === "student") ? "Student discount available" : "Regular price";

switch ($mealPeriod) {
    case "breakfast":
        $mealMessage = "Breakfast is served until 10:30 AM.";
        break;
    case "lunch":
        $mealMessage = "Lunch is being served";
        break;
    case "dinner":
        $mealMessage = "Dinner begins at 5:00 PM.";
        break;
    default:
        $mealMessage = "Cafe is currently closed.";
}
$discountRate = match ($customerType) {
    "student" => 0.10,
    "employee" => 0.15,
    default => 0.0,
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Campus Café</title>
</head>
<body>
    <h1>Campus Café</h1>
    <?php echo "$discountMessage"; ?>
    <p><?php echo "$mealMessage"; ?></p>
</body>
</html>