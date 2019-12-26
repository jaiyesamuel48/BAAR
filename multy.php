<!DOCTYPE html>
<html>
<head>
<title>Multi</title>
</head>
<body>
 <form action="multy.php" method="post">
    <input type="checkbox" name="check1[]" value="Coke">
    <input type="checkbox" name="check1[]" value="Fanta">
    <input type="checkbox" name="check1[]" value="Malt">
    <input type="checkbox" name="check1[]" value="Faro">
    <input type="checkbox" name="check1[]" value="Sprit">
	<input type="checkbox" name="check1[]" value="Kunu">
    <input type="checkbox" name="check1[]" value="Zobu">
    <input type="checkbox" name="check1[]" value="value 8">
    <input type="checkbox" name="check1[]" value="value 9">
    <input type="checkbox" name="check1[]" value="value 10">
    <input type="submit" name="bnt" value="ok">
</form>
<?php
if(isset($_POST['bnt'])){
if(!empty($_POST['check1'])) {
   foreach($_POST['check1'] as $check) {
           echo $check.", "; 
		   //echoes the value set in the HTML form for each checked checkbox.
           //so, if I were to check 1, 3, and 5 it would echo value 1, value 3, value 5.
           //in your case, it would echo whatever $row['Report ID'] is equivalent to.
  } 
}
}

$sola = array("Table", "Pencli", "Pen", "Book", "school");

echo $sola[0];
?>
</body>
</html>