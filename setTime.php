<?php
date_default_timezone_set('Europe/London');
// two objets DateTime
$destinationTime = (new DateTime)->setTimestamp('682461000');
$presentTime = new DateTime;
// the difference between those two dates
$timeDifference = $presentTime->diff($destinationTime);
$daysBetweenDates = $timeDifference->days;
$minutesBetweenDates = $daysBetweenDates*1440;
$caburbantToReachTheDate = $minutesBetweenDates/10000;
?>