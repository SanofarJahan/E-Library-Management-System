<?php
session_start();
include "database.php";
 
if(!isset( $_SESSION["AID"]))
{
	 header("location:alogin.php");
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>e-Library</title>
		<link rel="icon" type="image/png" href="images/tab-icon.png">
		<link rel="stylesheet"
		      type="text/css"
		      href="css/style.css">
	</head>
		<body>
			<div id="container">
				<div id="header">
					<h1>LIBRARY</h1>
				</div>
				<div id="wrapper">
					<h3 id="heading"> Request Details</h3>
					<?php
					  $sql="SELECT STUDENT.NAME,request.MES,request.LOGS from student inner join request on student.ID=request.ID";
					  $res=$db->query($sql);
					  if($res->num_rows>0)
					  {
						  echo"<table>
						  <tr>
						     <th> S.No</th>
						     <th> NAME</th>
						     <th> MESSAGE</th>
						     <th> LOGS</th>
						  </tr>
						      ";
							  $i=0;
							  while($row=$res->fetch_assoc())
							  {
								  $i++;
								  echo "<tr>";
								  echo "<td>{$i}</td>";
								  echo "<td>{$row["NAME"]}</td>";
								  echo "<td>{$row["MES"]}</td>";
								  echo "<td>'{$row["LOGS"]}</td>";
								  echo "</tr>";
							  }
							  echo "</table>";
					  }
					  else
					  {
						  echo"<p class='error'>No Requests</p>";
					  }
					?>
	
					</div>
					<div id="navi">
<ul>
	<li><a href="ahome.php">Home</a></li>
	<li><a href="view_student.php">View Student</a></li>
	<li><a href="upload_book.php">Upload Books</a></li>
	<li><a href="view_books.php">View Books</a></li>
	<li><a href="view_req.php" class="active">View Request</a></li>
	<li><a href="view_comm.php">View comments</a></li>
	<li><a href="achangepass.php">Change password</a></li>
	<li><a href="logout.php">Logout</a></li>
			
</ul>
					</div>
					<div id="footer">
					<p>Copyright &copy;
					<i><a href="https://github.com/SanofarJahan"  target="_blank">Sanofar Jahan</a></i>and
					<i><a href="https://github.com/Ramajayam-007" target="_blank">Ramajayam M</a></i>
					</p>
					</div>
				</div>
			</body>
		</html>

					
				

