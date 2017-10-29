<?php
require_once'models.php';
require_once "C:/xampp/htdocs/School/back/common/dal.php";


Class StudentModel extends Model implements JsonSerializable{

private $student_id;
private $student_name;
private $student_email;
private $student_phone;
private $student_image;

function __construct($student_id, $student_name, $student_phone,$student_email,$student_image) 
{
   $this->tableName =`school_students`;
   $this->student_id= $student_id;
   $this->student_name=$student_name;
   $this->student_phone=$student_phone;
   $this->student_email=$student_email;
   $this->student_image= $student_image;
}
 
public function getID()
{
    return $this->student_id;
}

function getName()
{
    return $this->student_name;
}

function getPhone()
{
    return $this->student_phone;
}

function getEmail()
{
    return $this->student_email;
}
function getImage()
{
    return $this->student_image;
 }

function jsonSerialize(){
    return[
       "$student_id"=>$this->getID(),
       "$student_name"=>$this->getName(),
       "$student_phone"=>$this->getPhone(),
       "$student_email"=>$this->getEmail(), 
       "$course_image"=>$this->getImage()
              ];
}

}
?>