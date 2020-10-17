<?php

include 'db.php';

$showsqlcolor = new mysqli(host, user, password, database);
$showsqlcolor->query("SET NAMES 'utf8'");

$sqlcolor = $showsqlcolor->query("SELECT `Number`, `Color` FROM `colors`");
$ind = 1;

while ($rowcolor = mysqli_fetch_row($sqlcolor)) {
    for ($j = 0 ; $j < 1 ; ++$j){
		
		$perem = $j + 1;
		
        $myperem = '"#';
        $myperem .= $rowcolor[$perem];
        $myperem .= '"';

        $local = '<script>$("#p_';
        $local .= $rowcolor[$j];
        $local .= '").css({"backgroundColor":';
        $local .= $myperem;
        $local .= '});</script>';
            
        echo $local;
    }
    $ind = $ind + 1;
}
?>