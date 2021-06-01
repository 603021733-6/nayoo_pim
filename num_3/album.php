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
                    <h3 class="card-title">อัลบัม</h3>
                </div>
                <form method="POST">
                  <div class="card-footer">
                    <a href ="add_album.php" class="btn btn-success">เพิ่มอัลบัม</a>
                  </div>
                </form>
              </div>
            </div>
            <br>

            <div class="offset-md-1 col-md-10 offset-md-1">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">ข้อมูลอัลบัม </h3>
                </div>
                  <?php 
                    $album_select = "SELECT * FROM album";
                    $album_query = $conn->query($album_select);
                    print_r($album_select);exit;
                    
                  ?>
                  <?php while ($result_secon = $album_query->fetch_assoc()) { ?>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="album_name">ชื่ออัลบัม :</label>
                            <p><?= $result_secon['album_name'] ?></p>
                          </div>
                          <div class="form-group">
                            <label for="album_name">หมวดหมู่ :</label>
                            <p><?= $result_secon['category'] ?></p>
                          </div>
                          <div class="form-group">
                            <label for="album_name">tags :</label>
                            <p><?= $result_secon['tags'] ?></p>
                          </div>
                        </div>
                        <div class="col-md-3" style="margin-top:15px;">

                     
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" >
                            <a href ="edit_album.php?id=<?= $result_secon['id'] ?>" id="link">แก้ไขข้อมูล</a>
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





