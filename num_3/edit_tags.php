<?php include "assets/connectDB/connectDB.php";?>
<?php include "header.php"; ?>

   
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <section class="col-lg-12 connectedSortable">
                    <div class="col-md-12">
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">แก้ไขชื่อ Tags </h3>
                            </div>
                            <div class="card-body">
                            <?php 
                                // print_r ($_GET);exit;
                                $tags_select = "SELECT * FROM tags WHERE id = '{$_GET['id']}'";
                                $tags_query = $conn->query($tags_select);
                                $result = $tags_query->fetch_assoc();
                                // print_r ($result);exit;

                            ?>
                                <form action="models/update_tags.php" method="POST">
                                    <div class="card-body">
                                    <div class="form-group">
                                        <label for="tags_name">ชื่อ tags  :</label>
                                        <input type="text" class="form-control" name="tags_name" value="<?=$result['tags_name'] ?>"  require>
                                    </div>
                                    </div>
                                    <input type="hidden" class="from-control" name="id" value="<?= $_GET['id']?>" >
                                    <div class="modal-footer">
                                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                    <button type="submit" class="btn btn-success">บันทึกข้อมูล</button>
                                    </div>
                                </form>
                                    
                                
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</div>



  