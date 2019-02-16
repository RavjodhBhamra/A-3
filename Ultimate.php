<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  
<?php
// define variables and set to empty values
$name = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["fname"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
echo "<h2>Your Input: + $name</h2>";
echo $name;
?>

</body>
</html>