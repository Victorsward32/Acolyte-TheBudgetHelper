<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>


<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar" style=" background: linear-gradient(to right, #3333cc -17%, #66ccff 138%);">
        <div class="profile-sidebar">
            <div class="profile-userpic">
                <img src="assets\images\raju.png" class="img-responsive" alt="User Logo">
            </div>
            <div class="profile-usertitle">
                <?php
$uid=$_SESSION['detsuid'];
$ret=mysqli_query($con,"select FullName from tbluser where ID='$uid'");
$row=mysqli_fetch_array($ret);
$name=$row['FullName'];

?>
                <div class="profile-usertitle-name" style="color:#ffff;font-weight: bold;"><?php echo $name; ?></div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        
        <ul class="nav menu">
            <li><a href="dashboard.php" style="color:#ffff;"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
            
            
           
            <li class="parent "><a data-toggle="collapse" href="#sub-item-1" style="color:#ffff;">
                <em class="fa fa-navicon">&nbsp;</em>Expenses <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-1">
                    <li><a class="" href="add-expense.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> Add Expenses
                    </a></li>
                    <li><a class="" href="manage-expense.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> Manage Expenses
                    </a></li>
                    
                </ul>

            </li>
           
  <li class="parent "><a data-toggle="collapse" href="#sub-item-2" style="color:#ffff;">
                <em class="fa fa-navicon">&nbsp;</em>Expense Report <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-2">
                    <li><a class="" href="expense-datewise-reports.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> Daywise Expenses
                    </a></li>
                    <li><a class="" href="expense-monthwise-reports.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> Monthwise Expenses  
                    </a></li>
                    <li><a class="" href="expense-yearwise-reports.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> Yearwise Expenses
                    </a></li>

                     <li><a class="" href="categorywise-report.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> Categorywise Expenses
                    </a></li>
                    
                </ul>
            </li>




            
            <li><a href="user-profile.php" style="color:#ffff;"><em class="fa fa-user">&nbsp;</em> Profile</a></li>
             <li><a href="change-password.php" style="color:#ffff;"><em class="fa fa-clone">&nbsp;</em> Change Password</a></li>
<li><a href="logout.php" style="color:#ffff;"><em class="fa fa-power-off" style="color:red;">&nbsp;</em> Logout</a></li>

        </ul>
    </div>