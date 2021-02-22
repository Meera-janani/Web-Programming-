<html>
<head>
</head>
<body>
<form action="markentry.php" method="post">
<table align="center">
<tr>
<td>Rollno</td>
<td><input type="text" name="rollno"/></td>
</tr>
<tr>
<td>Name</td>
<td><input type="text" name="name"/></td>
</tr>
<tr>
<td>Gender</td>
<td><input type="radio" name="g" value="male">Male</input><input
type="radio" name="g" value="female">Female</input></td>
</tr>
<tr>
<td>Mark</td>
<td><select name ="mark"><option value="select">Select</option>
<?php
 for($i=0;$i<21;$i++)
{
 echo '<option value='.$i.'>'.$i.'</option>';
}
?>
</select>
</td>
</tr>
<tr>
<td><input type="submit" name="submit"/></td>
<td><input type="reset"/></td>
</table>
</form>
</body>
</html>
<?php
	$conn=mysqli-connect('localhost','root','','student');
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
		$roll no=$_POST['roll no'];
		$name=$_POST['name'];
		$age=$_POST['age'];
		$subject=$_POST['subject'];
		$mark=$_POST['mark'];
		$sql="insert into tbl_subject(roll no,name,age,subject,mark)values('$roll no','$name','$age','$subject','$mark')";
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
	$sql 1="select*from tbl_subject";
	$result 1=mysqli_query($conn,$sql);
	?>
	<center>
	<h2>Data Retrival</h2>
	<table>
	<tr>
		<th>Roll No</th>
		<th>Name</th>
		<th>Age</th>
		<th>Subject</th>
		<th>Mark</th>
	</tr>
	<?php
	while($row_mysqli_fetch_action($result))
	{
	 ?>
	  <tr>
	     <td><?php echo $row['roll no'];?></td>
	     <td><?php echo $row['name'];?></td>
             <td><?php echo $row['age'];?></td>
      	     <td><?php echo $row['subject'];?></td>
	     <td><?php echo $row['mark'];?></td>
	     
	  </tr>
	    <?php
	}
?>