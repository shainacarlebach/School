<?php
require_once'models.php';
require_once "C:/xampp/htdocs/School/back/common/dal.php";


Class AdminModel extends Model implements JsonSerializable{

private $administrator_id;
private $administrator_name;
private $administrator_role;
private $administrator_phone;
private $administrator_email; 


function __construct($administrator_id, $administrator_name, $administrator_role, $administrator_phone,$administrator_email) 
{
 
     $this->tableName =`school_administrator`;
     $this->administrator_id=$administrator_id;
     $this->administrator_name= $administrator_name;
     $this->administrator_role= $administrator_role;
     $this->administrator_phone = $administrator_phone;
     $this->administrator_email = $administrator_email; 
}
 
public function getID()
{
    return $this->administrator_id;
}

function getName()
{
    return $this->administrator_name;
}
function getRole()
{
    return $this->administrator_role;
}
function getPhone()
{
    return $this->administrator_phone;
 }

function getEmail()
{
  return  $this->administrator_email;
} 


function jsonSerialize(){
    return[
       "$administrator_id"=>$this->getID(),
       "$administrator_name"=>$this->getName(),
       "$administrator_role"=>$this->getRole(), 
       "$administrator_phone"=>$this->getPhone(),
       "$administrator_email"=>$this->getEmail()
         ];
}

}
?>
