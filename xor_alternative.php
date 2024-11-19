<?php

function run(int $nr) {
    echo 'Test '.$nr."\n";
}

$a = 0;
$b = 5;

if($a) {
    if(!$b) {
        run(1);
    }
} else {
    if($b) {
        run(1);
    }
}

if($a!==$b) {
    run(5);
}


if($a-$b) {
    run(4);
}
?>
