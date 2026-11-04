<?php
$books = [
    ['B101', 'Learning PHP', '24.95'],
    ['B102', 'Design, Build, Test', '19.50'],
    ['B103', 'Web Basics', '15.00'],
];

//Writing the books.csv file
$file = fopen("books.csv", "w");
foreach ($books as $line) {
    fputcsv($file, $line);
}
fclose($file);

//Rereading and displaying (in console) the contents of books.csv
$file = fopen("books.csv", "r");

while (!feof($file)) {
    $line = fgets($file);
    $phpLine = str_getcsv($line);
    echo implode(", ", $phpLine);
    echo "\n";
}
fclose($file);