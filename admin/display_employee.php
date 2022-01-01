	

<div class="container">
	<div class="row">
        <div class="col-lg-12" style="margin-top:60px;margin-bottom:20px">
				<h2 style="color:darkslategray">Employee List</h2>
		</div>
	</div>
</div>

<div class="container">
<?php
	$db = mysqli_connect("localhost", "root", "", "Online grocery shop");
	echo "<table class='table table-responsive table-bordered table-striped table-hover' style=margin:15px;>";
	echo "<tr class='success'>";
	
	
	echo "<th>email</th>";
	echo "<th>password</th>";
	echo "</tr>";
	
	$i=1;
	$sql = "SELECT * FROM employee";
	
            $result = mysqli_query($db, $sql);
	
	while($row = mysqli_fetch_assoc($result))
	{
		echo "<tr>";
		echo "<td>".$row['email']."</td>";
		echo "<td>".$row['password']."</td>";
		
		
		
		echo "<td class='text-center'><a href='#' onclick='deletes($row[email])'><span style=color:red;>delete</span></a></td>";
		
		echo "</tr>";
		#$i++;
	}
?>
</div>