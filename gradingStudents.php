<?php

/*
 * Complete the 'gradingStudents' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY grades as parameter.
 */

function gradingStudents($grades) {
    // Write your code here
    $arr = [];
    foreach ($grades as $grade) {
        $arr[] = gradeOneStudent($grade);
    }
    return $arr;
}

function gradeOneStudent($gradeOne) {
    // Write your code here
    if ($gradeOne < 38) {
        return $gradeOne;
//    Если разница между оценкой и следующим числом, кратным 5, меньше 3,
//округлить оценку до следующего числа, кратного 5.
        // делим оценку на 5
        // отбрасываем дробную часть (int)
        // прибавляем единицу
        // умножаем на 5 - получили исходное большее кратное 5

    }
    $roundGrades = (((int) $gradeOne / 5) + 1) * 5;
    if (($roundGrades - $gradeOne) < 3) {
        return $roundGrades;
    }
    return $gradeOne;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$grades_count = intval(trim(fgets(STDIN)));

$grades = array();

for ($i = 0; $i < $grades_count; $i++) {
    $grades_item = intval(trim(fgets(STDIN)));
    $grades[] = $grades_item;
}

$result = gradingStudents($grades);

fwrite($fptr, implode("\n", $result) . "\n");

fclose($fptr);
