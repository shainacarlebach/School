<?php
require_once'models.php';
require_once "C:/xampp/htdocs/School/back/common/dal.php";


Class CourseModel extends Model implements JsonSerializable{

private $course_id;
private $course_name;
private $course_description;
private $course_image;

function __construct($course_id, $course_name,$course_description,$course_image) 
{
   $this->tableName =`school_courses`;
   $this->course_id= $course_id;
   $this->course_name=$course_name;
   $this->course_description= $course_description;
   $this->course_image = $course_image; 
}
 
public function getID()
{
    return $this->course_id;
}

function getName()
{
    return $this->course_name;
}
function getDescription()
{
    return $this->course_description;
}
function getImage()
{
    return $this->course_image;
 }

function jsonSerialize(){
    return[
       "$course_id"=>$this->getID(),
       "$course_name"=>$this->getName(),
       "$course_description"=>$this->getDescription(), 
       "$course_image"=>$this->getImage()
              ];
}

}
?>
