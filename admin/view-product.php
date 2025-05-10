<?php
include "header.php";
include "side.php";
include "config.php";

 
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
                        <h4 class="card-title">Product Table</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered verticle-middle">
                                <thead>
                                    <tr>
                                        <th scope="col">S No.</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Category Name</th>

                                        <th scope="col">Image</th>

                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php

                                    $select = "SELECT * from `product`";
                                    $qu = mysqli_query($con, $select);
                                    $s_no = 1;
                                    while ($row = mysqli_fetch_array($qu)) {
                                        $image_list = json_decode($row['image'], true); // true to get an associative array
                                    ?>
                                        <tr>
                                            <td><?php echo $s_no ?></td>

                                            <td><b><?php echo $row['name'] ?></b></td>
                                            <td><b><?php echo $row['cat_name'] ?></b></td>




                                            <td >
                                                <?php
                                                $s = 1;
                                                foreach ($image_list as $image) {

                                                ?>
                                                    <a href="<?php echo $image ?>" target="_blank"><img src="<?php echo $image ?>" class="border border-dark border-2 shadow-lg obj m-2 rounded" height="100px" width="100px" alt=""></a>

                                                <?php $s++;
                                                } ?>

                                            </td>




                                            <td class="border"> <a href="delete-product.php?id=<?php echo $row['id'] ?>" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-close color-danger"></i></a></span>
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