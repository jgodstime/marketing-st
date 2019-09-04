<?php

namespace Mini\Model;

use Mini\Core\Model;
use PDO;


class Register extends Model
{




    public function register($locationOfMarketing,$nameOfItem,$qtyUsed,$unitPrice,$costOfItemMarketed,$quantityMarketed,$incomeFromMarketing,$costOfLosses,$totalIncome,$namesOfMarketers,$regDate){
    $regDate = date("d/m/Y");
    $queryInsert = $this->db->prepare("INSERT INTO register_tbl (id,location_of_marketing,name_of_item,qty_used,unit_price,cost_of_item_marketed,qty_marketed,income_from_marketing,cost_of_losses,total_income,names_of_maketers,registration_date) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");

    $queryInsert->execute(array('',$locationOfMarketing,$nameOfItem,$qtyUsed,$unitPrice,$costOfItemMarketed,$quantityMarketed,$incomeFromMarketing,$costOfLosses,$totalIncome,$namesOfMarketers,$regDate));

        // print_r($this->db->errorInfo());

      

    if($queryInsert){
        $this->msg->success('Marketing information successfully registered. Cost of item marketed is '.$costOfItemMarketed.', Income from marketing is '.$incomeFromMarketing.', Total income is '.$totalIncome.'', $_SERVER['HTTP_REFERER']);
    }else{
        $this->msg->success('Unable to register at this time, please try again later.', $_SERVER['HTTP_REFERER']);
    }

}

public function record(){
    $query = $this->db -> prepare("SELECT * FROM register_tbl ORDER BY id DESC");
    $query->execute();
    if($query->rowCount()>0){

 
?>
<h2 class=""> Marketing Information Report</h2>
<div class="table-responsive">


    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Location of Marketing</th>
                <th>Name of Item</th>
                <th>Qty Used</th>
                <th>Unit Price</th>
                <th>Cost of Item Marketed</th>
                <th>Qty Marketed</th>
                <th>Income from Marketing</th>
                <th>Cost of Losses</th>
                <th>Total Income</th>
                <th>Names of Marketers</th>
                <th>Entry Date</th>
               
            </tr>
        </thead>
        <?php
        
        while($row = $query->fetch(PDO::FETCH_ASSOC)){ 
            ?>
        <tr>
            <td><?php echo $row['location_of_marketing'];?></td>
            <td> <?php echo $row['name_of_item'];?> </td>
            <td><?php echo $row['qty_used'];?></td>
           
            <td><?php echo $row['unit_price'] ;?> </td>
            <td><?php echo $row['cost_of_item_marketed'] ;?> </td>
            <td><?php echo $row['qty_marketed'] ;?> </td>
            <td><?php echo $row['income_from_marketing'] ;?> </td>
            <td><?php echo $row['cost_of_losses'] ;?> </td>
            <td><?php echo $row['total_income'] ;?> </td>
            <td><?php echo $row['names_of_maketers'] ;?> </td>
            <td><?php echo $row['registration_date'] ;?> </td>
            
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
