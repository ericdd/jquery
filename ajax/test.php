<?php

$a =array("name"=>"John","time"=>"2pm");
$a[]=mt_rand();
$a[]=date('Y-m-d H:i:s',time());
echo json_encode($a);

?>