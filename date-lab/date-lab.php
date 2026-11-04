<?php
    function showNow() {
        $currentTime = time();
        $currentDate = date("F j, Y g:i:s", $currentTime);
        return $currentDate;
    }
    echo "<p>Test for showNow()</p>";
    echo "<p>" . showNow() . "</p>";
    
    
    function showStringDate(string $str) {
        $date = strtotime($str);
        if ($date) {
            return $date;
        }
        else {
            echo("Invalid String entered into showStringDate");
        }
    }
    
    echo "<p>Test for showStringDate()</p>";
    $testDate1 = showStringDate("2001-9-11");
    echo "<p>" . $testDate1 . "</p>";
    echo "<p>" . date("F j, Y g:i:s",$testDate1) . "</p>";
    $testDate2 = showStringDate("next Tuesday");
    echo "<p>" . $testDate2 . "</p>";
    echo "<p>" . date("F j, Y g:i:s",$testDate2) . "</p>";

    
    function showFourthOfJuly() {
        $julyFourth = mktime(21,0,0,7,4,2026);
        return date("F j, Y \a\\t g:i A",$julyFourth);
    }
    
    echo "<p>Test for showFourthOfJuly()</p>";
    echo "<p>" . showFourthOfJuly() . "</p>";


    function addThirtyDaysBySeconds() {
        $currentTime = time();    
        $thirtyDaysMore = 30 * 24 * 60 * 60;
        $thirtyDaysPast = $currentTime + $thirtyDaysMore;
        return date("F j, Y g:i:s",$thirtyDaysPast);
    }

    echo "<p>Test for addThirtyDaysBySeconds()</p>";
    echo "<p>" . addThirtyDaysBySeconds() . "</p>";


    function addOneYearRelative() {
        return date("F j, Y g:i:s", strtotime('next year'));
    }

    echo "<p>Test for addOneYearRelative()</p>";
    echo "<p>" . addOneYearRelative() . "</p>";

    function showCentralTime() {
        date_default_timezone_set('America/Chicago'); // Set timezone to America/Chicago    
        return date("F j, Y g:i:s",time()); // Get the current timestamp
    }

    echo "<p>Test for showCentralTime()</p>";
    echo "<p>" . showCentralTime() . "</p>";

?>