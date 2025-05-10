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
                        <h4 class="card-title">Admin Profile</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered verticle-middle">
                                <thead>
                                    <tr>
                                        <th scope="col">S No.</th>
                                        <th scope="col">Admin Name</th>
                                        <th scope="col">Email</th>

                                        <th scope="col">Password</th>

                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php

                                    $select = "SELECT * from `user`";
                                    $qu = mysqli_query($con, $select);
                                    $s_no = 1;
                                    while ($row = mysqli_fetch_array($qu)) {
                                     
                                    ?>
                                        <tr>
                                            <td><?php echo $s_no ?></td>

                                            <td><b><?php echo $row['name'] ?></b></td>
                                            <td><b><?php echo $row['email'] ?></b></td>
                                            <td><b><?php echo $row['password'] ?></b></td>
 
                                            <td class="border"> 
                                            <a href="update-user.php?id=<?php echo $row['id'] ?>" data-toggle="tooltip" data-placement="top" title="Update"><i class="fa fa-edit color-danger btn btn-success" ></i></a></span>
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