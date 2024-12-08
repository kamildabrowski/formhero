<?php

function run(int $nr) {
    echo 'Test '.$nr."\n";
}

$a = 0;
$b = 5;

// basic
if($a) {
    if(!$b) {
        run(1);
    }
} else {
    if($b) {
        run(1);
    }
}
//xor
if($a!==$b) {

}
if($a!=$b) {

}

//xor Alternatives:
if((bool) $a!== (bool)$b) {
    run(5);
}

if(((int)(bool)$a-(int)(bool)$b) {
    run(4);
}
if(((int)(bool)$a^(int)(bool)$b) {
    run(5);
}
?>
