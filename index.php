<?php
include 'db_connect.php';
$sql = "SELECT * FROM Name"; 
$result = $conn->query($sql);

$max_persons = 5;
$count_sql = "SELECT COUNT(*) AS total FROM Name";
$count_result = $conn->query($count_sql);
$row_count = $count_result->fetch_assoc();
$total_records = $row_count['total'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css\bootstrap.min.css">
  <title>Website</title>
</head>
<body>
  <div class="container">
  
<?php
if ($total_records < $max_persons) {
            
            echo '<button class="btn btn-success">';
            echo '<a href="add.php" style="color: white; text-decoration: none;">Add Name</a>';
            echo '</button>';
        } else {
            echo '<p class="text-danger">Room is full</p>';
        }
      

if ($result->num_rows > 0) {
  echo "<h3>{$total_records}/{$max_persons}</h3>";
    echo "<table class='table table-bordered'>";
   
    echo "<tr><th>ID</th><th>Name</th><th>Action</th></tr>"; 

 
    while ($row = $result->fetch_assoc()) {
      echo "<tr>";
        echo "<td>" . $row["id"] . "</td>"; 
        echo "<td>" . $row["Name"] . "</td>"; 
        echo "<td><a href='delete_form.php?id=" . $row["id"] . "' class='btn btn-danger'>Delete</a></td>"; 
        echo "</tr>";
    }

    echo "</table>";
} else {
    //
}

$conn->close();
?>

  </div>
</body>
</html>