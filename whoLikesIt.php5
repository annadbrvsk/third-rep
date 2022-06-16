<?php
function likes( $names ) {
    if (count($names) == 0){
        return "no one likes this";
    }
    if (count($names) == 1){
        return  sprintf('%s likes this', ...$names);
    }
    if (count($names) == 2){
        return  sprintf('%s and %s like this', ...$names);
    }
    if (count($names) == 3){
        return  sprintf('%s, %s and %s like this', ...$names);
    }
    if (count($names) > 3){
        return $names[0] . ", " . $names[1] . " and " . (count($names)-2) . " others like this";
    }
}