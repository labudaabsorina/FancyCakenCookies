<?php
require_once "connection.php";

if(function_exists($_GET['function'])) {
    $_GET['function']();
}

function get_product()
{
   global $connect;
   $query = $connect->query("SELECT * FROM product");
   while($row=mysqli_fetch_object($query))
   {
      $data[] =$row;
   }
   $response=array(
      'status' => 1,
      'message' =>'Success',
      'data' => $data
   );
   header('Content-Type: application/json');
   echo json_encode($response);
}   
   
function get_product_id()
{
   global $connect;
   if (!empty($_GET["id"])) {
      $id = $_GET["id"];      
   }
   $query ="SELECT * FROM product WHERE id= $id";
   $result = $connect->query($query);
   while($row = mysqli_fetch_object($result))
   {
      $data[] = $row;
   }
   if($data)
   {
      $response = array(
         'status' => 1,
         'message' =>'Success',
         'data' => $data
      );
   }else {
      $response=array(
         'status' => 0,
         'message' =>'No Data Found'
      );
   }
   header('Content-Type: application/json');
   echo json_encode($response);
}
function insert_product()
{
   global $connect;
   $check = array('id' => '', 'Name' => '', 'Price' => '', 'UOM' => '', 'Quantity' => '');
   $check_match = count(array_intersect_key($_POST, $check));
   if($check_match == count($check)){
      $result = mysqli_query($connect, "INSERT INTO product SET
      id = '$_POST[id]',
      Name = '$_POST[Name]',
      Price = '$_POST[Price]',
      UOM = '$_POST[UOM]',
      Quantity = '$_POST[Quantity]'");
      
      if($result)
      {
         $response=array(
            'status' => 1,
            'message' =>'Insert Success'
         );
      }
      else
      {
         $response=array(
            'status' => 0,
            'message' =>'Insert Failed.'
         );
      }
   }else{
      $response=array(
         'status' => 0,
         'message' =>'Wrong Parameter'
      );
   }
   header('Content-Type: application/json');
   echo json_encode($response);
}
function update_product()
{
   global $connect;
   if (!empty($_GET["id"])) {
      $id = $_GET["id"];
   }
   $check = array('id' => '', 'Name' => '', 'Price' => '', 'UOM' => '', 'Quantity' => '');
   $check_match = count(array_intersect_key($_POST, $check));
   if($check_match == count($check)){
      $result = mysqli_query($connect, "UPDATE product SET
      id = '$_POST[id]',
      Name = '$_POST[Name]',
      Price = '$_POST[Price]',
      UOM = '$_POST[UOM]',
      Quantity = '$_POST[Quantity]' WHERE id = $id");
      
      if($result)
      {
         $response=array(
            'status' => 1,
            'message' =>'Update Success'
         );
      }
      else
      {
         $response=array(
            'status' => 0,
            'message' =>'Update Failed'
         );
      }
   }else{
      $response=array(
         'status' => 0,
         'message' =>'Wrong Parameter',
         'data'=> $id
      );
   }
   header('Content-Type: application/json');
   echo json_encode($response);
}
function delete_product()
{
   global $connect;
   $id = $_GET['id'];
   $query = "DELETE FROM product WHERE id=".$id;
   if(mysqli_query($connect, $query))
   {
      $response=array(
         'status' => 1,
         'message' =>'Delete Success'
      );
   }
   else
   {
      $response=array(
         'status' => 0,
         'message' =>'Delete Fail.'
      );
   }
   header('Content-Type: application/json');
   echo json_encode($response);
}
?>