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
		</script>
		<?php
	}
	$sql1="select*from try";
	$result1=mysqli_query($conn,$sql1);
	?>
	<center>
	<h2>Data Retrival</h2>
	<table border='1'>
	<tr>
		<th>rollno</th>
		<th>Name</th>
		<th>Age</th>
		<th>Subject</th>
		<th>Mark</th>
	</tr>
	<?php
	while($row=mysqli_fetch_array($result1))
	{
	 ?>
	   <tr>
		<td><?php echo $row['rollno'];?></td>
		<td><?php echo $row['Name'];?></td>
		<td><?php echo $row['Age'];?></td>
		<td><?php echo $row['Subject'];?></td>
		<td><?php echo $row['Mark'];?></td>
	   </tr>

	<?php
	}
	?>
</table>
</center>
