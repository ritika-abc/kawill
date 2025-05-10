<?php
ob_start();
include "header.php";
include "side.php";
include "config.php";

$id = $_GET['id'];

$sql = "SELECT* FROM `user` WHERE `id`='$id'";
$query = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($query)) {
    # to select all the data
    $name = $row['name'];
    $password = $row['password'];
    $email = $row['email'];
}




if (isset($_POST['submit'])) {
    $id = $_GET['id'];

    $name = test_input($_POST['name']);
    $password = test_input($_POST['password']);
    $email = test_input($_POST['email']);
    $sql1 = "UPDATE `user` SET `name`='$name',`password`='$password',`email`='$email' WHERE `id`='$id'";
    $query1 = mysqli_query($con, $sql1) or die("Not Found");
    // The die() function prints a message and exits the current script
    if ($query) {
        header("location:user.php");
    }
}


function test_input($data)
{
    $data = preg_replace('/\s+/', ' ', $data); // Replace multiple spaces with a single space
    $data = trim($data);

    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h4>Profile Update</h4>
                        </div>
                        <div class="row">

                            <!-- Modal Add Category -->
                            <form action="" method="post" enctype="multipart/form-data">

                                <div class="container">

                                    <div class="row">
                                        <div class="col-md-6 my-3">
                                            <label class="control-label">Admin Name</label>
                                            <input class="form-control form-white" value="<?php echo $name ?>" placeholder="Enter name" type="text" name="name">
                                        </div>
                                        <div class="col-md-6 my-3">
                                            <label class="control-label">Admin Email</label>
                                            <input class="form-control form-white" value="<?php echo $email ?>" placeholder="Enter email" type="email" name="email">
                                        </div>
                                        <div class="col-md-6 my-3">
                                            <label class="control-label">Password</label>
                                            <input class="form-control form-white" value="<?php echo $password ?>"   type="text" name="password">
                                        </div>

                                        <div class="col-12 my-2">
                                            <button type="submit" name="submit" class="btn btn-danger waves-effect waves-light save-category">Save</button>
                                        </div>
                                    </div>

                                </div>


                        </div>
                    </div>
                </div>
            </div>
            </form>
            <!-- END MODAL -->
        </div>

    </div>
</div>
<!-- /# card -->
</div>
<!-- /# column -->
</div>
</div>
<!-- #/ container -->
</div>
<!--**********************************
            Content body end
        ***********************************-->

<?php
include "footer.php";
ob_end_flush();
?>