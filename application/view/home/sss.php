<?php
 $msg = new \Mini\Libs\FlashMessages();
 use Mini\Model\Lend;
 $msg->display();

?>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3" style="background-color:white; margin-top:10px; padding-top:20px;">
        <h3>Senior Secondary School Admission Screening </h3>
        <hr>
            <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" class="" role="form">
                <div class="col-md-6">

                    <div class="form-group">
                        <label class="" for="">Registration Date</label>
                        <input type="text" class="form-control" value="<?php echo date('d-m-y'); ?>"
                            readonly name="regDate">
                    </div>
                </div>

                <div class="col-md-6">

                    <div class="form-group">
                        <label class="" for="">Admission Year</label>
                        <input type="text" class="form-control" value="<?php echo date('Y'); ?>"
                            readonly name="admissionYear">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Registration ID</label>
                        <input type="text" name="regId" readonly class="form-control" value="<?php echo 'SSS-'.rand(40000,9000);?>"
                            placeholder="reg ID">
                    </div>
                </div>

                  <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Gender </label>

                        <select name="gender" id="inputgender" class="form-control" required="required">
                            <option value=""></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>

                    </div>
                </div>

                   <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Surname </label>
                        <input type="text" class="form-control" placeholder="Enter Surname" name="surName">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Other Name </label>
                        <input type="text" class="form-control" placeholder="Enter Other Names" name="otherName">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">English Score </label>
                        <input type="number" class="form-control" placeholder="Enter English Score " name="englishScore">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Mathematics Score </label>
                        <input type="number" class="form-control" placeholder="Enter Mathematics Score " name="mathsScore">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">General Paper Score </label>
                        <input type="number" class="form-control" placeholder="Enter General Paper Score " name="generalPaperScore">
                    </div>
                </div>
              
              
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Jss3 Certificate Exams</label>
                        <input type="checkbox" name="jsCertExam" value="Yes" class="" >
                    </div>
                </div>

        
                <div class="form-group">
                    <button type="submit" name="sssBtn" class="btn btn-primary btn-block">Submit</button>
                </div>

            </form>

        </div>

    </div>

</div>

