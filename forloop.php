<!DOCTYPE html>
<html>
<body>

<?php
echo "<table border = '1'>";
for ($x = 1; $x <= 10; $x++) {
  echo "<tr>";
  echo "<td> $x </td>";
  $y = $x * $x;
  echo "<td> $y  </td>";
  $z = $y * $x;
  echo "<td> $z </td>";
  echo "</tr>";
}
echo "<table>"
?>

</body>
</html>
