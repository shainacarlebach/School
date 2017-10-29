<?php
require_once'models.php';
require_once "C:/xampp/htdocs/School/back/common/dal.php";


Class AdminRole extends Model implements JsonSerializable{

private $id_administrator;
private $admin_owner;
private $admin_sales;
private $admin_manager; 

function __construct($id_administrator,$admin_owner,$admin_sales,$admin_manager) 
{
     $this->tableName =`school_adminroles`;
     $this->id_administrator=$id_administrator;
     $this->admin_owner= $admin_owner;
     $this->admin_sales= $admin_sales;
     $this->admin_manager = $admin_manager;
 }
 
public function getID()
{
    return $this->id_administrator;
}

function getOwner()
{
    return $this->admin_owner;
}
function getSales()
{
    return $this->admin_sales;
}
function getManager()
{
    return $this->admin_manager;
 }

function jsonSerialize(){
    return[
       "$id_administrator"=>$this->getID(),
       "$admin_owner"=>$this->getOwner(),
       "$admin_sales"=>$this->getSales(), 
       "$admini_manager"=>$this->getManager()
        ];
}

}
?>
