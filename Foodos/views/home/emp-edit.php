<!DOCTYPE html>
<html>
<head>
	<title>User Edit</title>
</head>
<body>

<form method="post">
	<table border="0">
		<tr>
			<td>Id</td>
			<td><%= user.id %></td>
			<input type="hidden" name="id" value="<%= user.id %>">
		</tr>
		<tr>
			<td>Name</td>
			<td><%= user.name %></td>
			<input type="hidden" name="name" value="<%= user.name %>">
		</tr>
		<tr>
			<td>User Name</td>
			<td><input type="text" name="username" value="<%= user.username %>"></td>
		</tr>
		<tr>
			<td>Type</td>
			<td><input type="text" name="type" value="<%= user.type %>"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Save" /></td>
			<td></td>
		</tr>
	</table>
</form>
</body>
</html>