<?php include('config/db.php'); ?>
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

<body>
    <!-- Header -->
    <?php include('header_in.php'); ?>
    <!--<div class="container mt-5">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 25rem">
                <div class="card-body">
                    <h5 class="card-title text-center mb-4">User Profile</h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $_SESSION['firstname']; ?>
                        <?php echo $_SESSION['lastname']; ?></h6>
                    <p class="card-text">Mobile number: <?php echo $_SESSION['mobilenumber']; ?></p>
                    
                    <a class="btn btn-danger btn-block" href="logout.php">Log out</a>
                </div>
            </div>
        </div>
    </div> -->
    <div class="App">
        <div class="vertical-center">
            <div class="inner-block">
                    <h3>Menu</h3>
                    <h6>
                        Welcone <?php echo $_SESSION['firstname']; ?><?php echo $_SESSION['lastname']; ?></h6>
                    </h6>
                    <a class="btn btn-outline-primary btn-lg btn-block" href="new_cow.php">Add Cow</a>
                    <a class="btn btn-outline-primary btn-lg btn-block" href="logout.php">Display Cow</a>
                    <a class="btn btn-danger btn-block" href="logout.php">Log out</a>
            </div>
        </div>
    </div>

</body>

</html>