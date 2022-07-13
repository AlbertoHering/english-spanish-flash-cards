<?php

function get_array_indexes($file_name, $_array) {

    $_details = file_get_contents($file_name);
    $_split = explode($_array, $_details);
    if ( !empty($_split[0])) {
        unset($_split[0]);
    }

    $_indexes = array();
    foreach($_split as $i) {

        $pos1 = strpos($i, '"');
        $__i = substr($i, 0, $pos1);
        #$___i = str_replace( array( '"', "'", '[', ']', ' ' ), '', $__i);
        $_indexes[] = json_encode($__i);
    }
    asort($_indexes);
    $arr = array_unique(array_filter($_indexes));
    return $arr;
}

$_files = array(
    #'D:\EcoTrak\GitHub\ecotrak-php\app\View\WorkOrders\admin_work_order_details.ctp' => '$usertype',
    'fb.txt' => '"__isProfile":"User","name":"',
);
$_final_arr = array();
foreach($_files as $i => $v) {
    $_arr = get_array_indexes($i, $v);
    if ( !empty($_arr) && is_array($_arr)) {
        foreach($_arr as $a) {
            $_final_arr[] = $a;
        }
    }
}

$arr = array_unique($_final_arr);
echo '<ol>';
foreach($arr as $a) {
    echo '<li>'.str_replace(array('\u00f3','\u00f1','\u00ed','\u00e1','\u00e9'),array('ó','ñ','í','á','é'), json_decode($a)) . '</li>';
}
echo '</ol>';