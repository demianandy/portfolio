<?php
    include('database.php');

    $rewievs = get_rewievs($database);
    
    $i = 0;
    foreach ($rewievs as $items):
        $i++;
    endforeach;

    $rand1 = mt_rand(0, $i-1);
    $rand2 = mt_rand(0, $i-1);
    while ($rand2 == $rand1) {
        $rand2 = mt_rand(0, $i-1);
    }
    $rand3 = mt_rand(0, $i-1);
    while ($rand3 == $rand1 or $rand3 == $rand2) {
        $rand3 = mt_rand(0, $i-1);
    }
    $rand4 = mt_rand(0, $i-1);
    while ($rand4 == $rand1 or $rand4 == $rand2 or $rand4 == $rand3) {
        $rand4 = mt_rand(0, $i-1);
    }
    $rand5 = mt_rand(0, $i-1);
    while ($rand5 == $rand1 or $rand5 == $rand2 or $rand5 == $rand3 or $rand5 == $rand4) {
        $rand5 = mt_rand(0, $i-1);
    }
    $rand6 = mt_rand(0, $i-1);
    while ($rand6 == $rand1 or $rand6 == $rand2 or $rand6 == $rand3 or $rand6 == $rand4 or $rand6 == $rand5) {
        $rand6 = mt_rand(0, $i-1);
    }
    $rand7 = mt_rand(0, $i-1);
    while ($rand7 == $rand1 or $rand7 == $rand2 or $rand7 == $rand3 or $rand7 == $rand4 or $rand7 == $rand5 or $rand7 == $rand6) {
        $rand7 = mt_rand(0, $i-1);
    }

    $rew1 = $rewievs[$rand1];
    $rew2 = $rewievs[$rand2];
    $rew3 = $rewievs[$rand3];
    $rew4 = $rewievs[$rand4];
    $rew5 = $rewievs[$rand5];
    $rew6 = $rewievs[$rand6];
    $rew7 = $rewievs[$rand7];


    $sum = array($rew1, $rew2, $rew3, $rew4, $rew5, $rew6, $rew7);
    echo json_encode($sum);


?>