<?php
    // Default Timezone
    // date_default_timezone_set("America/New_York");
    date_default_timezone_set("Asia/Dhaka");
    
    // Date and Time
    // Suppose today's date is 2 May 2025 according to the Asia/Dhaka Timezone
    // echo date("F j, Y, g:i a");               // May 2, 2025, 10:19 am
    // echo date("m.d.y");                       // 05.02.25
    // echo date("j, n, Y");                     // 2, 5, 2025
    // echo date("Ymd");                         // 20250502
    // echo date("h-i-s, j-m-y, it is w Day");   // 10-26-49, 2-05-25, 2631 2649 5 Friam25
    /*
    "it is w Day" meaning:
    i = Minutes with leading 0 (26)
    t = Days in the current month (31)
    space
    i = Minutes again (26)
    s = Seconds (49)
    space
    w = Day of week number (0–6) -> Fri (5)
    space
    D = Day abbreviation (Mon, Tue, ..., Fri)
    a = am/pm lowercase
    y = 2-digit year (25)
    */
    // echo date("\i\t \i\s \t\h\e jS \d\a\y.");  // it is the 2nd day.
    // echo date("D M j G:i:s T Y");              // Fri May 2 10:42:38 +06 2025
    // echo date("H:m:s \m \i\s\ \m\o\n\t\h");    // 10:05:12 m is month
    // echo date("H:i:s");                        // 10:45:16

    // MySQL date-time format
    echo date("Y-m-d H:i:s");                     // 2025-05-02 10:46:21
    echo "<br>"."<br>";

    // strtotime() converts a human-readable date/time string into a Unix timestamp - a numeric value that makes it easy to compare, calculate, or store.

    // Check product expire date
    $purchase_date = date("Y-m-d");
    $add_days = 7;
    $expire_date = date("Y-m-d", strtotime("+$add_days days", strtotime($purchase_date)));

    echo $expire_date;
    echo "<br>"."<br>";

    // Date comparison
    $date1 = "2025-03-02";
    $date2 = "2025-05-02";
        
    $time_stamp1 = strtotime($date1);
    $time_stamp2 = strtotime($date2);
    $compare_date = ($time_stamp2 - $time_stamp1)/(60*60*24);
        
    echo $compare_date;
    echo "<br>"."<br>";

    // Check date of birth
    $birth_date = new DateTime("2000-01-01");
    $today = new DateTime();

    $dob = $birth_date->diff($today);

    echo "You are " .$dob->y ." years, " .$dob->m ." months and  " .$dob->d ." days old.";
    echo "<br>"."<br>";

    // Next friday date
    $a = "Friday";
    $b = strtotime("next " .$a);

    echo date("Y-m-d", $b);
?>