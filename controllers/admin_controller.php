<?php 
    session_start();
    include "../app/dbconnect.php";
    include "../app/Admin.php";
    $db = new db();
    $connection = $db->connect();
    $admin = new admin($connection);

    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        
        if($name=='' | $email=='' | $password=='' | $phone==''){
            if($name==''){
                $_SESSION['name']='Name must not be empty';
            }
            if($email==''){
                $_SESSION['email']='Email must not be empty';
            }
            if($password==''){
                $_SESSION['password']='Password must not be empty';
            }
            if($phone==''){
                $_SESSION['phone']='Phone must not be empty';
            }
            header("location: ".$_SERVER['HTTP_REFERER']);

        }else{
            unset($_SESSION['name']);
            unset($_SESSION['email']);
            unset($_SESSION['password']);
            unset($_SESSION['phone']);

            if($_POST['action']=='add'){
                $status=$admin->create($name,$email,$password,$phone);
                if($status){
                    $_SESSION['status']='Admin created successfully';
                    $_SESSION['expire']=time();
                    
                }
                // header("location: ".$_SERVER['HTTP_REFERER']);
                header("location: ../views/backend/admin.php?page=admin_lists");
            }
            else if($_POST['action']=='update'){
                $id=$_POST['id'];
                $status=$admin->update($id,$name,$email,$password,$phone);
                if($status){
                    $_SESSION['status']='Admin updated successfully';
                    $_SESSION['expire']=time();
                    
                }
                // header("location: ".$_SERVER['HTTP_REFERER']);
                header("location: ../views/backend/admin.php?page=admin_lists");
            }
        }


    }
    if($_GET['action']=='delete'){
        $id=$_GET['id'];
        $status=$admin->delete($id);
        if($status){
            $_SESSION['status']='Admin deleted successfully';
            $_SESSION['expire']=time();

        }
        header("location: ../views/backend/admin.php?page=admin_lists");
    }


?>