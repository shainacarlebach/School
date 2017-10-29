<?php

require_once "controllers.php";
require_once 'C:/xampp/htdocs/School/back/models/studentModels.php';
require_once "C:/xampp/htdocs/School/back/common/bl.php";

class StudentController {
    private $tableName='school_students';

    function Read() 
    {
        $bl = new BL();
        $allStudents = $bl->getAllStudents();
        return $allStudents;
    }
    function Create($phone){
        $bl =new BL();
        $newPhone = new PhoneModel(0, 's8 plus', 1);
        $newPhone=$bl->insertPhones($newPhone);
        return 1;
         
    }
}
?>