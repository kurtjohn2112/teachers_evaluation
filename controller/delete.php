<?php 
include 'functions.php';
if(isset($_GET['department_id']))
{
 delete_item('departments','department_id',$_GET['department_id']);
}
if(isset($_GET['course_id']))
{
 delete_item('courses','course_id',$_GET['course_id']);
}elseif(isset($_GET['college_id'])){
    delete_item('college','college_id',$_GET['college_id']);

}elseif(isset($_GET['user_id'])){
    delete_item('faculty_users','id',$_GET['user_id']);

}
?>