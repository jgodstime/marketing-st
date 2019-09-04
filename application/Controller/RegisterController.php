<?php
namespace Mini\Controller;

use Mini\Core\View;
use Mini\Model\Register;


class RegisterController
{
    var $View;
    public $msg;
   
    function __construct() {
        $this->View = new View();
        $this->msg = new \Mini\Libs\FlashMessages();
    }


    public function index()
    {
        if(isset($_POST['registerBtn'])){
            $regDate = $_POST['regDate'];
            $locationOfMarketing = $_POST['locationOfMarketing'];
            $nameOfItem = $_POST['nameOfItem'];
            $qtyUsed = ($_POST['qtyUsed']);
            $unitPrice = ($_POST['unitPrice']);
            $costOfItemMarketed = $_POST['costOfItemMarketed']; //
            $quantityMarketed = $_POST['quantityMarketed'];
            $incomeFromMarketing = $_POST['incomeFromMarketing']; //
            $costOfLosses = ($_POST['costOfLosses']);

            $totalIncome = ($_POST['totalIncome']); //

            $namesOfMarketers = ($_POST['namesOfMarketers']);


            if(empty($locationOfMarketing)){
                $this->msg->error('Location of marketing is required.');
            }if(empty($nameOfItem)){
                $this->msg->error('Name of item is required.');
            }if(empty($qtyUsed)){
                $this->msg->error('Quantity used for marketing is required.');
            }if(empty($quantityMarketed)){
                $this->msg->error('Quantity marketed is required.');
            }if($quantityMarketed > $qtyUsed){
                $this->msg->error('Quantity marketed cannot be greater than quantity used.');
            }
            if ($this->msg->hasErrors()){
                header('location:' . $_SERVER['HTTP_REFERER']);
                die();
            }else{

                //calc
                // $costOfItemMarketed = $qtyUsed * $unitPrice;
                // $incomeFromMarketing = $quantityMarketed * $unitPrice;
                // $totalIncome = $incomeFromMarketing - $costOfLosses;

                
                (new Register())->register($locationOfMarketing,$nameOfItem,$qtyUsed,$unitPrice,$costOfItemMarketed,$quantityMarketed,$incomeFromMarketing,$costOfLosses,$totalIncome,$namesOfMarketers,$regDate);
            }

        }
            // html data
            $data["title"] = "Register"; /* for <title></title> inside header.php in this case */
            // load views
            $this->View->render('home/register', $data);
    }



    public function report()
    {
        $data["title"] = "Report"; /* for <title></title> inside header.php in this case */
            // load views
            $this->View->render('home/record', $data);
    }
   
}
