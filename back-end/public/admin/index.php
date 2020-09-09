<?php 
require_once('../../resources/config.php');
include("user_auth.php");
include(TEMPLATE_BACK . DS . "head.php");
?>

<?php include(TEMPLATE_BACK . DS . "nav.php") ?>
<?php include(TEMPLATE_BACK . DS . "ui_settings.php") ?>

<div class="app-main">
    <?php include(TEMPLATE_BACK . DS . "sidebar.php") ?>
    <div class="app-main__outer">

        <?php 
        $access_admin = 1;
        $access_editor = 2;
        $access_viewer = 3;
        if($_SERVER['REQUEST_URI'] == "/admin/" || $_SERVER['REQUEST_URI'] == "/admin/index.php?loginSuccess" || $_SERVER['REQUEST_URI'] == "/admin/index.php"){
            include(TEMPLATE_BACK . DS . "dashboard.php") ;
        }

       

        
       
    
        // Testimonials requests
        if(isset($_GET['create_testimonials'])){
            include(TEMPLATE_BACK . DS . "testimonials/create_testimonials.php");
        }
        if(isset($_GET['manage_testimonials'])){
            include(TEMPLATE_BACK . DS . "testimonials/manage_testimonials.php");
        }
        if(isset($_GET['edit_testimonials'])){
            include(TEMPLATE_BACK . DS . "testimonials/edit_testimonials.php");
        }
        // projects requests
        if(isset($_GET['create_projects'])){
            include(TEMPLATE_BACK . DS . "projects/create_projects.php");
        }
        if(isset($_GET['manage_projects'])){
            include(TEMPLATE_BACK . DS . "projects/manage_projects.php");
        }
        if(isset($_GET['edit_projects'])){
            include(TEMPLATE_BACK . DS . "projects/edit_projects.php");
        }
      
     
        // Users requests
        if(isset($_GET['change_pass'])){
            include(TEMPLATE_BACK . DS . "users/change_password.php");
        }
        

?>

        <?php include( TEMPLATE_BACK . DS . "footer.php" )?>