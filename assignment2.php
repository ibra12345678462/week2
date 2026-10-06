
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PHP Assignment 2</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 30px;
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            color: #333;
        }

        .section {
            width: 90%;
            max-width: 1100px;
            margin: 30px auto;
            padding: 25px;
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }

        h1 {
            text-align: center;
            color: #2563eb;
            margin-bottom: 30px;
        }

        h2 {
            margin-top: 0;
            padding: 14px;
            text-align: center;
            color: white;
            background-color: #2563eb;
            border-radius: 8px;
        }

        h3 {
            color: #2563eb;
            margin-top: 25px;
        }

        p {
            font-size: 16px;
            line-height: 1.7;
        }

        .numbers {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin: 15px 0 25px;
        }

        .numbers span {
            padding: 10px 15px;
            background-color: #e0e7ff;
            border-radius: 6px;
            font-weight: bold;
        }

        table {
            width: 100%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: white;
        }

        th {
            background-color: #2563eb;
            color: white;
            padding: 13px;
            border: 1px solid #ddd;
        }

        td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }

        tr:nth-child(even) {
            background-color: #f1f5f9;
        }

        tr:hover {
            background-color: #e0e7ff;
        }

        .small-table {
            width: 350px;
        }

        .small-table td {
            font-size: 20px;
            font-weight: bold;
        }

        .pass {
            color: #15803d;
            font-weight: bold;
        }

        .fail {
            color: #dc2626;
            font-weight: bold;
        }

        @media (max-width: 700px) {

            body {
                padding: 10px;
            }

            .section {
                width: 100%;
                padding: 15px;
            }

            table {
                font-size: 13px;
            }

            th,
            td {
                padding: 8px;
            }

        }

    </style>

</head>


<body>

<h1>PHP & MySQL - Assignment 2</h1>


<?php

// ======================================================
// QUESTION 1 - ONE DIMENSIONAL ARRAY
// ======================================================

$array1 = array(
    5, -7, 12, 10, -7, 11,
    -6, 12, 1, -7, 2, 9
);

echo "<div class='section'>";

echo "<h2>Question 1 - One Dimensional Array</h2>";


// Print all elements
echo "<h3>All Elements</h3>";

echo "<div class='numbers'>";

foreach ($array1 as $value) {

    echo "<span>$value</span>";

}

echo "</div>";


// Total of all elements
$total = 0;

foreach ($array1 as $value) {

    $total += $value;

}

echo "<p><b>Total of all elements:</b> $total</p>";


// Total of even elements
$evenTotal = 0;

foreach ($array1 as $value) {

    if ($value % 2 == 0) {

        $evenTotal += $value;

    }

}

echo "<p><b>Total of even elements:</b> $evenTotal</p>";


// Total of odd elements
$oddTotal = 0;

foreach ($array1 as $value) {

    if ($value % 2 != 0) {

        $oddTotal += $value;

    }

}

echo "<p><b>Total of odd elements:</b> $oddTotal</p>";


// Minimum element
$min = min($array1);

echo "<p><b>Minimum element:</b> $min</p>";

echo "<p><b>Minimum positions:</b> ";

foreach ($array1 as $index => $value) {

    if ($value == $min) {

        echo "$index ";

    }

}

echo "</p>";


// Maximum element
$max = max($array1);

echo "<p><b>Maximum element:</b> $max</p>";

echo "<p><b>Maximum positions:</b> ";

foreach ($array1 as $index => $value) {

    if ($value == $max) {

        echo "$index ";

    }

}

echo "</p>";

echo "</div>";



// ======================================================
// QUESTION 2 - TWO DIMENSIONAL ASSOCIATIVE ARRAY
// ======================================================

$array2 = array(

    "Light" => array(
        "Red" => "Light Red",
        "Green" => "Light Green",
        "Blue" => "Light Blue"
    ),

    "Normal" => array(
        "Red" => "Normal Red",
        "Green" => "Normal Green",
        "Blue" => "Normal Blue"
    ),

    "Dark" => array(
        "Red" => "Dark Red",
        "Green" => "Dark Green",
        "Blue" => "Dark Blue"
    )

);

echo "<div class='section'>";

echo "<h2>Question 2 - Two Dimensional Associative Array</h2>";

echo "<table>";

echo "<tr>";

echo "<th></th>";
echo "<th>Red</th>";
echo "<th>Green</th>";
echo "<th>Blue</th>";

echo "</tr>";


foreach ($array2 as $rowName => $row) {

    echo "<tr>";

    echo "<th>$rowName</th>";

    foreach ($row as $value) {

        echo "<td>$value</td>";

    }

    echo "</tr>";

}

echo "</table>";

echo "</div>";



// ======================================================
// QUESTION 3 - SQUARE TWO DIMENSIONAL ARRAY
// ======================================================

$array3 = array(

    array(2, -6, 8),

    array(-6, 1, 6),

    array(7, 8, -6)

);


echo "<div class='section'>";

echo "<h2>Question 3 - Square Two Dimensional Array</h2>";


// Print all elements

echo "<h3>Array Elements</h3>";

echo "<table class='small-table'>";


for ($i = 0; $i < 3; $i++) {

    echo "<tr>";

    for ($j = 0; $j < 3; $j++) {

        echo "<td>";
        echo $array3[$i][$j];
        echo "</td>";

    }

    echo "</tr>";

}

echo "</table>";


// Total of odd elements

$oddTotal = 0;

for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 3; $j++) {

        if ($array3[$i][$j] % 2 != 0) {

            $oddTotal += $array3[$i][$j];

        }

    }

}

echo "<p><b>Total of odd elements:</b> $oddTotal</p>";


// Total of even elements

$evenTotal = 0;

for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 3; $j++) {

        if ($array3[$i][$j] % 2 == 0) {

            $evenTotal += $array3[$i][$j];

        }

    }

}

echo "<p><b>Total of even elements:</b> $evenTotal</p>";


// Total of each row

echo "<h3>Total of Each Row</h3>";

for ($i = 0; $i < 3; $i++) {

    $rowTotal = 0;

    for ($j = 0; $j < 3; $j++) {

        $rowTotal += $array3[$i][$j];

    }

    echo "<p>Row " . ($i + 1) . " = $rowTotal</p>";

}


// Total of each column

echo "<h3>Total of Each Column</h3>";

for ($j = 0; $j < 3; $j++) {

    $columnTotal = 0;

    for ($i = 0; $i < 3; $i++) {

        $columnTotal += $array3[$i][$j];

    }

    echo "<p>Column " . ($j + 1) . " = $columnTotal</p>";

}


// Total of each diagonal

$diagonal1 = 0;

$diagonal2 = 0;


for ($i = 0; $i < 3; $i++) {

    $diagonal1 += $array3[$i][$i];

    $diagonal2 += $array3[$i][2 - $i];

}


echo "<p><b>First diagonal:</b> $diagonal1</p>";

echo "<p><b>Second diagonal:</b> $diagonal2</p>";


// Total of all elements

$total3 = 0;

for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 3; $j++) {

        $total3 += $array3[$i][$j];

    }

}

echo "<p><b>Total of all elements:</b> $total3</p>";


// Minimum element

$min3 = $array3[0][0];


for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 3; $j++) {

        if ($array3[$i][$j] < $min3) {

            $min3 = $array3[$i][$j];

        }

    }

}


echo "<p><b>Minimum element:</b> $min3</p>";

echo "<p><b>Minimum positions:</b> ";


for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 3; $j++) {

        if ($array3[$i][$j] == $min3) {

            echo "($i,$j) ";

        }

    }

}

echo "</p>";


// Maximum element

$max3 = $array3[0][0];


for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 3; $j++) {

        if ($array3[$i][$j] > $max3) {

            $max3 = $array3[$i][$j];

        }

    }

}


echo "<p><b>Maximum element:</b> $max3</p>";

echo "<p><b>Maximum positions:</b> ";


for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 3; $j++) {

        if ($array3[$i][$j] == $max3) {

            echo "($i,$j) ";

        }

    }

}

echo "</p>";

echo "</div>";



// ======================================================
// QUESTION 4 - STUDENT INFORMATION
// ======================================================

$students = array(

    array(
        "ID" => "CA221",
        "Name" => "Mohamed Ahmed Ali",
        "Phone" => "0648440403",
        "Address" => "Laba Dhagax, Wardhiigley"
    ),

    array(
        "ID" => "CA223",
        "Name" => "Ahmed Abdi Jama",
        "Phone" => "0647223201",
        "Address" => "Taleex, Hodan"
    ),

    array(
        "ID" => "CA221",
        "Name" => "Amina Nur Adan",
        "Phone" => "0646990276",
        "Address" => "Macmacaanka, Dharkeynley"
    )

);


echo "<div class='section'>";

echo "<h2>Question 4 - Student Information</h2>";

echo "<table>";

echo "<tr>";

echo "<th>Student ID</th>";
echo "<th>Name</th>";
echo "<th>Phone</th>";
echo "<th>Address</th>";

echo "</tr>";


foreach ($students as $student) {

    echo "<tr>";

    echo "<td>" . $student["ID"] . "</td>";
    echo "<td>" . $student["Name"] . "</td>";
    echo "<td>" . $student["Phone"] . "</td>";
    echo "<td>" . $student["Address"] . "</td>";

    echo "</tr>";

}


echo "</table>";

echo "</div>";



// ======================================================
// QUESTION 5 - STUDENT TRANSCRIPT
// ======================================================

$transcript = array(

    "Semester 1" => array(

        "subject1" => array(
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        ),

        "subject2" => array(
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        ),

        "subject3" => array(
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        )

    ),

    "Semester 2" => array(

        "subject1" => array(
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 0,
            "Total" => 45,
            "Status" => "Fail"
        ),

        "subject2" => array(
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        ),

        "subject3" => array(
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        )

    )

);


echo "<div class='section'>";

echo "<h2>Question 5 - Student Transcript</h2>";

echo "<table>";

echo "<tr>";

echo "<th>Semester</th>";
echo "<th>Course</th>";
echo "<th>CW1</th>";
echo "<th>MidTerm</th>";
echo "<th>CW2</th>";
echo "<th>Final</th>";
echo "<th>Total</th>";
echo "<th>Status</th>";

echo "</tr>";


foreach ($transcript as $semester => $subjects) {

    foreach ($subjects as $course => $marks) {

        echo "<tr>";

        echo "<td>" . $semester . "</td>";
        echo "<td>" . $course . "</td>";
        echo "<td>" . $marks["CW1"] . "</td>";
        echo "<td>" . $marks["MidTerm"] . "</td>";
        echo "<td>" . $marks["CW2"] . "</td>";
        echo "<td>" . $marks["Final"] . "</td>";
        echo "<td>" . $marks["Total"] . "</td>";


        if ($marks["Status"] == "Pass") {

            echo "<td class='pass'>Pass</td>";

        } else {

            echo "<td class='fail'>Fail</td>";

        }


        echo "</tr>";

    }

}


echo "</table>";

echo "</div>";

?>

</body>

</html>

