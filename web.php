









































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































<?php
/*
---------------------------------------------------------
WEB TECHNOLOGIES LAB EXERCISE – PHP -1
---------------------------------------------------------
*/

/* =========================================================
1. Display string using array elements
$color = array('white', 'green', 'red', 'blue', 'black');
Write a script which will display the following string -
"The memory of that scene for me is like a frame of film forever frozen at that
moment: the red carpet, the green lawn, the white house, the leaden sky. The
new president and his first lady. - Richard M. Nixon"
and the words 'red', 'green' and 'white' will come from $color.
========================================================= */
echo "<h3>1. Display string using array elements</h3>";
$color = array('white', 'green', 'red', 'blue', 'black');
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the "
    . $color[2] . " carpet, the " . $color[1] . " lawn, the " . $color[0]
    . " house, the leaden sky. The new president and his first lady. - Richard M. Nixon.<hr>";

/* =========================================================
2. Display colors in list format
$color = array('white', 'green', 'red');
Write a PHP script which will display:
white, green, red,
• green
• red
• white
========================================================= */
echo "<h3>2. Display colors in list format</h3>";
$color = array('white', 'green', 'red');
echo implode(", ", $color) . ",<br><ul>";
foreach ($color as $c) {
    echo "<li>$c</li>";
}
echo "</ul><hr>";

/* =========================================================
3. Display capital and country name sorted by capital
$ceu = array("Italy"=>"Rome", ... );
Create a PHP script which displays the capital and country name
sorted by the capital of the country.
========================================================= */
echo "<h3>3. Country and Capital List (Sorted by Capital)</h3>";
$ceu = array(
"Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=>"Brussels", "Denmark"=>"Copenhagen",
"Finland"=>"Helsinki", "France"=>"Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",
"Germany"=>"Berlin", "Greece"=>"Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
"Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London",
"Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin",
"Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria"=>"Vienna", "Poland"=>"Warsaw");
asort($ceu);
foreach($ceu as $country => $capital) {
    echo "The capital of $country is $capital<br>";
}
echo "<hr>";

/* =========================================================
4. Delete an element and normalize array keys
$x = array(1, 2, 3, 4, 5);
Delete an element and reindex.
========================================================= */
echo "<h3>4. Delete an element and normalize keys</h3>";
$x = array(1, 2, 3, 4, 5);
print_r($x);
unset($x[3]);
$x = array_values($x);
echo "<pre>";
print_r($x);
echo "</pre><hr>";

/* =========================================================
5. Get the first element of an array
$color = array(4 => 'white', 6 => 'green', 11=> 'red');
Expected result : white
========================================================= */
echo "<h3>5. Get first element of array</h3>";
$color = array(4 => 'white', 6 => 'green', 11=> 'red');
echo "First element: " . reset($color) . "<hr>";

/* =========================================================
6. Decode JSON string
Sample JSON:
{"Title": "The Cuckoos Calling","Author": "Robert Galbraith","Detail": {"Publisher": "Little Brown"}}
========================================================= */
echo "<h3>6. Decode JSON string</h3>";
$json = '{"Title": "The Cuckoos Calling","Author": "Robert Galbraith","Detail": {"Publisher": "Little Brown"}}';
$data = json_decode($json, true);
echo "Title : " . $data['Title'] . "<br>";
echo "Author : " . $data['Author'] . "<br>";
echo "Publisher : " . $data['Detail']['Publisher'] . "<hr>";

/* =========================================================
7. Insert a new item in an array at any position
Expected Output:
Original array: 1 2 3 4 5
After inserting '$': 1 2 3 $ 4 5
========================================================= */
echo "<h3>7. Insert new item in array</h3>";
$original = array(1, 2, 3, 4, 5);
echo "Original array: ";
echo implode(" ", $original) . "<br>";
array_splice($original, 3, 0, '$');
echo "After inserting '\$': ";
echo implode(" ", $original) . "<hr>";

/* =========================================================
8. Sort associative array in multiple ways
array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40")
a) ascending by value
b) ascending by key
c) descending by value
d) descending by key
========================================================= */
echo "<h3>8. Sorting associative array</h3>";
$age = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
asort($age);
echo "a) Ascending by Value:<br>"; print_r($age); echo "<br>";
ksort($age);
echo "b) Ascending by Key:<br>"; print_r($age); echo "<br>";
arsort($age);
echo "c) Descending by Value:<br>"; print_r($age); echo "<br>";
krsort($age);
echo "d) Descending by Key:<br>"; print_r($age); echo "<hr>";

/* =========================================================
9. Calculate and display average temperature, and 5 lowest & highest
Recorded temperatures:
78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68,
62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
========================================================= */
echo "<h3>9. Average and temperature statistics</h3>";
$temp = [78,60,62,68,71,68,73,85,66,64,76,63,75,76,73,68,62,73,72,65,74,62,62,65,64,68,73,75,79,73];
$avg = array_sum($temp)/count($temp);
echo "Average Temperature is : " . round($avg,1) . "<br>";
sort($temp);
$low = array_slice($temp, 0, 7);
$high = array_slice($temp, -7);
echo "List of seven lowest temperatures : " . implode(", ", $low) . "<br>";
echo "List of seven highest temperatures : " . implode(", ", $high) . "<hr>";

/* =========================================================
11. Merge two arrays by index
$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com");
========================================================= */
echo "<h3>11. Merge two arrays by index</h3>";
$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com");
$new = array();
for($i=0;$i<count($array1);$i++){
    array_unshift($array1[$i], $array2[$i]);
}
echo "<pre>"; print_r($array1); echo "</pre><hr>";

/* =========================================================
12. Change array values to upper and lower case
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
========================================================= */
echo "<h3>12. Change array values to upper/lower case</h3>";
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
$lower = array_map('strtolower', $Color);
$upper = array_map('strtoupper', $Color);
echo "Values in lower case:<br>"; print_r($lower); echo "<br>";
echo "Values in upper case:<br>"; print_r($upper); echo "<hr>";

/* =========================================================
13. Display all numbers between 200 and 250 divisible by 4
Do not use control statements.
========================================================= */
echo "<h3>13. Numbers between 200 and 250 divisible by 4</h3>";
echo implode(",", range(200, 248, 4));
echo "<hr>";
?>



<?php
/*
---------------------------------------------------------
PHP LAB SOLUTIONS – PART 2
---------------------------------------------------------
*/

/* =========================================================
1. Arrays – Sorting and Displaying Top Students
Write a PHP program that stores student names and their marks in an associative array (e.g.,
["Rahul" => 85, "Priya" => 92, "Arun" => 78, ...]). Sort the array in descending order of marks and
display the top 3 students with their names and marks in a neat tabular format.
========================================================= */
//one method
echo "<h3>1. Arrays – Top 3 Students</h3>";
$students = ["Rahul" => 85, "Priya" => 92, "Arun" => 78, "Meena" => 95, "Karthik" => 88];
arsort($students);
echo "<table border='1' cellpadding='5'><tr><th>Name</th><th>Marks</th></tr>";
$count = 0;
foreach ($students as $name => $mark) {
    echo "<tr><td>$name</td><td>$mark</td></tr>";
    if (++$count == 3) break;
}
echo "</table><hr>";
//another
<!DOCTYPE html>
<html>
<head>
    <title>Top 3 Students - User Input</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f8f9fa;
        }
        h2 {
            color: #333;
        }
        form {
            background-color: #fff;
            padding: 20px;
            width: 400px;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0,0,0,0.2);
            margin-bottom: 30px;
        }
        input[type=text], input[type=number] {
            width: 90%;
            padding: 8px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type=submit] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type=submit]:hover {
            background-color: #0056b3;
        }
        table {
            border-collapse: collapse;
            width: 50%;
            background-color: #fff;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .top {
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h2>PHP Arrays – Enter Student Marks and Display Top 3</h2>

<form method="POST">
    <h3>Enter Student Details</h3>
    <div id="inputs">
        <label>Student 1 Name:</label><br>
        <input type="text" name="name[]" required><br>
        <label>Marks:</label><br>
        <input type="number" name="marks[]" min="0" max="100" required><br><br>

        <label>Student 2 Name:</label><br>
        <input type="text" name="name[]" required><br>
        <label>Marks:</label><br>
        <input type="number" name="marks[]" min="0" max="100" required><br><br>

        <label>Student 3 Name:</label><br>
        <input type="text" name="name[]" required><br>
        <label>Marks:</label><br>
        <input type="number" name="marks[]" min="0" max="100" required><br><br>

        <label>Student 4 Name (optional):</label><br>
        <input type="text" name="name[]"><br>
        <label>Marks:</label><br>
        <input type="number" name="marks[]" min="0" max="100"><br><br>

        <label>Student 5 Name (optional):</label><br>
        <input type="text" name="name[]"><br>
        <label>Marks:</label><br>
        <input type="number" name="marks[]" min="0" max="100"><br><br>
    </div>

    <input type="submit" value="Show Top 3 Students">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $names = $_POST['name'];
    $marks = $_POST['marks'];
    $students = array();

    // Build associative array only for non-empty names
    for ($i = 0; $i < count($names); $i++) {
        if (!empty($names[$i])) {
            $students[$names[$i]] = (int)$marks[$i];
        }
    }

    if (count($students) == 0) {
        echo "<p style='color:red;'>Please enter at least one student.</p>";
        exit;
    }

    // Sort by marks descending
    arsort($students);

    echo "<h3>Top 3 Students:</h3>";
    echo "<table>";
    echo "<tr><th>Rank</th><th>Name</th><th>Marks</th></tr>";

    $rank = 1;
    foreach ($students as $name => $mark) {
        if ($rank <= 3) {
            echo "<tr><td class='top'>$rank</td><td>$name</td><td>$mark</td></tr>";
            $rank++;
        } else {
            break;
        }
    }
    echo "</table>";
}
?>

</body>
</html>


/* =========================================================
2. Arrays + File Handling – Reading Products from File
Create a text file products.txt with product names and prices (e.g., Laptop,55000, Mouse,500). Write
a PHP program to:
• Read the file contents into an array.
• Sort the products based on price (ascending).
• Display the sorted product list in an HTML table with two columns: Product Name and
Price.
========================================================= */
echo "<h3>2. Arrays + File Handling – Products</h3>";
$file = "products.txt";
if (file_exists($file)) {
    $data = file($file, FILE_IGNORE_NEW_LINES);
    $products = [];
    for ($i = 0; $i < count($data); $i += 2) {
        $products[$data[$i]] = $data[$i + 1];
    }
    asort($products);
    echo "<table border='1' cellpadding='5'><tr><th>Product</th><th>Price</th></tr>";
    foreach ($products as $p => $price) {
        echo "<tr><td>$p</td><td>$price</td></tr>";
    }
    echo "</table>";
} else {
    echo "products.txt not found.";
}
echo "<hr>";

/* =========================================================
3. Regular Expressions – Validating Email Addresses
Write a PHP script that has an array of email addresses, some valid and some invalid (e.g.,
["john@example.com", "wrong-email@", "me@site", "user123@gmail.com"]). Using regular
expressions, check each email address and print only the valid ones
========================================================= */
<!DOCTYPE html>
<html>
<head>
    <title>Email Validation using Regular Expressions</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f2f2f2;
        }
        h2 {
            color: #333;
        }
        table {
            border-collapse: collapse;
            width: 60%;
            background: #fff;
        }
        th, td {
            border: 1px solid #999;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #dfe6e9;
        }
        .valid {
            color: green;
            font-weight: bold;
        }
        .invalid {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h2>PHP Regular Expressions – Email Validation</h2>

<?php
// Array of sample email addresses
$emails = array(
    "john.doe@example.com",
    "user@domain.co.in",
    "invalid-email.com",
    "hello@.com",
    "student_123@vit.ac.in",
    "name@domain",
    "admin@openai.org",
    "test@123.abc",
    "@missingusername.com"
);

// Regular expression for validating emails
$pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,}$/";

// Display results in a table
echo "<table>";
echo "<tr><th>Email Address</th><th>Status</th></tr>";

foreach ($emails as $email) {
    if (preg_match($pattern, $email)) {
        echo "<tr><td>$email</td><td class='valid'>Valid</td></tr>";
    } else {
        echo "<tr><td>$email</td><td class='invalid'>Invalid</td></tr>";
    }
}

echo "</table>";
?>

</body>
</html>


/* =========================================================
4. Regular Expressions + Error Handling – Password Validation
Create a PHP script that accepts a password string. The password must:
• Be at least 8 characters long.
• Contain at least one uppercase letter.
• Contain at least one digit.
• Contain at least one special character (e.g., @, #, $, %).
If the password does not meet any of these conditions, throw a custom exception with a message
like "Password must contain at least one uppercase letter". Handle the exception and display the
error message
========================================================= */
<!DOCTYPE html>
<html>
<head>
    <title>Password Validation with Regular Expressions</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f8f9fa;
        }
        h2 {
            color: #333;
        }
        form {
            background-color: #fff;
            padding: 20px;
            width: 400px;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0,0,0,0.2);
        }
        input[type=password] {
            width: 90%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type=submit] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type=submit]:hover {
            background-color: #0056b3;
        }
        .success {
            color: green;
            font-weight: bold;
        }
        .error {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h2>Password Validation (Regex + Exception Handling)</h2>

<form method="POST">
    Enter Password:<br>
    <input type="password" name="password" required><br>
    <input type="submit" value="Validate">
</form>

<?php
// Custom Exception Class
class PasswordException extends Exception {}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST['password'];

    try {
        // Check minimum length
        if (strlen($password) < 8) {
            throw new PasswordException("Password must be at least 8 characters long.");
        }

        // Check uppercase letter
        if (!preg_match("/[A-Z]/", $password)) {
            throw new PasswordException("Password must contain at least one uppercase letter.");
        }

        // Check digit
        if (!preg_match("/[0-9]/", $password)) {
            throw new PasswordException("Password must contain at least one digit.");
        }

        // Check special character
        if (!preg_match("/[@#$%^&*!]/", $password)) {
            throw new PasswordException("Password must contain at least one special character (@, #, $, %, etc).");
        }

        // If all validations pass
        echo "<p class='success'>✅ Password is strong and valid!</p>";

    } catch (PasswordException $e) {
        echo "<p class='error'>❌ " . $e->getMessage() . "</p>";
    }
}
?>

</body>
</html>


/* =========================================================
5. File Handling – Writing and Reading Logs
Write a PHP script that appends log entries to a file access.log. Each entry should follow this
format:
Username – YYYY-MM-DD HH:MM:SS – Action
Example: admin – 2025-09-26 10:30:15 – Logged In
After writing, read and display only the last 5 log entries on the web page
========================================================= */
echo "<h3>5. File Handling – Logs</h3>";
$logFile = "access.log";
$username = "admin";
$action = "Logged In";
$entry = "$username – " . date("Y-m-d H:i:s") . " – $action\n";
file_put_contents($logFile, $entry, FILE_APPEND);

$lines = file($logFile, FILE_IGNORE_NEW_LINES);
$lastLogs = array_slice($lines, -5);
foreach ($lastLogs as $log) {
    echo "$log<br>";
}
echo "<hr>";

/* =========================================================
6. Date and Time – Calculations
Write a PHP program to:
• Display the current date and time in the format DD-MM-YYYY HH:MM:SS.
• Ask the user to input their date of birth (e.g., 1990-05-15) and calculate the number of
days left until their next birthday.
========================================================= */
<!DOCTYPE html>
<html>
<head>
    <title>Date and Time – Next Birthday Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f8f9fa;
        }
        h2 {
            color: #333;
        }
        form {
            background-color: #fff;
            padding: 20px;
            width: 400px;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0,0,0,0.2);
            margin-bottom: 25px;
        }
        input[type=date] {
            width: 90%;
            padding: 8px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type=submit] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type=submit]:hover {
            background-color: #0056b3;
        }
        .result {
            font-weight: bold;
            color: #333;
            background-color: #fff;
            padding: 15px;
            width: 400px;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0,0,0,0.2);
        }
        .highlight {
            color: green;
        }
    </style>
</head>
<body>

<h2>PHP Date and Time – Days Until Next Birthday</h2>

<?php
// Display current date and time
date_default_timezone_set("Asia/Kolkata"); // You can change timezone if needed
$currentDate = date("d-m-Y");
$currentTime = date("H:i:s");

echo "<p><b>Current Date:</b> $currentDate</p>";
echo "<p><b>Current Time:</b> $currentTime</p>";
?>

<form method="POST">
    <label>Enter Your Date of Birth:</label><br>
    <input type="date" name="dob" required><br><br>
    <input type="submit" value="Calculate Days Until Birthday">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dob = $_POST['dob'];
    $today = new DateTime();
    $birthDate = new DateTime($dob);

    // Get current year birthday
    $currentYear = $today->format("Y");
    $nextBirthday = new DateTime($currentYear . "-" . $birthDate->format("m-d"));

    // If birthday has already passed this year, take next year
    if ($nextBirthday < $today) {
        $nextBirthday->modify('+1 year');
    }

    // Calculate difference in days
    $interval = $today->diff($nextBirthday);
    $daysLeft = $interval->days;

    echo "<div class='result'>";
    echo "🎂 Your next birthday is on <b>" . $nextBirthday->format("d-m-Y") . "</b><br>";
    echo "<p class='highlight'>Days left until your next birthday: <b>$daysLeft days</b></p>";
    echo "</div>";
}
?>

</body>
</html>


/* =========================================================
7. Arrays + Error Handling – Average of Numbers
Write a PHP program that accepts an array of numbers (e.g., [10, 20, 30, 40, 50]) and calculates their
average. If the array is empty, throw an exception with the message "No numbers provided" and
handle it properly by displaying an error message.
========================================================= */
<!DOCTYPE html>
<html>
<head>
    <title>Average of Numbers with Exception Handling</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f8f9fa;
        }
        h2 {
            color: #333;
        }
        form {
            background-color: #fff;
            padding: 20px;
            width: 450px;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0,0,0,0.2);
            margin-bottom: 25px;
        }
        input[type=text] {
            width: 90%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type=submit] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type=submit]:hover {
            background-color: #0056b3;
        }
        .result {
            background-color: #fff;
            padding: 15px;
            width: 450px;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0,0,0,0.2);
            font-size: 16px;
        }
        .error {
            color: red;
            font-weight: bold;
        }
        .success {
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h2>PHP Arrays + Exception Handling – Average Calculator</h2>

<form method="POST">
    <label>Enter numbers separated by commas:</label><br>
    <input type="text" name="numbers" placeholder="e.g. 10, 20, 30, 40, 50" required><br><br>
    <input type="submit" value="Calculate Average">
</form>

<?php
// Define custom exception class
class EmptyArrayException extends Exception {}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = trim($_POST['numbers']);

    try {
        // Convert input to array
        $numArray = array_filter(array_map('trim', explode(',', $input)));

        // Check if array is empty
        if (count($numArray) == 0) {
            throw new EmptyArrayException("No numbers provided.");
        }

        // Convert string numbers to float/int
        $numbers = array_map('floatval', $numArray);

        // Calculate average
        $sum = array_sum($numbers);
        $count = count($numbers);
        $average = $sum / $count;

        // Display result
        echo "<div class='result success'>";
        echo "Numbers Entered: " . implode(", ", $numbers) . "<br>";
        echo "Total Numbers: $count<br>";
        echo "Sum: $sum<br>";
        echo "Average: <b>" . round($average, 2) . "</b>";
        echo "</div>";

    } catch (EmptyArrayException $e) {
        echo "<div class='result error'>❌ " . $e->getMessage() . "</div>";
    } catch (Exception $e) {
        echo "<div class='result error'>⚠️ Unexpected error: " . $e->getMessage() . "</div>";
    }
}
?>

</body>
</html>


/* =========================================================
8. File Handling + Regular Expressions – Extracting Mobile Numbers
Create a text file data.txt containing some text mixed with phone numbers (e.g., “ Call me at
9876543210 or at office 9123456789”). Write a PHP program that uses regular expressions to extract
all valid 10-digit mobile numbers from the file and save them into a new file numbers.txt.
========================================================= */
<!DOCTYPE html>
<html>
<head>
    <title>Extract Mobile Numbers using PHP + Regex</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f8f9fa;
        }
        h2 {
            color: #333;
        }
        .result {
            background-color: #fff;
            padding: 15px;
            width: 550px;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0,0,0,0.2);
            margin-top: 20px;
        }
        .success {
            color: green;
            font-weight: bold;
        }
        .error {
            color: red;
            font-weight: bold;
        }
        pre {
            background-color: #eee;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<h2>PHP File Handling + Regular Expressions – Extracting Mobile Numbers</h2>

<?php
// Step 1: Define input and output file names
$inputFile = "data.txt";
$outputFile = "numbers.txt";

// Step 2: Check if input file exists
if (!file_exists($inputFile)) {
    echo "<div class='result error'>❌ Error: The file <b>$inputFile</b> does not exist.<br>
    Please create a file named <b>data.txt</b> with some text and numbers.</div>";
    exit;
}

// Step 3: Read contents of the file
$content = file_get_contents($inputFile);

// Step 4: Regular expression for 10-digit mobile numbers
// (Allows numbers starting with 6–9)
$pattern = "/\b[6-9][0-9]{9}\b/";

// Step 5: Extract matches
preg_match_all($pattern, $content, $matches);

// Step 6: Handle empty results
if (empty($matches[0])) {
    echo "<div class='result error'>No valid 10-digit mobile numbers found in <b>$inputFile</b>.</div>";
} else {
    // Step 7: Write extracted numbers to new file
    $numbers = implode("\n", $matches[0]);
    file_put_contents($outputFile, $numbers);

    // Step 8: Display results
    echo "<div class='result success'>";
    echo "✅ Mobile numbers extracted successfully!<br>";
    echo "Source File: <b>$inputFile</b><br>";
    echo "Output File: <b>$outputFile</b><br><br>";
    echo "<b>Extracted Numbers:</b><pre>$numbers</pre>";
    echo "</div>";
}
?>
</body>
</html>


/* =========================================================
9. Date and Time + File Handling – Backup File Creation
Write a PHP script that creates a backup copy of any given file. The backup file name should
include the current date and time.
Example: If the original file is data.txt and today’s date-time is 2025-09-26 11:25:00, the backup file
should be saved as data_2025-09-26_11-25.txt.
========================================================= */
<!DOCTYPE html>
<html>
<head>
    <title>File Backup using PHP + Date & Time</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f8f9fa;
        }
        h2 {
            color: #333;
        }
        form {
            background-color: #fff;
            padding: 20px;
            width: 400px;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0,0,0,0.2);
            margin-bottom: 25px;
        }
        input[type=text] {
            width: 90%;
            padding: 8px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type=submit] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type=submit]:hover {
            background-color: #0056b3;
        }
        .result {
            background-color: #fff;
            padding: 15px;
            width: 450px;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0,0,0,0.2);
            font-size: 16px;
        }
        .success {
            color: green;
            font-weight: bold;
        }
        .error {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h2>PHP File Handling + Date and Time – Backup File Creator</h2>

<form method="POST">
    <label>Enter file name to backup (e.g., data.txt):</label><br>
    <input type="text" name="filename" placeholder="Enter file name" required><br><br>
    <input type="submit" value="Create Backup">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $file = trim($_POST['filename']);

    try {
        // Step 1: Check if file exists
        if (!file_exists($file)) {
            throw new Exception("File '$file' does not exist in the current directory.");
        }

        // Step 2: Generate backup file name with current date & time
        date_default_timezone_set("Asia/Kolkata");
        $timestamp = date("Y-m-d_H-i-s");
        $pathInfo = pathinfo($file);
        $backupName = $pathInfo['filename'] . "_backup_" . $timestamp . "." . $pathInfo['extension'];

        // Step 3: Copy file to create backup
        if (copy($file, $backupName)) {
            echo "<div class='result success'>";
            echo "✅ Backup created successfully!<br>";
            echo "Original File: <b>$file</b><br>";
            echo "Backup File: <b>$backupName</b><br>";
            echo "Backup created at: <b>" . date("d-m-Y H:i:s") . "</b>";
            echo "</div>";
        } else {
            throw new Exception("Failed to create backup file.");
        }
    } catch (Exception $e) {
        echo "<div class='result error'>❌ Error: " . $e->getMessage() . "</div>";
    }
}
?>

</body>
</html>
<?php
/* =========================================================
10. Combined Task – Student Records Validation
You are given a text file students.txt where each line contains student details in this format:
Name,Email,DateOfBirth(YYYY-MM-DD)
Example: Anita,anita123@gmail.com,2000-06-15
Write a PHP program that:
• Reads each student record from the file.
• Validates the email format using regular expressions.
• Calculates the student’s age from their date of birth.
• Displays the valid records in a table with columns: Name, Email, Age.
• If a record has an invalid email or missing fields, handle the error gracefully and save the
invalid entries into a new file errors.log.
========================================================= */
<!DOCTYPE html>
<html>
<head>
    <title>Student Records Validation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f8f9fa;
        }
        h2 {
            color: #333;
        }
        table {
            border-collapse: collapse;
            width: 70%;
            background-color: #fff;
            box-shadow: 0 0 5px rgba(0,0,0,0.2);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .error {
            color: red;
            font-weight: bold;
        }
        .success {
            color: green;
            font-weight: bold;
        }
        pre {
            background-color: #eee;
            padding: 10px;
            border-radius: 5px;
            width: 70%;
        }
    </style>
</head>
<body>

<h2>PHP Combined Task – Student Records Validation</h2>

<?php
// Step 1: File setup
$inputFile = "students.txt";
$errorFile = "errors.log";

// Step 2: Check if input file exists
if (!file_exists($inputFile)) {
    echo "<p class='error'>❌ Error: File '$inputFile' not found. Please create the file in the same directory.</p>";
    echo "<pre>Example format inside students.txt:
Anita,anita123@gmail.com,2000-06-15
Rahul,rahulmail.com,2001-02-20
Meena,meena@yahoo.com,2003-09-05</pre>";
    exit;
}

// Step 3: Read the file line by line
$lines = file($inputFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$validStudents = [];
$errorMessages = [];

// Step 4: Process each line
foreach ($lines as $lineNumber => $line) {
    $fields = array_map('trim', explode(",", $line));

    try {
        // Check for missing fields
        if (count($fields) < 3) {
            throw new Exception("Line " . ($lineNumber + 1) . ": Missing fields → '$line'");
        }

        list($name, $email, $dob) = $fields;

        // Validate email with regex
        if (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,}$/", $email)) {
            throw new Exception("Line " . ($lineNumber + 1) . ": Invalid email format → '$email'");
        }

        // Validate date format and calculate age
        $birthDate = DateTime::createFromFormat('Y-m-d', $dob);
        if (!$birthDate) {
            throw new Exception("Line " . ($lineNumber + 1) . ": Invalid date format → '$dob'");
        }

        $today = new DateTime();
        $age = $today->diff($birthDate)->y;

        // Add to valid student list
        $validStudents[] = ['name' => $name, 'email' => $email, 'age' => $age];

    } catch (Exception $e) {
        // Log invalid entries
        $errorMessages[] = $e->getMessage();
    }
}

// Step 5: Display valid records
if (count($validStudents) > 0) {
    echo "<h3 class='success'>✅ Valid Student Records</h3>";
    echo "<table>";
    echo "<tr><th>Name</th><th>Email</th><th>Age</th></tr>";
    foreach ($validStudents as $student) {
        echo "<tr><td>{$student['name']}</td><td>{$student['email']}</td><td>{$student['age']}</td></tr>";
    }
    echo "</table>";
} else {
    echo "<p class='error'>No valid student records found.</p>";
}

// Step 6: Save invalid records to errors.log
if (count($errorMessages) > 0) {
    file_put_contents($errorFile, implode(PHP_EOL, $errorMessages) . PHP_EOL);
    echo "<br><div class='error'>⚠️ Some records were invalid and have been logged in <b>$errorFile</b>.</div>";
}
?>
</body>
</html>

//students.txt
Anita,anita123@gmail.com,2000-06-15
Rahul,rahulmail.com,2001-02-20
Meena,meena@yahoo.com,2003-09-05
Arun,arun_123@vit.ac.in,2002-11-25
Priya,priya@gmail,1999-05-08


<?php
/*
---------------------------------------------------------
PHP LAB SOLUTIONS – PART 3
---------------------------------------------------------
*/



/*  =========================================================
1. Cookie-Based Visit Counter
Problem:
Write a PHP program that uses cookies to count how many times a user has visited your
webpage. Display a message showing the visit count.
Outline Solution:
<?php
if(isset($_COOKIE['visits'])) {
 $count = $_COOKIE['visits'] + 1;
} else {
 $count = 1;
}
setcookie('visits', $count, time() + 3600);
echo "Welcome! You have visited this page $count times.";
?>
========================================================= */

<!DOCTYPE html>
<html>
<head>
    <title>Cookie Visit Counter</title>
</head>
<body>
    <h2>Cookie-Based Visit Counter</h2>
    <?php
    if (isset($_COOKIE['visits'])) {
        $count = $_COOKIE['visits'] + 1;
    } else {
        $count = 1;
    }
    setcookie('visits', $count, time() + 3600); // valid for 1 hour
    echo "<p>Welcome! You have visited this page <b>$count</b> times.</p>";
    ?>
</body>
</html>



/*  =========================================================
2. Session-Based Login Authentication
Problem:
Create a login system using sessions. Redirect to a welcome page upon successful login.
Outline Solution:
<?php
session_start();
if($_POST['user']=="admin" && $_POST['pass']=="1234") {
 $_SESSION['user'] = "admin";
 header("Location: welcome.php");
} else {
 echo "Invalid credentials.";
}
?>
 ========================================================= */
login.php

<!DOCTYPE html>
<html>
<head>
    <title>Session Login</title>
</head>
<body>
    <h2>Login Page</h2>
    <form method="POST">
        Username: <input type="text" name="user" required><br><br>
        Password: <input type="password" name="pass" required><br><br>
        <input type="submit" value="Login">
    </form>

    <?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($_POST['user'] == "admin" && $_POST['pass'] == "1234") {
            $_SESSION['user'] = "admin";
            header("Location: welcome.php");
            exit;
        } else {
            echo "<p style='color:red;'>Invalid credentials!</p>";
        }
    }
    ?>
</body>
</html>


welcome.php

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header("Location: login.php");
        exit;
    }
    echo "<h2>Welcome, " . $_SESSION['user'] . "!</h2>";
    echo "<p>You are successfully logged in.</p>";
    ?>
    <a href="logout.php">Logout</a>
</body>
</html>


logout.php

<?php
session_start();
session_destroy();
header("Location: login.php");
?>
/*  =========================================================
3. Remember Me Functionality with Cookies
Problem:
Add a “Remember Me” option that saves the username in a cookie.
Outline Solution:
<?php
if(isset($_POST['remember'])) {
 setcookie('username', $_POST['username'], time()+3600*24);
}
echo "Welcome " . ($_COOKIE['username'] ?? 'Guest');
?>
========================================================= */

<!DOCTYPE html>
<html>
<head>
    <title>Remember Me</title>
</head>
<body>
    <h2>Login with Remember Me</h2>
    <form method="POST">
        Username: <input type="text" name="username" 
                 value="<?php echo $_COOKIE['username'] ?? ''; ?>" required><br><br>
        <input type="checkbox" name="remember"> Remember Me<br><br>
        <input type="submit" value="Login">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['remember'])) {
            setcookie('username', $_POST['username'], time() + 86400);
            echo "<p>Cookie set for user: <b>{$_POST['username']}</b></p>";
        } else {
            echo "<p>Hello, " . htmlspecialchars($_POST['username']) . "</p>";
        }
    }
    ?>
</body>
</html>

/*  =========================================================
4. Simple CAPTCHA Verification
Problem:
Generate a CAPTCHA image using GD library and verify user input.
Outline Solution:
<?php
session_start();
$captcha = rand(1000,9999);
$_SESSION['captcha'] = $captcha;
$image = imagecreate(70,30);
$bg = imagecolorallocate($image,255,255,255);
$text = imagecolorallocate($image,0,0,0);
imagestring($image, 5, 10, 5, $captcha, $text);
header("Content-type: image/png");
imagepng($image);
?>
========================================================= */
//index.php
session_start();
$message = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['captcha'] == $_SESSION['captcha']) {
        $message = "<p style='color:green'>CAPTCHA Verified Successfully!</p>";
    } else {
        $message = "<p style='color:red'>Incorrect CAPTCHA. Try again.</p>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>CAPTCHA Demo</title>
</head>
<body>
    <h2>Enter CAPTCHA</h2>
    <?= $message ?>
    <form method="POST">
        <img src="captcha.php" alt="CAPTCHA"><br><br>
        <input type="text" name="captcha" placeholder="Enter CAPTCHA" required><br><br>
        <button type="submit">Verify</button>
    </form>
</body>
</html>
<?php
//captcha.php
session_start();

$captcha_code = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789"), 0, 6);
$_SESSION['captcha'] = $captcha_code;

$width = 150;
$height = 50;
$image = imagecreate($width, $height);

$bg_color = imagecolorallocate($image, 255, 255, 255);
$text_color = imagecolorallocate($image, 0, 0, 0);
$noise_color = imagecolorallocate($image, 100, 120, 180);

// Add random noise (dots)
for ($i = 0; $i < 100; $i++) {
    imagefilledellipse($image, mt_rand(0, $width), mt_rand(0, $height), 2, 3, $noise_color);
}

// Add random lines
for ($i = 0; $i < 5; $i++) {
    imageline($image, 0, mt_rand(0, $height), $width, mt_rand(0, $height), $noise_color);
}

// Add text
$font_size = 5;
imagestring($image, $font_size, 35, 18, $captcha_code, $text_color);

// Output image
header("Content-type: image/png");
imagepng($image);
imagedestroy($image);
?>


<?php
/*  =========================================================
5. Embedding and Displaying an Uploaded Image
Problem:
Allow users to upload an image and display it.
Outline Solution:
<?php
if(isset($_FILES['file'])) {
 move_uploaded_file($_FILES['file']['tmp_name'], "uploads/" .
$_FILES['file']['name']);
 echo "<img src='uploads/".$_FILES['file']['name']."' width='200'>";
}
?>
========================================================= */

if (!is_dir("uploads")) {
    mkdir("uploads");
}

$message = "";

if (isset($_FILES['file'])) {
    $filename = $_FILES['file']['name'];
    $tempPath = $_FILES['file']['tmp_name'];
    $fileType = strtolower(pathinfo($filename, PATHINFO_EXTENSION));


    $allowed = ['jpg', 'jpeg', 'png', 'gif'];

    if (in_array($fileType, $allowed)) {
        $targetPath = "uploads/" . $filename;

        if (move_uploaded_file($tempPath, $targetPath)) {
            $message = "<p style='color:green'>File uploaded successfully </p>";
            $uploadedImage = $targetPath;
        } else {
            $message = "<p style='color:red'>Failed to upload file </p>";
        }
    } else {
        $message = "<p style='color:red'>Only image files are allowed (JPG, PNG, GIF)</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload and Display Image</title>
</head>
<body>
    <h2>Upload Image</h2>
    <?= $message ?>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="file" accept="image/*" required><br><br>
        <button type="submit">Upload</button>
    </form>

    <?php if (!empty($uploadedImage)): ?>
        <h3>Uploaded Image:</h3>
        <img src="<?= $uploadedImage ?>" width="250" style="border:1px solid #000;">
    <?php endif; ?>
</body>
</html>
<?php
/*  =========================================================
6. Create and Draw Graphics Dynamically
Problem:
Draw simple shapes using the GD library.
Outline Solution:
<?php
$img = imagecreate(200,200);
$bg = imagecolorallocate($img,255,255,255);
$red = imagecolorallocate($img,255,0,0);
imagerectangle($img,50,50,150,150,$red);
header("Content-type:image/png");
imagepng($img);
?>
========================================================= */

$img = imagecreate(400, 300);

$background = imagecolorallocate($img, 240, 240, 240);
$red = imagecolorallocate($img, 255, 0, 0);
$blue = imagecolorallocate($img, 0, 0, 255);
$green = imagecolorallocate($img, 0, 150, 0);
$black = imagecolorallocate($img, 0, 0, 0);


imagerectangle($img, 50, 50, 150, 150, $red);             
imagefilledrectangle($img, 200, 50, 350, 150, $blue);    
imageellipse($img, 100, 225, 80, 80, $black);            
imagefilledellipse($img, 275, 225, 120, 80, $green);      

imagestring($img, 5, 120, 10, "GD Library Shapes", $black);

header("Content-Type: image/png");
imagepng($img);
imagedestroy($img);
?>

<?php
/*  =========================================================
7. Add Text on an Image
Problem:
Add a watermark or text overlay on an existing image.
Outline Solution:
<?php
$img = imagecreatefromjpeg("sample.jpg");
$color = imagecolorallocate($img,0,0,255);
imagestring($img,5,10,10,"VIT Chennai",$color);
header("Content-type:image/jpeg");
imagejpeg($img);
?>
========================================================= */

// Path to the image (place sample.jpg in the same folder as this file)

$img = imagecreatefromjpeg("sample.jpg");
$color = imagecolorallocate($img, 0, 0, 255);
imagestring($img, 5, 10, 10, "VIT Chennai", $color);
header("Content-type:image/jpeg");
imagejpeg($img);
imagedestroy($img);
?>


<?php
/* =========================================================
8. Image Resizing and Scaling
Problem:
Resize an uploaded image while maintaining aspect ratio.
Outline Solution:
<?php
$img = imagecreatefromjpeg("sample.jpg");
$color = imagecolorallocate($img,0,0,255);
imagestring($img,5,10,10,"VIT Chennai",$color);
header("Content-type:image/jpeg");
imagejpeg($img);
?>
========================================================= */ 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $srcPath = $_FILES['image']['tmp_name'];
        $src = imagecreatefromjpeg($srcPath);

        $newWidth = isset($_POST['width']) ? intval($_POST['width']) : imagesx($src);
        $newHeight = isset($_POST['height']) ? intval($_POST['height']) : imagesy($src);
        $keepAspect = isset($_POST['aspect']) ? true : false;

        if ($keepAspect) {
            $ratio = imagesx($src) / imagesy($src);
            $newHeight = intval($newWidth / $ratio);
        }

        $new = imagescale($src, $newWidth, $newHeight);
        header("Content-Type: image/jpeg");
        imagejpeg($new);
        imagedestroy($src);
        imagedestroy($new);
        exit;
    } else {
        echo "Please upload a valid JPEG image.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Image Resize Demo</title>
</head>
<body>
    <h2>Upload an image to resize</h2>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="image" accept="image/jpeg" required><br><br>
        Width: <input type="number" name="width" value="300" required><br>
        Height: <input type="number" name="height" value="300"><br>
        <label>
            <input type="checkbox" name="aspect" checked> Keep Aspect Ratio
        </label><br><br>
        <button type="submit">Resize Image</button>
    </form>
</body>
</html>

<?php
/* =========================================================
9. Color Palette Manipulation
Problem:
Generate random colored shapes using GD functions.
Outline Solution:
<?php
$src = imagecreatefromjpeg("image.jpg");
$new = imagescale($src, 200, 150);
header("Content-type:image/jpeg");
imagejpeg($new);
?>
========================================================= */

function circlesOverlap($x1, $y1, $r1, $x2, $y2, $r2){
    $distance = sqrt(($x1 - $x2)**2 + ($y1 - $y2)**2);
    return $distance < ($r1 + $r2);
}

if(isset($_GET['generate'])){
    $img = imagecreate(400, 400);
    $bg = imagecolorallocate($img, 255, 255, 255);

    $circles = [];
    $maxCircles = 10;
    $radius = 30;

    for($i = 0; $i < $maxCircles; $i++){
        $tries = 0;
        do {
            $x = rand($radius, 400 - $radius);
            $y = rand($radius, 400 - $radius);
            $overlap = false;
            foreach($circles as $c){
                if(circlesOverlap($x, $y, $radius, $c['x'], $c['y'], $radius)){
                    $overlap = true;
                    break;
                }
            }
            $tries++;
        } while($overlap && $tries < 100);

        if(!$overlap){
            $color = imagecolorallocate($img, rand(0,255), rand(0,255), rand(0,255));
            imagefilledellipse($img, $x, $y, $radius*2, $radius*2, $color);
            $circles[] = ['x'=>$x, 'y'=>$y];
        }
    }

    header("Content-Type: image/png");
    imagepng($img);
    imagedestroy($img);
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Circles</title>
</head>
<body>
    <h2>NRandom Circles</h2>
    <form method="GET">
        <button type="submit" name="generate" value="1">Generate Circles</button>
    </form>
    <?php if(isset($_GET['generate'])): ?>
        <br>
        <img src="?generate=1" alt="Random Circles">
    <?php endif; ?>
</body>
</html>

<?php
/* =========================================================
10. Send an Email with an Attachment
Problem:
Send an email using PHP’s mail() function.
Outline Solution:
<?php
$to = "receiver@example.com";
$subject = "Test Email";
$message = "This is a test email from PHP.";
$headers = "From: admin@example.com";
if(mail($to, $subject, $message, $headers))
 echo "Mail sent successfully.";
else
 echo "Mail failed.";
?>
========================================================= */

$status = '';

if(isset($_POST['send'])){
    $from = htmlspecialchars($_POST['from']);
    $to = htmlspecialchars($_POST['to']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    $attachment = isset($_FILES['attachment']) ? $_FILES['attachment']['name'] : 'No attachment';

    $status = "Mail sent successfully!<br>
               From: $from<br>
               To: $to<br>
               Subject: $subject<br>
               Message: $message<br>
               Attachment: $attachment";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Email Send</title>
</head>
<body>
    <h2>Send Email</h2>
    <?php if($status) echo "<p>$status</p>"; ?>
    <form method="POST" enctype="multipart/form-data">
        From: <input type="email" name="from" required><br><br>
        To: <input type="email" name="to" required><br><br>
        Subject: <input type="text" name="subject" required><br><br>
        Message:<br>
        <textarea name="message" rows="5" cols="40" required></textarea><br><br>
        Attachment: <input type="file" name="attachment"><br><br>
        <button type="submit" name="send">Send Email</button>
    </form>
</body>
</html>

<?php
/* =========================================================
11. Generate Gradient Image
Problem:
Create a simple color gradient image using loops.
Outline Solution:
<?php
$img = imagecreate(200,200);
for($i=0;$i<200;$i++){
 $col = imagecolorallocate($img,$i,$i,255);
 imageline($img,$i,0,$i,200,$col);
}
header("Content-type:image/png");
imagepng($img);
?>
========================================================= */
if(isset($_GET['generate'])){
    $width = 200;
    $height = 200;
    $img = imagecreate($width, $height);

    for($i = 0; $i < $width; $i++){
        $col = imagecolorallocate($img, $i, $i, 255);
        imageline($img, $i, 0, $i, $height, $col);
    }

    header("Content-Type: image/png");
    imagepng($img);
    imagedestroy($img);
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gradient Image</title>
</head>
<body>
    <h2>Gradient Image</h2>
    <form method="GET">
        <button type="submit" name="generate" value="1">Generate Gradient</button>
    </form>
    <?php if(isset($_GET['generate'])): ?>
        <br>
        <img src="?generate=1" alt="Gradient Image">
    <?php endif; ?>
</body>
</html>

<?php
/* =========================================================
12. Dynamic Image Banner with Text
Problem:
Display a dynamic banner with timestamp text.
Outline Solution:
<?php
$img = imagecreate(400,60);
$bg = imagecolorallocate($img,240,240,240);
$black = imagecolorallocate($img,0,0,0);
$text = "Generated on " . date("H:i:s");
imagestring($img,5,10,20,$text,$black);
header("Content-type:image/png");
imagepng($img);
?>
 ========================================================= */

if(isset($_GET['generate'])){
    $width = 400;
    $height = 60;
    $img = imagecreate($width, $height);
    $bg = imagecolorallocate($img, 240, 240, 240);
    $black = imagecolorallocate($img, 0, 0, 0);
    $text = "Generated on " . date("H:i:s");
    imagestring($img, 5, 10, 20, $text, $black);
    header("Content-Type: image/png");
    imagepng($img);
    imagedestroy($img);
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dynamic Image Banner</title>
</head>
<body>
    <h2>Dynamic Banner</h2>
    <form method="GET">
        <button type="submit" name="generate" value="1">Generate Banner</button>
    </form>
    <?php if(isset($_GET['generate'])): ?>
        <br>
        <img src="?generate=1" alt="Dynamic Banner">
    <?php endif; ?>
</body>
</html>

<?php
/* =========================================================
13. Personalized Greeting Using Sessions
Problem:
Greet users based on session data.
Outline Solution:
<?php
session_start();
if(!isset($_SESSION['name'])) $_SESSION['name'] = "Student";
echo "Hello, ".$_SESSION['name']."! Welcome to the PHP lab.";
?>
========================================================= */

session_start();

if(isset($_POST['name'])){
    $_SESSION['name'] = $_POST['name'];
}

$name = isset($_SESSION['name']) ? $_SESSION['name'] : "Student";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Personalized Greeting</title>
</head>
<body>
    <h2>Personalized Greeting</h2>
    <p>Hello, <?php echo htmlspecialchars($name); ?>! Welcome to the PHP </p>
    
    <form method="POST">
        Enter your name: <input type="text" name="name" required>
        <button type="submit">Set Name</button>
    </form>
    
    <form method="POST">
        <button type="submit" name="reset" value="1">Reset Name</button>
    </form>

    <?php
    if(isset($_POST['reset'])){
        unset($_SESSION['name']);
        header("Location: ".$_SERVER['PHP_SELF']);
        exit;
    }
    ?>
</body>
</html>
<?php
/* =========================================================
14. Simple Contact Form with mail()
Problem:
Send a message through email using PHP mail().
Outline Solution:
<?php
$to="example@domain.com";
$sub="Contact Form Message";
$msg="This is a test message.";
$headers="From: user@domain.com";
mail($to,$sub,$msg,$headers);
echo "Mail Sent!";
?>
========================================================= */

$status = '';
if(isset($_POST['send'])){
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $status = "Mail Sent Successfully!<br><br>
               From: $email<br>
               Message:<br>
               <pre>$message</pre>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>
    <h2>Contact Us</h2>
    <?php if($status) echo "<p>$status</p>"; ?>
    <form method="POST">
        Your Email: <input type="email" name="email" required><br><br>
        Message:<br>
        <textarea name="message" rows="5" cols="40" required></textarea><br><br>
        <button type="submit" name="send">Send Message</button>
    </form>
</body>
</html>

<?php
/* =========================================================
15. Feedback Form with Session and Email
Problem:
Collect feedback and email it using session-stored name.
Outline Solution:
<?php
session_start();
$name = $_SESSION['user'] ?? "Guest";
$msg = "Feedback from $name: ".$_POST['feedback'];
mail("admin@vit.ac.in","Student Feedback",$msg,"From: noreply@vit.ac.in");
echo "Thank you, $name. Feedback sent!";
?>
========================================================= */

session_start();

if(!isset($_SESSION['user'])){
    $_SESSION['user'] = "Student";
}

$name = $_SESSION['user'];
$status = '';

if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['feedback'])){
    $feedback = htmlspecialchars($_POST['feedback']);
    $status = "Thank you, $name. Feedback sent successfully!<br><br>
               Feedback Received:<br>
               <pre>$feedback</pre>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Feedback Form</title>
</head>
<body>
    <h2>Student Feedback</h2>
    <p>Hello, <?php echo htmlspecialchars($name); ?>! Please submit your feedback below.</p>
    <?php if($status) echo "<p>$status</p>"; ?>
    <form method="POST">
        <textarea name="feedback" rows="5" cols="50" placeholder="Enter your feedback here..." required></textarea><br><br>
        <button type="submit">Submit Feedback</button>
    </form>
</body>
</html>
