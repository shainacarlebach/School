<?php

require_once "controllers.php";
require_once 'C:/xampp/htdocs/School/back/models/courseModels.php';
require_once "C:/xampp/htdocs/School/back/common/bl.php";

class CourseController {
    private $tableName='school_courses';

    function Read() 
    {
        $bl = new BL();
        $allCourses = $bl->getAllCourses();
        return $allCourses;
    }
    function Create($phone){
        $bl =new BL();
        $newPhone = new PhoneModel(0, 's8 plus', 1);
        $newPhone=$bl->insertPhones($newPhone);
        return 1;
         
    }
}
?>