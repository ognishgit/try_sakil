<!-- Create an HTML form that accepts the student's name and marks in English, Mathematics, and Computer Science. Write PHP code to:

Calculate the average marks.
Assign a grade according to the following criteria:
Average Marks	Grade
80-100	A
60-79	B
40-59	C
Below 40	F
Display the student's result in a properly formatted HTML table. -->

<?php
$name = $_GET['name'];
$eng = $_GET['eng'];
$math = $_GET['maths'];
$cs = $_GET['computerscience'];
$average = ($eng + $math + $cs) / 3;

if ($average >= 80) {
    $grade = "A";
} elseif ($average >= 60) {
    $grade = "B";
} elseif ($average >= 40) {
    $grade = "C";
} else {
    $grade = "F";
}
echo "<table border='1'>
<tr>
    <th>Student Name</th>
    <th>English</th>
    <th>Mathematics</th>
    <th>Computer Science</th>
    <th>Average Marks</th>
    <th>Grade</th>
</tr>
<tr>
    <td>$name</td>
    <td>$eng</td>
    <td>$math</td>
    <td>$cs</td>
    <td>$average</td>
    <td>$grade</td>
</tr>
</table>";

?>

<form method="GET">
<input type="text" name="name" placeholder="Enter your name">
<input type="number" name="eng" placeholder="Enter your English marks">
<input type="number" name="maths" placeholder="Enter your Maths marks">
<input type="number" name="computerscience" placeholder="Enter your Computer Science marks">
<input type="submit" value="Submit">                                                