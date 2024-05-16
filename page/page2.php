<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>デザイン比較</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../base.css">
</head>
<body>
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$select_1 = $_POST['select_1'];
        echo $select_1;
	}
	?>
	
    <div class="all">
        <div class="container">
            <!-- Main Heading -->
            <div class="midasi text-center">
                <h1 class="display-4">デザイン比較</h1>
            </div>

            <!-- Two Blocks -->
            <div class="row oya">
                <!-- First Block -->
                <div class="col takasa">
                    <div class="col m-3 border border-primary border-5 delay-time5 change-time15 timing-ease-out fadeUp takasa">
                        <div class="col">
                            <h2 class="text-center mb-5 mt-3">A</h2>
                            <img src="../image/A_2.png" width="100%" height="100%">
                            <!--  <iframe src="designA.html" width="100%" height="500px"></iframe> -->
                        </div>
                    </div>
                </div>

                <!-- Second Block -->
                <div class="col takasa oya">
                    <div class="col m-3 border border-success border-5 delay-time15 change-time5 timing-ease-out fadeUp takasa">
                        <h2 class="text-center mb-5 mt-3">B</h2>
                        <img src="../image/B_2.png" width="100%" height="100%">
                        <!--  <iframe src="designA.html" width="100%" height="500px"></iframe> -->
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col text-center mt-5">
                    <form action="page3.php" method="post">
                        <input type="hidden" name="select_1" value=<?php echo $select_1; ?>>
						<input type="hidden" name="select_2" value="A">
                        <button type="submit" class="btn btn-primary btn-lg btn-block" style="font-size: 24px; padding: 25px 10px;">次へ</button>
                    </form>
                </div>

                <div class="col text-center mt-5">
                    <form action="page3.php" method="post">
                        <input type="hidden" name="select_1" value=<?php echo $select_1; ?>>
						<input type="hidden" name="select_2" value="B">
                        <button type="submit" class="btn btn-success btn-lg btn-block" style="font-size: 24px; padding: 25px 0;">次へ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>