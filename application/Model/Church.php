<?php

/**
 * Class Songs
 * This is a demo Model class.
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */

namespace Mini\Model;

use Mini\Core\Model;
use PDO;


class Church extends Model
{

    public function getStdInfo($id){
        $query = $this->db -> prepare("SELECT * FROM std_tbl WHERE id = ? LIMIT 1");
        $query -> execute(array($id));
        $result = $query->fetch();
        return $result;
    }

    public function checkRegNumber($regNumber){
        $query = $this->db -> prepare("SELECT regnumber FROM std_tbl WHERE regnumber = ? LIMIT 1");
        $query -> execute(array($regNumber));
        if($query->rowCount()>0){
            return true;
        }else{
            return false;
        }
    }






   

    

    public function meetingRecord(){
        $query = $this->db -> prepare("SELECT * FROM  meeting_tbl ORDER BY id DESC");
        $query->execute();
        if($query->rowCount()>0){
    
     
    ?>
    <h2 class=""> Meeting Report</h2>
    <div class="table-responsive">
    
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>Meeting Date</th>
                    <th>Meeting Type</th>
                    <th>Minister In Charge</th>
                    <th>Srtart Time</th>
                    <th>End Time</th>
                    <th>Offering</th>
                    <th>Tithe</th>
                    <th>Minute Of Meeting</th>
                    <th>Male Attendace</th>
                    <th>Female Attendace</th>
                    <th>Children Attendace</th>
                    <th>Total  Attendace</th> 
                </tr>
            </thead>
            <?php
            
            while($row = $query->fetch(PDO::FETCH_ASSOC)){ 

                ?>
    
            <tr>
                <td><?php echo $row['meetingdate'];?></td>
                <td> <?php echo $row['meetingtype'];?> </td>
                <td><?php echo $row['ministerincharge'];?></td>
               
                <td><?php echo $row['starttime'] ;?> </td>
                <td><?php echo $row['endtime'] ;?> </td>
                <td><?php echo $row['offering'] ;?> </td>
                <td><?php echo $row['tithe'] ;?> </td>
                <td><?php echo $row['minutesofmeeting'] ;?> </td>
                <td><?php echo $row['maleattendance'] ;?> </td>
                <td><?php echo $row['femaleattendance'] ;?> </td>
                <td><?php echo $row['childrenattendance'] ;?> </td>
                <td><?php echo $row['totalattendance'] ;?> </td>    
            </tr>
    
            <?php
             }    
            ?>
        </table>
    </div>
    <?php
        }else{
            echo '<div>
                <a class="list-group-item">No Record Found.</a>
            </div>';	
        }			
    
    }
      




  


    
    
    
    


}


