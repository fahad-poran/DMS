<?php include "../controls/Database.php" ?>
<?php
session_start();
$db = new Database();
$currentUser = $_SESSION['id'];
$user = $_POST['uname'];
// $data = $db->ajaxSearchSingleRecord("bookappointment",$user);
$sql = "SELECT b.id,p.username,p.gender,b.date,b.day,b.reason,b.status,b.comment,b.uid FROM bookappoint b INNER JOIN patients p ON b.uid = p.id WHERE b.d_id='$currentUser' AND p.username LIKE '%$user%'";
$result = $db->connection->query($sql);
if($result->num_rows>0)
{


$sno=1;

foreach($result as $value)
              {
                  if($value['status']=='Approved'||$value['status']=='Done')
                  {
?>            
              <tr>
              <td><?php echo $sno++ ?></td>
              <td><a href="patient-info.php?patientId=<?php echo $value['uid'];?>" class="btn"><?php echo $value['username'] ?></a></td>
              
                <td><?php echo $value['gender'] ?></td>
                <!-- <td><?php echo $value['date'] ?></td> -->
                <td><?php echo $value['reason'] ?></td>
                <td><?php echo $value['comment'] ?></td>
                <?php
                if($value['status']=='Approved')
                { ?>
                <td class="status-1"><?php echo $value['status'] ?></td>
               
               <?php } 
               else{?>
                <td class="status-2"><?php echo $value['status'] ?></td>
                
                <?php } ?>
                <td>
                <form action="" method="post">
                <?php
                $date = date("F");
          $day = date("l");
          ?>
                <input type="hidden" name="id" value="<?php echo $value['id'];?>">
                <input type="hidden" name="day" value="<?php echo $day;?>">
                <input type="hidden" style="border: 0;" name="date" value="<?php echo $date;?>">
                <?php
                  if($value['status']=='Approved'){
                    print '<button type="submit" name="done" class="approve btn-update btn-big">Visited</button>';}
                    else{
                      print '<h4 style="color:green">Fees Added ✔</h4>';
                    }?>
                </td>
                </form>
                <td>
                <?php
                  if($value['status']=='Done'){
                    print '';}
                    else{
                      print '';
                    }?>
                
                </td>
              </tr>
              <?php 
                }
            }
}
else{
  ?>
  <td colspan="8" class="no-record">No records found</td>
<?php } ?>
