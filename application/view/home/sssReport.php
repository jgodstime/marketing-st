<?php
 $msg = new \Mini\Libs\FlashMessages();
 use Mini\Model\School;

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <?php (new School)->sssReport();?>
                </div>
            </div>
        </div>

        
    </div>
</div>

