<?php
$studentMarks = array(68, 70, 72, 49, 60, 79, 82, 73, 75, 77, 73, 58, 63,
 79, 78,68, 72, 73, 80, 34, 68, 72, 56, 23, 73, 45, 24, 85, 89, 83);

echo "total number of students:".count($studentMarks)."<br>";
echo "total number of students:".array_sum($studentMarks)/count($studentMarks)."<br>";
echo "lowest mark:".min($studentMarks)."<br>";
echo "highest mark:".max($studentMarks)."<br>";
sort($studentMarks);
echo "top 5:";

for ($i=count($studentMarks)-5; $i<count($studentMarks); $i++) {
    echo $studentMarks[$i];
    if ($i!==count($studentMarks)-1) {
        echo ",";
    }
}

echo "<br>bottom 5:";

for ($i=0; $i<5; $i++) {
    echo $studentMarks[$i];
    if ($i!==count($studentMarks)-1) {
        echo ",";
    }
}

echo "<br>number of students with mark lower than 50:";
for ($i=0; $i<count($studentMarks); $i++) {
    if ($studentMarks[$i]>=50) {
        break;
    }
}
echo $i."<br>";
/*$studentMarks = array(
68, 70, 72, 49, 60, 79, 82, 73, 75, 77, 73, 58, 63, 79, 78,
68, 72, 73, 80, 34, 68, 72, 56, 23, 73, 45, 24, 85, 89, 83
);
Create an array of marks

- Get total number of students
- Calculate the average mark
- Get the highest and lowest mark
- Get top5
- Get bottom5
- Get number of students with mark lower than 50*/
