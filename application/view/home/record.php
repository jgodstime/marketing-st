<?php
 $msg = new \Mini\Libs\FlashMessages();
 use Mini\Model\Register;
 $Church = (new Register);

?>

<div class="container">
    <div class="row">
        <?php
        $Church->record();
        ?>
    </div>
</div>