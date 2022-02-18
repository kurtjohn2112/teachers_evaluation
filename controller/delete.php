<?php 
include 'functions.php';
if(isset($_GET['department_id']))
{
 delete_item('departments','department_id',$_GET['department_id']);
}
?>