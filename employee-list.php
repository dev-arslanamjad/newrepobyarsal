<?php
include ("connection.php" ); 
$sql= "SELECT * FROM `employees` ORDER BY `id` DESC" ; 
$result = mysqli_query($conn ,  $sql); 
$data = [];
while ($fetch=mysqli_fetch_assoc($result)){
    $data[] = $fetch;
}
print_r(json_encode($data));
?>