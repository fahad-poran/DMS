<?php

include '../controls/Database.php';

$db = new Database();

$data = $db->fetch_res();
?>

<option disabled selected value="">Select</option>
<?php
if($data)
{

foreach($data as $value)
  {
?>              
  <option><?php echo $value['gender'] ?></option>
<?php 
  }
}
?>