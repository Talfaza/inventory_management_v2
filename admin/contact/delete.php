<?php
include "../../database/connect.php";

$conn = (new Connection())->getConnection();

if(isset($_GET['deleteid'])){
      $id = $_GET['deleteid'];
      $query = "DELETE FROM TEST_I.CONTACT WHERE id = $id";
      $result = mysqli_query($conn,$query);
      if($result){
        header("Location: contact.php");
      }else{
        die("Error : ". mysqli_error($conn));
      }
}




?>