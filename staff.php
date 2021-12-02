<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome Staff</title>
    <link rel="stylesheet" href="mainDesign.css"> <!--Main Design-->
    <link rel="preconnect" href="https://fonts.gstatic.com"> <!--Fonts-->
    <style>
	a {
	  color: white;
	  background-color: transparent;
	  text-decoration: underline;
	}

	table.center {
	  margin-left: auto;
	  margin-right: auto;
	}
    </style>
</head>

<body>
    
    <hr style="width:26%; border:0.5px solid white;">
    <table class="tab;" style="color:white; margin-left: auto; margin-right: auto; width: 27%; ">
        <tr>
            <th><a href="staff.php"     	  class="tabStyle">Staff</a></th>
            <th><a href="Staff_Community.php" class="tabStyle">Community</a> </th>
			<th><a href="Staff_ContactUs.php" class="tabStyle">Contact Us</a></th>
        </tr>
    </table>
    <hr style="width:26%; ">

    <div style="background-color: black; opacity: 0.8; margin-left:15%; margin-right:15%; padding-top:3%; border:solid black; color:white; ">
        
	<form action="">
    
        <h1>Welcome Staff</h1>
        <table class="center" border="1" width="750px" >
			<tr>
				<th>Adminstration</th>				
				<th colspan="4">Action</th>
			</tr>
       
				<tr>
					<td>Manage Staff</td>
					<td><a href ="">View</a></td>
					<td><a href="">Add</a></td>
					<td><a href="">Update</a></td>
					<td><a href="" onclick="return confirmation();">Delete</a></td>
				</tr>
				
				<tr>
					<td>Manage Member</td>
					<td><a href ="">View</a></td>
					<td><a href="">Add</a></td>
					<td><a href="">Update</a></td>
					<td><a href="" onclick="return confirmation();">Delete</a></td>
				</tr>
				
				<tr>
					<td>Manage Product</td>
					<td><a href ="">View</a></td>
					<td><a href="">Add</a></td>
					<td><a href="">Update</a></td>
					<td><a href="" onclick="return confirmation();">Delete</a></td>
				</tr>
				
				<tr>
					<td>Info Category</td>
					<td><a href ="">View</a></td>
					<td><a href="">Add</a></td>
					<td><a href="">Update</a></td>
					<td><a href="" onclick="return confirmation();">Delete</a></td>
				</tr>
				
				<tr>
					<td>Manage Order</td>
					<td><a href="">View</a></td>
					<td><a href="">Add</a></td>
					<td><a href="">Update</a></td>
					<td><a href="" onclick="return confirmation();">Delete</a></td>
				</tr>
				
				<tr>
					<td>Sales Report</td>
					<td colspan="4"><a href="">View</a></td>
				</tr>
				
				
</form>

    </div>

</body>
</html>