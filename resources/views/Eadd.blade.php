<!DOCTYPE html>
<html>
<head>
  <title>Add Employee</title>
</head>
<body>

<h2>Add New Employee</h2>

<form action="{{ route('employee.store') }}" method="post">
  @csrf

  <label>Name:</label>
  <input type="text" name="name"><br><br>

  <label>Position:</label>
  <input type="text" name="position"><br><br>

  <label>Office:</label>
  <input type="text" name="office"><br><br>

  <button type="submit">Submit</button>
</form>

</body>
</html>