<!DOCTYPE html>
<html>
<head>
  <title>Employee Records</title>
</head>
<body>

<h2>Employee Table</h2>

<a href="{{ route('employee.add') }}">Add New Employee</a><br><br>

<table border="1">
  <tr>
    <th>Name</th>
    <th>Position</th>
    <th>Office</th>
    <th>Actions</th>
  </tr>
  <tr>
    <td>Ahmed Khan</td>
    <td>Manager</td>
    <td>Karachi</td>
    <td>
      <a href="{{ route('employee.edit', ['id' => 1]) }}">Edit</a>
      <button>Delete</button>
    </td>
  </tr>
  <tr>
    <td>Sana Riaz</td>
    <td>HR</td>
    <td>Lahore</td>
    <td>
      <button>Edit</button>
      <button>Delete</button>
    </td>
  </tr>
</table>

</body>
</html>