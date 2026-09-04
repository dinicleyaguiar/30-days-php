<?php
$dateString = '2023-10-05';
$date = date_create($dateString);
$formattedDate = date_format($date, 'd de F de Y');
echo $formattedDate;
