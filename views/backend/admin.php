<?php 

    include "header.php";
    include "nav.php";
    if(isset($_GET["page"])){
        $page = $_GET["page"];
        if($page=="dashboard"){
            include "dashboard.php";
        }
        else if($page=="add_admin"){
            include "./admins/add_admin.php";
        }
        else if($page=="admin_lists"){
            include "./admins/admin_lists.php";
        }
        else if($page=="admin_edit"){
            include "./admins/admin_edit.php";
        }
        else if($page=="add_class"){
            include "./classes/add_class.php";
        }
        else if($page=="class_list"){
            include "./classes/class_list.php";
        }
        else if($page=="edit_class"){
            include "./classes/edit_class.php";
        }
        else if($page=="add_course"){
            include "./courses/add_course.php";
        }
        else if($page=="course_list"){
            include "./courses/course_list.php";
        }
        else if($page=="edit_course"){
            include "./courses/edit_course.php";
        }
        else if($page=="add_fee"){
            include "./fees/add_fee.php";
        }
        else if($page=="edit_fee"){
            include "./fees/edit_fee.php";
        }
        else if($page=="fee_list"){
            include "./fees/fee_list.php";
        }
        else if($page=="add_post"){
            include "./posts/add_post.php";
        }
        else if($page=="edit_post"){
            include "./posts/edit_post.php";
        }
        else if($page=="post_list"){
            include "./posts/post_list.php";
        }
        else if($page=="add_student"){
            include "./students/add_student.php";
        }
        else if($page=="edit_student"){
            include "./students/edit_student.php";
        }
        else if($page=="student_list"){
            include "./students/student_list.php";
        }
        else if($page=="add_tutor"){
            include "./tutors/add_tutor.php";
        }
        else if($page=="edit_tutor"){
            include "./tutors/edit_tutor.php";
        }
        else if($page=="tutor_list"){
            include "./tutors/tutor_list.php";
        }

    }else{
        include "dashboard.php";
    }


    include "footer.php";
    
    

?>
