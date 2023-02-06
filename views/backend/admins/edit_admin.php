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

    <h1 class="text-center my-5 ">Edit Admin</h1>
    <form action="../../controllers/admin_controller.php" method="post">
        <div class="row ">
            <div class="col-8 offset-2">
                <div class="form-floating mb-3 mx-5">
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $adminDB['name']; ?>">
                <label for="name">Name : </label>
                <?php
                                    if(isset($_SESSION['name'])){ ?>
                                        <p class="text-danger">
                                            <?php 
                                            echo $_SESSION['name'];
                                            ?>
                                        </p>
                                    <?php 
                                    }
                                ?>
            </div>
            <div class="form-floating mb-3 mx-5">
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $adminDB['email']; ?>">
                <label for="email">Email : </label>
                <?php
                                    if(isset($_SESSION['email'])){ ?>
                                        <p class="text-danger">
                                            <?php 
                                            echo $_SESSION['email'];
                                            ?>
                                        </p>
                                    <?php 
                                    }
                                ?>
            </div>
                <div class="form-floating mb-3 mx-5">
                <input type="password" class="form-control" id="password" name="password" value="<?php echo $adminDB['password']; ?>">
                <label for="password">Password : </label>
                <?php
                                    if(isset($_SESSION['password'])){ ?>
                                        <p class="text-danger">
                                            <?php 
                                            echo $_SESSION['password'];
                                            ?>
                                        </p>
                                    <?php 
                                    }
                                ?>
            </div>
                <div class="form-floating mb-3 mx-5">
                <input type="number" class="form-control" id="phone" name="phone" value="<?php echo $adminDB['phone']; ?>">
                <label for="phone">Phone : </label>
                <?php
                                    if(isset($_SESSION['phone'])){ ?>
                                        <p class="text-danger">
                                            <?php 
                                            echo $_SESSION['phone'];
                                            ?>
                                        </p>
                                    <?php 
                                    }
                                ?>
            </div>
            <input type="hidden" name="action" value="update">
            <input type="hidden" name="id" value="<?php echo $adminDB['id']; ?>">
            <button class="btn btn-success mx-5 " type="submit">Submit</button>
            </div>
        
        </div>
    </form>
</div>