<?php

// Get username, password from database
include 'includes/config.php';
// Load Smarty library
require 'libs/Smarty.class.php';
// Initialize
include 'includes/bootstrap.php';
// Make database connection
include 'includes/database.php';
include 'includes/func.php';

// Assign value of page title to the smarty variable 'title', usually the value comes from a database
$templateParser->assign('schoolname', 'Me First And The Gimme Gimmes');

$action= isset($_GET['action'])?$_GET['action']:'home';

switch ($action) {
case 'admin';
    $cms_action = isset($_GET['cms_action'])?$_GET['cms_action']:'show';
    $submit_update = isset($_POST['submit_update'])? 1:0;
    $cms_action = $submit_update?'save':$cms_action;
    switch($cms_action){
        case 'show':
            include ('model/select_all_items.php');
            $templateParser->assign('result',$result);
            $templateParser->display('cms_show.tpl');
    
            break;
        case 'add':
            include('model/add_items.php');
            break;
        case 'save':
            $id = $_GET['id'];
            //call to save item : UPDATE
            include ('model/edit_items.php');
            //Go to admin view
            
        break;
        case 'delete':
            $id = $_GET['id'];
            print $id;
            include('model/delete_items.php');
            break;  
    
        case 'edit':
         $id = isset($_GET['id'])?$_GET['id']:0;
         include ('model/select_oneitem.php');
          $templateParser->assign('result',$result);
             $templateParser->display('edit.tpl');

            
         break;
        }
    break;
}