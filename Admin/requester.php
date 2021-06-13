<?php
define('TITLE', 'Requesters');
define('PAGE', 'requesters');
include('includes/header.php');
include('../dbConnection.php');
session_start();
if(isset($_SESSION['is_adminlogin'])){
    $aEmail = $_SESSION['aEmail'];
} else {
    echo "<script> location.href='login.php'</script>";
}
?>
<!-- Start 2nd Column -->
<div class="col-sm-9 col-md-10 mt-5 text-center">
    <p class="bg-dark text-white p-2">List of Requesters</p>
    <?php $sql = "SELECT * FROM requesterlogin_tb"; ?>
</div>
<?php include('includes/footer.php')?>