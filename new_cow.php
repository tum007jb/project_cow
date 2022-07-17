<?php include('./controllers/cow.php'); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP User Registration System Example</title>
    <!-- jQuery + Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<!-- namecow species gender ivf_date begin_date bith_date -->
<body>
<!-- Header -->
<?php include('header_in.php'); ?>
<div class="App">
        <div class="vertical-center">
            <div class="inner-block">
                <form action="" method="post">
                    <h3>Register Cow</h3>
                    <?php echo $success_msg; ?>
                    <div class="form-group">
                        <label>ชื่อวัว</label>
                        <input type="text" class="form-control" name="namecow" id="namecow" />
                    </div>

                    <div class="form-group">
                        <label>สายพันธุ์</label>
                        <input type="text" class="form-control" name="species" id="species" />
                    </div>

                    <div class="form-group">
                        <label>เพศ</label>
                        <select class="form-control" name="gender">
				            <option value="male">ผู้</option>
				            <option value="female">เมีย</option>
		                </select>
                    </div>

                    <div class="form-group">
                        <label>วันผสมเทียม</label>
                        <input class="form-control" type="date" name="ivf_date" placeholder="dd-mm-yyyy" value=""min="1997-01-01" max="2030-12-31">
                    </div>

                    <div class="form-group">
                        <label>วันที่เริ่มท้อง</label>
                        <input class="form-control" type="date" name="begin_date" placeholder="dd-mm-yyyy" value=""min="1997-01-01" max="2030-12-31">
                    </div>

                    <div class="form-group">
                        <label>วันที่เริ่มท้อง</label>
                        <input class="form-control" type="date" name="bith_date" placeholder="dd-mm-yyyy" value=""min="1997-01-01" max="2030-12-31">
                    </div>
                    <button type="submit" name="cow" id="cow" class="btn btn-outline-primary btn-lg btn-block">Submit
                    </button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>