<?php
require ('core/init.php');
$admin_id= $_SESSION['id'];
$id = $_GET['edit'];
$sql = $users->editmember($id,$admin_id);
//$sql=mysql_query("INSERT INTO member VALUES ('$admin_id','4','$member_name','$age','$rollno','$dept','$position')");
if($sql)
{
echo "Record edited successfully";
}
else
{
echo "something went wrong";
}
?>
