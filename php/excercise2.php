<html>
<head>
<title>Form</title>
</head>
<body>
<form action="marketry.php" method="post">
<table align="center">
<tr>
<td>roll no</td>
<td><input type="text" name="rollno"/></td>
</tr>
<tr>
<td>Name</td>
<td><input type="text" name="name"/></td>
</tr>
<tr>
<td>Age</td>
<td><input type="text" name="age"></input></td>
</tr>
<tr>
<td>Subject</td>
<td><input type="text" name="subject"></input></td>
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
