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
              <h3 class="card-title">เพิ่มอัลบัม</h3>
                </div>
                <form action="models/album.php" method="POST">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="album_name">ชื่ออัลบัม  :</label>
                      <input type="text" class="form-control" name="album_name" require>
                    </div>
                    <?php
                    $category_secon_select = "SELECT * FROM category";
                    $category_secon_query = $conn->query($category_secon_select);
                   ?>
                    <div class="form-group">
                      <label>หมวดหมู่ :</label>
                        <select class="form-control" name="category_select">
                          <?php while ($result_secon = $category_secon_query->fetch_assoc()) { ?>
                           <option value="<?= $result_secon['id'] ?>" require> <?=  $result_secon['category_name'] ?></option>
                          <?php } ?>
                        </select>
                    </div>
                    <?php
                    $tags_secon_select = "SELECT * FROM tags";
                    $tags_secon_query = $conn->query($tags_secon_select);
                   ?>
                    <div class="form-group">
                      <label>Tags :</label>
                        <select class="form-control" name="tags_select">
                          <?php while ($result_secon = $tags_secon_query->fetch_assoc()) { ?>
                           <option value="<?= $result_secon['id'] ?>" require> <?=  $result_secon['tags_name'] ?></option>
                          <?php } ?>
                        </select>
                    </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-success">บันทึกข้อมูล</button>
                    <a href ="index.php" class="btn btn-danger">ย้อนกลับ</a>
                  </div>
                </form>
              </div>
            </div>
          </section>
        </div>
      </div>
    </section>
  </div>





