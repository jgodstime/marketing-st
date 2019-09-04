<?php
 $msg = new \Mini\Libs\FlashMessages();
 use Mini\Model\Lend;
 

?>

<div class="container" id="vapp">
    <div class="row">
        <div class="col-md-6 col-md-offset-3" style="background-color:white; margin-top:10px; padding-top:20px;">
            <?php $msg->display();?>
            <h3> Marketing Information {{calcTotal}}</h3>
            <hr>
            <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" class="" role="form" enctype="multipart/form-data">
                   
                  
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="" for="">Registration Date </label>
                            <input type="text" disabled class="form-control" name="regDate" value="<?php echo date("d/m/Y")?>">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="" for="">Location of Marketing </label>
                            <input type="text" class="form-control" name="locationOfMarketing">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="" for="">Name of Item</label>
                            <input type="text" name="nameOfItem" class="form-control">
                        </div>
                    </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Quantity Used for Marketing</label>
                        <input type="number"  class="form-control" name="qtyUsed" v-model="qtyUsed">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Unit Price</label>
                        <input type="text" class="form-control" name="unitPrice" v-model="unitPrice">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Cost of Item to be Marketed</label>
                        <input type="text" class="form-control" name="costOfItemMarketed" v-model="costOfItemMarketed">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Quantity Marketed </label>
                        
                        <input type="number" class="form-control" name="quantityMarketed" v-model="quantityMarketed">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Income From Marketing</label>
                        <input type="text" class="form-control" name="incomeFromMarketing" v-model="incomeFromMarketing">
                    </div>
                </div>
               

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Cost of Losses</label>
                        <input type="number" name="costOfLosses" value="0" v-model="costOfLosses" class="form-control">
                    </div>
                </div>
              
               


                  <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Total Income</label>
                        <input type="text" name="totalIncome" v-model="totalIncome" value="{{calcTotal}}" class="form-control">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label class="" for="">Names of Marketers</label>                        
                        <textarea name="namesOfMarketers" class="form-control"  required="required"></textarea>
                        
                    </div>
                </div>


                <div class="form-group">
                    <button type="submit" name="registerBtn" class="btn btn-primary btn-block">Submit</button>
                </div>

            </form>

        </div>

    </div>

</div>


