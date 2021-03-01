<!DOCTYPE html>
<html>
<head>
	<title>Form </title>
	<style>
		body{
			background-color:skyblue; 
		}
	</style>
</head>
<body>
</br>
<form method="post" action="profileverification.php">
	 
	 <table border="1">
		<tr>
			<td width="130" height="20">&nbsp Name :</td>
			<td width="400" height="20">&nbsp &nbsp<input size="25" name="name" type="text" value=""></td>
			<td width="50" height="20"></td>
		</tr>
		<tr>
            <td width="130" height="25">&nbsp Email :</td>
			<td width="400" height="25">&nbsp &nbsp<input size="25" name="email" type="text" value="">&nbsp<abbr title="hint: sample@example.com"><b>i</b></abbr></td>
			<td width="50" height="25"></td>			
		</tr>
		<tr>
			<td width="100" height="25">&nbsp Date Of Birth :</td>
			<td width="400" height="25">&nbsp &nbsp
				        <input type="text" size="2" name="day"> -
						<input type="text" size="2" name="month"> -
						<input type="text" size="4" name="year" maxlength="4" >
						<font size="2"><i>(dd-mm-yyyy)</i></font></td>
			<td width="50" height="25"></td>			
		</tr>
		<tr>
			<td width="100" height="25">&nbsp Gender :</td>
			<td width="400" height="25">&nbsp &nbsp
				        <input name="gender" type="radio" value="male">Male
						<input name="gender" type="radio" value="Female">Female
						<input name="gender" type="radio" value="Other">Other</td>
			<td width="50" height="25"></td>			
		</tr>
		<tr>
            <td width="100" height="25">&nbsp Degree :</td>
			<td width="400" height="25">&nbsp &nbsp
				    <input type="checkbox" name ="degree" value = "SSC "/>SSC
                    <input type="checkbox" name ="degree" value = "HSC"/>HSC
                    <input type="checkbox" name ="degree" value = "BSc "/>BSc
                    <input type="checkbox" name ="degree" value = "MSc "/>MSc
			<td width="50" height="25"></td>			
		</tr>
			<tr>
			<td width="130" height="25">&nbsp Blood Group :</td>
			<td width="400" height="25">&nbsp &nbsp<input size="25" name="Blood Group" type="text" value=""></td>
			<td width="50" height="25"></td>
		</tr>
		
		</table>
		<table border="1">

			<tr>
				<td align="right" width="800" height="100">
					<input type="submit" value="Submit">&nbsp &nbsp &nbsp
		            <input type="reset">&nbsp &nbsp

		        </td>
			</tr>

	    </table>
</form>
</body>
</html>