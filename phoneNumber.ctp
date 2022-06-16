<?php
function createPhoneNumber($numbersArray) {
    // your code here
    return  sprintf('(%d%d%d) %d%d%d-%d%d%d%d',
        $numbersArray[0],
        $numbersArray[1],
        $numbersArray[2],
        $numbersArray[3],
        $numbersArray[4],
        $numbersArray[5],
        $numbersArray[6],
        $numbersArray[7],
        $numbersArray[8],
        $numbersArray[9]
    );
}