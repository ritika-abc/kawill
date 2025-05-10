<?php
include "header.php";
include "side.php";
include "config.php";

if (isset($_POST['submit'])) {



    $cat_name = test_input($_POST['cat_name']);
    $image = time() . "_" . $_FILES["image"]["name"];
    $fld1 = "upload/" . $image;
    // $fld2 = "upload/" . $image;
    move_uploaded_file($_FILES["image"]['tmp_name'], $fld1);
    // tmp_name is the temporary name of the uploaded file which is generated automatically by php, and stored on the temporary folder on the server
    // Note: If the destination file already exists, it will be overwritten
    $sql = "INSERT INTO `categories`(`cat_name`,`image`)
     VALUES ('$cat_name', '$fld1')";

    $query = mysqli_query($con, $sql);
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
                            <h4>Category</h4>
                        </div>
                        <div class="row">

                            <!-- Modal Add Category -->
                            <form action="" method="post" enctype="multipart/form-data">

                                <div class="container">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="control-label">Category Name</label>
                                            <input class="form-control form-white" placeholder="Enter name" type="text" name="cat_name">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Category Image</label>
                                            <input class="form-control form-white" placeholder="Enter name" type="file" name="image">
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
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Category Table</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered verticle-middle">
                                <thead>
                                    <tr>
                                        <th scope="col">S No.</th>
                                        <th scope="col">Category Name</th>

                                        <th scope="col">Image</th>

                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php

                                    $select = "SELECT * from `categories`";
                                    $qu = mysqli_query($con, $select);
                                    $s_no = 1;
                                    while ($row = mysqli_fetch_array($qu)) {

                                    ?>
                                        <tr>
                                            <td><?php echo $s_no ?></td>

                                            <td><b><?php echo $row['cat_name'] ?></b></td>
                                            <td><img src="<?php echo $row['image'] ?>" class="border border-dark border-2 shadow-lg" height="100px" width="100px" alt=""></td>


                                            <td class="border"> <a href="delete-cat.php?cat_id=<?php echo $row['cat_id'] ?>" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-close color-danger"></i></a></span>
                                            </td>
                                        </tr>
                                    <?php $s_no++;
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
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

?>