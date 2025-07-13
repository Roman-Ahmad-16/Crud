<!DOCTYPE html>
<html>
<head>
  <title>Edit Employee</title>
</head>
<body>

<h2>Edit Employee</h2>

<form action="{{ route('employee.update')}}" method="post">
  @csrf

  <label>Name:</label>
  <input type="text" name="name" value="Ahmed Khan"><br><br>

  <label>Position:</label>
  <input type="text" name="position"><br><br>

  <label>Office:</label>
  <input type="text" name="office"><br><br>

  <button type="submit">Update</button>
</form>

</body>
</html>