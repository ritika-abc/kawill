<?php
include "header.php";
include "side.php";



?>

<!--**********************************
            Content body start
        ***********************************-->
<form action="go.php" method="post" enctype="multipart/form-data">
    <div class="content-body">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add Products Form</h4>
                            <div class="basic-form">

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Image</label>
                                        <input type="file" multiple name="image[]" class="form-control" accept="image/*">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Price</label>
                                        <input type="text" class="form-control" name="price" placeholder="Price">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>State</label>
                                        <select id="inputState" name="cat_name" class="form-control">
                                            <option selected="selected">Choose...</option>
                                            <?php
                                            include "config.php";
                                            $select = "SELECT * from `categories`";
                                            $qu = mysqli_query($con, $select);
                                            $s_no = 1;
                                            while ($row = mysqli_fetch_array($qu)) {

                                            ?>
                                                <option value="<?php echo $row['cat_name'] ?>"><?php echo $row['cat_name'] ?></option>
                                            <?php }
                                            ?>

                                        </select>
                                    </div>
                                </div>

                                <div class="border py-4 px-3 shadow-lg">
                                    <div class="row ">
                                        <div class="col-lg-12 my-3  ">
                                            <div class="">
                                                <!-- <label for="" class=" text- fw-bold">Product Description</label>
                                                    <textarea name="product_description" rows="5" class="form-control q " id=""></textarea> -->
                                                <div class="toolbar1">
                                                    <button type="button" onclick="document.execCommand('formatBlock', false, 'p')">Paragraph</button>
                                                    <button type="button" onclick="document.execCommand('bold')">Bold</button>
                                                    <button type="button"  onclick="document.execCommand('italic')">Italic</button>
                                                    <button type="button"  onclick="document.execCommand('underline')">Underline</button>
                                                    <button  type="button" onclick="document.execCommand('insertOrderedList')">Ordered List</button>
                                                    <button  type="button" onclick="document.execCommand('insertUnorderedList')">Unordered List</button>
                                                    <button  type="button" onclick="document.execCommand('justifyCenter')">Center</button>

                                                    <button  type="button" onclick="document.execCommand('formatBlock', false, 'h3')">Heading 3</button>
                                                    <button  type="button" onclick="document.execCommand('formatBlock', false, 'h4')">Heading 4</button>
                                                    <button  type="button" onclick="document.execCommand('formatBlock', false, 'h5')">Heading 5</button>
                                                    <button  type="button" onclick="document.execCommand('formatBlock', false, 'h6')">Small Heading</button>

                                                    <button type="button"  onclick="insertTable()">Insert Table</button>


                                                </div>

                                                <!-- Editable Content Area -->
                                                <div class="editor1" style="background-color: #bbbbbb;" contenteditable="true" oninput="updateTextarea()"></div>

                                                <!-- Textarea for showing content -->
                                                <textarea name="content" class="output-textarea1" readonly></textarea>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>

                                <div class="form-group my-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                        <label class="form-check-label">Check me out</label>
                                    </div>
                                </div>
                                <input type="submit" name="submit" class="btn btn-dark">

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- #/ container -->

    </div>
    <!--**********************************
            Content body end
        ***********************************-->
</form>
<?php
include "footer.php";

?>