<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>答え合わせ</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../base.css">
</head>
<body>
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$select_1 = $_POST['select_1'];
		$select_2 = $_POST['select_2'];
        $select_3 = $_POST['select_3'];
        $select_4 = $_POST['select_4'];
        $select_5 = $_POST['select_5'];
        
        echo $select_1;
        echo $select_2;
        echo $select_3;
        echo $select_4;
        echo $select_5;
	}
	?>
	
    <div class="all">
        <div class="container">
            <!-- Main Heading -->
            <div class="midasi text-center">
                <h1 class="display-4">答え合わせ</h1>
            </div>

            <!-- 1th Blocks -->
            <div class="row oya">
                <!-- First Block -->
                <div class="col takasa">
                    <div class="col m-3 border border-primary border-5 delay-time5 change-time15 timing-ease-out fadeUp takasa">
                        <div class="col">
                            <h2 class="text-center mb-5 mt-3">一つ目</h2>
                            
                            <?php
                            if($select_1 == "A"){
                            ?>
                            <img src="../image/A_1.png" width="100%" height="100%">
                            <!--  <iframe src="designA.html" width="100%" height="500px"></iframe> -->
                            <?php
                            }else if($select_1 == "B"){
                            ?>
                            <img src="../image/B_1.png" width="100%" height="100%">
                            <!--  <iframe src="designA.html" width="100%" height="500px"></iframe> -->
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            
            
            
            <!-- 2th Blocks -->
            <div class="row oya">
                <!-- First Block -->
                <div class="col takasa">
                    <div class="col m-3 border border-primary border-5 delay-time5 change-time15 timing-ease-out fadeUp takasa">
                        <div class="col">
                            <h2 class="text-center mb-5 mt-3">2つ目</h2>
                            
                            <?php
                            if($select_2 == "A"){
                            ?>
                            <img src="../image/A_2.png" width="100%" height="100%">
                            <!--  <iframe src="designA.html" width="100%" height="500px"></iframe> -->
                            <?php
                            }else if($select_2 == "B"){
                            ?>
                            <img src="../image/B_2.png" width="100%" height="100%">
                            <!--  <iframe src="designA.html" width="100%" height="500px"></iframe> -->
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <!-- 3th Blocks -->
            <div class="row oya">
                <!-- First Block -->
                <div class="col takasa">
                    <div class="col m-3 border border-primary border-5 delay-time5 change-time15 timing-ease-out fadeUp takasa">
                        <div class="col">
                            <h2 class="text-center mb-5 mt-3">3つ目</h2>
                            
                            <?php
                            if($select_3 == "A"){
                            ?>
                            <img src="../image/A_3.png" width="100%" height="100%">
                            <!--  <iframe src="designA.html" width="100%" height="500px"></iframe> -->
                            <?php
                            }else if($select_3 == "B"){
                            ?>
                            <img src="../image/B_3.png" width="100%" height="100%">
                            <!--  <iframe src="designA.html" width="100%" height="500px"></iframe> -->
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <!-- 4th Blocks -->
            <div class="row oya">
                <!-- First Block -->
                <div class="col takasa">
                    <div class="col m-3 border border-primary border-5 delay-time5 change-time15 timing-ease-out fadeUp takasa">
                        <div class="col">
                            <h2 class="text-center mb-5 mt-3">4つ目</h2>
                            
                            <?php
                            if($select_4 == "A"){
                            ?>
                            <img src="../image/A_4.png" width="100%" height="100%">
                            <!--  <iframe src="designA.html" width="100%" height="500px"></iframe> -->
                            <?php
                            }else if($select_4 == "B"){
                            ?>
                            <img src="../image/B_4.png" width="100%" height="100%">
                            <!--  <iframe src="designA.html" width="100%" height="500px"></iframe> -->
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <!-- 5th Blocks -->
            <div class="row oya">
                <!-- First Block -->
                <div class="col takasa">
                    <div class="col m-3 border border-primary border-5 delay-time5 change-time15 timing-ease-out fadeUp takasa">
                        <div class="col">
                            <h2 class="text-center mb-5 mt-3">5つ目</h2>
                            
                            <?php
                            if($select_5 == "A"){
                            ?>
                            <img src="../image/A_5.png" width="100%" height="100%">
                            <!--  <iframe src="designA.html" width="100%" height="500px"></iframe> -->
                            <?php
                            }else if($select_5 == "B"){
                            ?>
                            <img src="../image/B_5.png" width="100%" height="100%">
                            <!--  <iframe src="designA.html" width="100%" height="500px"></iframe> -->
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            
            
            
            

            
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>