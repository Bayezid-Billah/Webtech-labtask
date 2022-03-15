<?php require("head.php"); ?>

<div class="container custom-form-dashboard">
	<div class="navitems">
		<table style="width: 100%;">
			 <tr style="width: 100%;">

              <td style="width: 20%;">
			   <ul>

			   		<li>User Account</li>
			   		<hr>
             <li><a href="../Pages/dashboard.php">Dashboard</a></li>
                    <li><a href="../Pages/public_view.php">View Profile</a></li>
                    <li><a href="../Pages/registration.php">Add User</a></li>
                    <li><a href="../Pages/change_profile_picture.php">Change Profile Picture</a></li>
                    <li><a href="../Pages/change_password.php">Change Password</a></li>
                    <li><a href="../Pages/forgot_password.php">Forgot Password</a></li>
                </ul>
               </td>
               <td style="width: 70%;">
               	<?php
					echo "Welcome ".$_SESSION['username'];

					/*if(isset($_COOKIE['username'])){
						echo "Welcome ".$_COOKIE['username'];
					}else{
						echo "cookie is not set";
					}*/

					?>
               </td>
             </tr>
            
		</table>            
    </div>
</div>
<?php require("foot.php"); ?>