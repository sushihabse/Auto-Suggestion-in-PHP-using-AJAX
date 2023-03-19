<?php
include'conn.php';
// Create connection
$sql = "SELECT * from country WHERE countryName LIKE '%".$_POST['shihab']."%'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
           
          echo "<option val='".$row['id']."'>".$row['countryName'].""."</option>";
    };
}else{
    echo "Data not found";
}

?>