<?php
	$conn=mysqli_connect("localhost","root","","meera");
	if(!$conn)
	{
	?>
		<script>
		   alert("Not Connected");
		</script>
		<?php
	}
	else
	{
		$roll_no=$_POST['rollno'];
		$name=$_POST['name'];
		$age=$_POST['age'];
		$subject=$_POST['subject'];
		$mark=$_POST['mark'];
		$sql="insert into try(rollno,Name,Age,Subject,Mark)values('$roll_no','$name','$age','$subject','$mark')";
		$result=mysqli_query($conn,$sql);
	}
	if($result)
	{
	 ?>
		<script>
		    alert("Sucessfully inserted");
		    window.location.href="excercise2.php";
		</script>
		<?php
	}
	$sql1="select*from try";
	$result1=mysqli_query($conn,$sql1);
	?>
	<center>
	<h2>Data Retrival</h2>
	<table>
	<tr>
		<th>rollno</th>
		<th>Name</th>
		<th>Age</th>
		<th>Subject</th>
		<th>Mark</th>
	</tr>
	<?php
	while($row_mysqli_fetch_assoc($result1))
	{
	 ?>
	   <tr>
		<td><?php echo $row['rollno'];?></td>
		<td><?php echo $row['name'];?></td>
		<td><?php echo $row['age'];?></td>
		<td><?php echo $row['subject'];?></td>
		<td><?php echo $row['mark'];?></td>
	   </tr>
	<?php
	}
	?>