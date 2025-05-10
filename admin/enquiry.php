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
                                        <th scope="col">Date</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Email</th>

                                        <th scope="col">Phone</th>

                                        <th scope="col">Enquiry</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    $s_no = 1;
                                    $select = "SELECT * from `enquiry` ORDER BY $s_no DESC ";
                                    $qu = mysqli_query($con, $select);

                                    while ($row = mysqli_fetch_array($qu)) {

                                    ?>
                                        <tr>
                                            <td><?php echo $s_no ?></td>

                                            <td><b><?php echo $row['buyer_name'] ?></b></td>
                                            <td><b><?php echo $row['date'] ?></b></td>
                                            <td><b><?php echo $row['buyer_email'] ?></b></td>
                                            <td><b><?php echo $row['buyer_phone'] ?></b></td>
                                            <td><b><?php echo $row['enquiry_for'] ?></b></td>




                                            <td class="border"> <a href="delete-enquiry.php?id=<?php echo $row['id'] ?>" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-close color-danger"></i></a></span>
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