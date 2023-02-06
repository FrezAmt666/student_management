<div class="container">
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
    <div class="row">
        <div class="col-10 offset-1">
            <table class="table table-bordered  my-5 text-center">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Action</th>
                    
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no=1;

                        foreach($admins as $admin){
                    ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $admin['name'] ?></td>
                            <td><?php echo $admin['email'] ?></td>
                            <td><?php echo $admin['phone'] ?></td>
                            <td>
                                <a href="admin.php?page=edit_admin&id=<?php echo $admin['id'] ?>"><i class="fas fa-user-pen text-success"></i></a>
                                <a href="../../controllers/admin_controller.php?action=delete&id=<?php echo $admin['id'] ?>"><i class="fas fa-user-minus text-danger"></i></a>
                            </td>

                        </tr>


                    <?php
                    }
                    ?>
                    
                </tbody>
            </table>
        </div>
    </div>
    
</div>