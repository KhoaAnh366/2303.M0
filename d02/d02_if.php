<?php
date_default_timezone_set("Asia/Ho_Chi_Minh");
echo "Current time is " . date("h:i:s a") . "\n";
$hour = date("H");

if ($hour < 12) {
    echo "Good morning";
} 

else if ($hour < 16) {
    echo "Good afternoon";
} 

else if ($hour < 21) {
    echo "Good evening";
} 

else {
    echo "Good night";
}