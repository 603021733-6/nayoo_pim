<?php include "assets/connectDB/connectDB.php";?>
<?php include "header.php"; ?>

<link rel="stylesheet" type="text/css" href="assets/css/customer.css">

   
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <section class="col-lg-12 connectedSortable">
            <div class="offset-md-1 col-md-10 offset-md-1">

              <div class="card card-success">
                <div class="card-header">
              <h3 class="card-title">เพิ่มหมวดหมู่</h3>
                </div>
                <form action="models/category.php" method="POST">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="category_name">ชื่อหมวดหมู่  :</label>
                      <input type="text" class="form-control" name="category_name" require>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-success">บันทึกข้อมูล</button>
                    <a href ="index.php" class="btn btn-danger">ย้อนกลับ</a>
                  </div>
                </form>
              </div>
            </div>
            <br>

            <div class="offset-md-1 col-md-10 offset-md-1">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">ข้อมูลหมวดหมู่ </h3>
                </div>
                  <?php 
                    $category_select = "SELECT * FROM category";
                    $category_query = $conn->query($category_select);
                    
                    
                  ?>
                  <?php while ($result_secon = $category_query->fetch_assoc()) { ?>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="category_name">หมวดหมู่ :</label>
                            <p><?= $result_secon['category_name'] ?></p>
                          </div>
                        </div>
                        <div class="col-md-3" style="margin-top:15px;">

                        <!-- Button trigger modal -->
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" >
                            <a href ="edit_category.php?id=<?= $result_secon['id'] ?>" id="link">แก้ไขข้อมูล</a>
                          </button>

                        </div>
                      </div><hr>
                    </div>
                  <?php } ?>
              </div>
            </div>
          </section>
        </div>
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->




