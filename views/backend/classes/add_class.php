<div class="my-5">
<?php 
    if(isset($_SESSION['expire'])){
                $diff = time() - $_SESSION['expire'];
                if($diff > 2){
                    unset($_SESSION['status']);
                    unset($_SESSION['expire']);
                }
            }
            ?>
                <?php if(isset($_SESSION['status'])){ ?>   
                    <div class="alert alert-success alert-dismissible fade show" role="alert">

                    <?php echo $_SESSION['status'] ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php }?>

    <h1 class="text-center my-5 ">Add Class</h1>
    <form action="../../controllers/admin_controller.php" method="post">
        <div class="row ">
            <div class="col-8 offset-2">
                <div class="form-floating mb-3 mx-5">
                <input type="text" class="form-control" id="class_type" name="class_type" placeholder="Enter your name">
                <label for="class_type">Class Type : </label>
                <?php
                                    if(isset($_SESSION['class_type'])){ ?>
                                        <p class="text-danger">
                                            <?php 
                                            echo $_SESSION['class_type'];
                                            ?>
                                        </p>
                                    <?php 
                                    }
                                ?>
            </div>
            
            <input type="hidden" name="action" value="add">
            <button class="btn btn-success mx-5 " type="submit">Submit</button>
            </div>
        
        </div>
    </form>
</div>
