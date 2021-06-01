<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Calculator</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />

	<style>
	body {
		font-family: 'Mitr';font-size: 22px;
    }
    .responsive {
    width: 100%;
    max-width: 400px;
    height: auto;
    }
	</style>
</head>

<body>
		<header>
			<div class="container-fluid">
				<div class="header d-lg-flex justify-content-between align-items-center py-4 px-sm-4">
				

				</div>
			</div>
		</header>

		<div class="banner_w3lspvt position-relative">
			<div class="container">
				
					<div class="col-md-6 offset-md-3 col-sm-12 text-center content-login-form">
                    
						<form action="index.php" method="POST">
                            <div class="input-group">
								ราคา : <input type="text" class="form-control" name="price" >
						
								เงินที่รับมา : <input type="text" class="form-control" name="getmoney">
							</div>
                            <br>
                            <button type="submit" class="btn btn-success">คำนวณเงินทอน</button>	
				        </form>
            <br>
            <?php
              error_reporting(~E_NOTICE);
              $price=$_POST['price'];
              $getm=$_POST['getmoney'];
              $money = $getm-$price;
              $number = [500, 100, 50, 10, 5, 1];
              echo "จำนวนเงินทอน ".$money." บาท"."<br>" ;
                if($money>=$number[0]){
                    $sum1=$money/500;
                    $sum1s=floor($sum1)*500;
                    $money=$money-$sum1s;
                    echo "500 = ".floor($sum1)." ใบ"."<br>";
                }if($money>=$number[1]){
                    $sum2=$money/100;
                    $sum2s=floor($sum2)*100;
                    $money=$money-$sum2s;
                    echo "100 = ".floor($sum2)." ใบ"."<br>";
                }if($money>=$number[2]){
                    $sum3=$money/50;
                    $sum3s=floor($sum3)*50;
                    $money=$money-$sum3s;
                    echo "50 = ".floor($sum3)." ใบ"."<br>";
                }if($money>=$number[3]){
                    $sum4=$money/10;
                    $sum4s=floor($sum4)*10;
                    $money=$money-$sum4s;
                    echo "10 = ".floor($sum4)." เหรียญ"."<br>";
                }if($money>=$number[4]){
                    $sum5=$money/5;
                    $sum5s=floor($sum5)*5;
                    $money=$money-$sum5s;
                    echo "5 = ".floor($sum5)." เหรียญ"."<br>";
                }if($money>=$number[5]){
                    $sum6=$money/1;
                    $sum6s=floor($sum6)*1;
                    $money=$money-$sum6s;
                    echo "1 = ".floor($sum6)." เหรียญ"."<br>";
                }
           
            ?>
            
				</div>
			</div>
			
		</div>
    


</body>

</html>