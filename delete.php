<?php
require_once ("conekt.php");

$id=$_REQUEST['id'];

$del=mysqli_query($conn,"DELETE FROM garaget WHERE id='$id'");
if($del)
{
echo"Record Successfully Deleted!!";
}
else
{
echo"Record Not Deleted!!";
}

echo "<a href='new1.php'> Go back to records list</a>";
?>


