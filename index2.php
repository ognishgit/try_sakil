<form method="GET">
<input type="text" name="name" placeholder="Enter your name">
<input type="text" name="roll" placeholder="Enter your roll number">
<input type = "text" name = "sub1" placeholder = "Enter your subject 1 marks">
<input type = "text" name = "sub2" placeholder = "Enter your subject 2 marks">
<input type = "text" name = "sub3" placeholder = "Enter your subject 3 marks">
<input type="submit" value="Submit">

</form>

<?php
if (isset($_GET['name']) && isset($_GET['roll']) && isset($_GET['sub1']) && isset($_GET['sub2']) && isset($_GET['sub3'])) {
$name = $_GET['name'];
$roll = $_GET['roll'];
$sub1 = $_GET['sub1'];
$sub2 = $_GET['sub2'];
$sub3 = $_GET['sub3'];
$total = $sub1 + $sub2 + $sub3;
$percentage = ($total / 300) * 100;
echo "Name: " . $name . "<br>";
echo "Roll Number: " . $roll . "<br>";
echo "Total Marks: " . $total . "<br>";
echo "Percentage: " . $percentage . "%<br>";
if ($percentage >= 40) {
    echo "passed.";
} else {
    echo "failed.";
}
}
?>