<html>
	<head>
		<title>Contact Mail</title>
	</head>
	<body>
		<table>
			<tr><td>One new person try to contact with you <br>
			Detail is below:</td></tr>
			<tr><td>&nbsp;</td></tr>
			<tr><td>Email: {{ $email }}</td></tr>
			<tr><td>&nbsp;</td></tr>
            <tr><td>Name: {{ $f_name }} {{$l_name}}</td></tr>
			<tr><td>&nbsp;</td></tr>
			<tr><td>Mobile: {{ $phone }}</td></tr>
			<tr><td>&nbsp;</td></tr>
            <tr><td>Subject: {{ $subject }}</td></tr>
			<tr><td>&nbsp;</td></tr>
			<tr><td>Message: {{ $description }}</td></tr>
		</table>
	</body>
</html>