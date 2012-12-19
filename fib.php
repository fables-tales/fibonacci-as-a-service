<?php

function fibonacci($x) {
    if ($x < 2) {
        return 1;
    } else {
        $p1 = 1;
        $p2 = 1;
        for ($i = 1; $i < $x; $i++) {
            $result = $p1 + $p2;
            $p1 = $p2;
            $p2 = $result;
        }
        return $p2;
    }
}

?>
