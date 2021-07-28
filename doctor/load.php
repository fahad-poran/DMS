<?php include '../controls/Database.php'; ?>
<?php
    session_start();
    $db = new Database();
    $currentUser = $_SESSION['id'];
    $data=$db->displayApproved($currentUser);

    $sno=1;
//$output="";
if($data)
{

foreach($data as $value)
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
                <td>
                  <?php
                    if($value['status']=='Approved'){
                      print '<a class="btn-delete btn-big disabled-link">Delete</a>';}
                else{
                  // $_SESSION['id'] = $value['id'];
                  // echo $_SESSION['id'];
                  // print '<a href="echo.php?deleteid='. $value['id'].' " class="delete btn-delete btn-big">Delete</a>';

                   echo '<a onclick="return confirm(`Are You Sure Want to delete?`)" href="../patient/delete.php?deleteid='. $value['id'].' " class="delete btn-delete btn-big">Delete</a>';
                  } ?></td>

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


    