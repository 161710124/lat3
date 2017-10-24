<?php

require_once 'lat3.php';

$oi = new motor('blue','honda','2017');
echo "warnanya...".$oi->get_warna().'<br>';
echo "merknya ...".$oi->get_merk().'<br>';
echo "tahunnya ...".$oi->get_thn().'<br>';

?>