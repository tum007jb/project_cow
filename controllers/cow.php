<!-- namecow species gender ivf_date begin_date bith_date -->
<?php
   
    // Database connection
    include('config/db.php');
    
    // Error & success messages
    global $success_msg;
    
    // Set empty form vars for validation mapping
    $namecow = "";
    $species = "";
    $gender = "";
    $ivf_date = "";
    $begin_date = "";
    $bith_date = "";
    $userid = $_SESSION['id'];

    if (empty($userid)){
        header("Location: index.php");
    }

    if(isset($_POST["submit"])) {
        $namecow     = $_POST["namecow"];
        $species      = $_POST["species"];
        $gender         = $_POST["gender"];
        $ivf_date     = $_POST["ivf_date"];
        $begin_date      = $_POST["begin_date"];
        $bith_date      = $_POST["bith_date"];

        // check if email already exist
        $cow_check_query = mysqli_query($connection, "SELECT * FROM cow WHERE name = '{$namecow}' AND id_owner = '{$userid}'");
        $rowCount = mysqli_num_rows($cow_check_query);


        // PHP validation
        // Verify if form values are not empty
            
            // check if cowname already exist
            if($rowCount > 0) {
                $email_exist = '
                    <div class="alert alert-danger" role="alert">
                        User with email already exist!
                    </div>
                ';
            } 
            $sql = "INSERT INTO cow (id_cow,name,species,gender,id_owner,ivf_date,begin_date,birth_date) VALUES ('','{$namecow}','{$species}','{$gender}','{$userid}',
            '{$ivf_date}','{$begin_date}','{$bith_date}')";
                    
            // Create mysql query
            $sqlQuery = mysqli_query($connection, $sql);
                    
            if(!$sqlQuery){
            $success_msg =  '<div class="alert alert-success"> Cow Add Complete </div>';
            die("MySQL query failed!" . mysqli_error($connection));
            } 
            
        
    }
?>