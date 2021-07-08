<?php

include '../controls/Database.php';

$db = new Database();

$data = $db->fetch_std();

?>
<option disabled selected value="">Select Doctor Category</option>
<?php

if($data)
{

foreach($data as $value)
  {
?>            
    <option><?php echo $value['specialization'] ?></option>
<?php 
  }
}
?>