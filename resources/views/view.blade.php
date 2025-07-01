<!DOCTYPE html>
<html>
<head>
  <title>Simple Form</title>
</head>
<body>

<h2>Person Form</h2>



<form action="{{ route('crud.store')}}" method="post">
    @csrf
  <label>Name:</label>
  <input type="text" name="name"><br><br>

  <label>Age:</label>
  <input type="number" name="age"><br><br>

  <label>City:</label>
  <input type="text" name="city"><br><br>

  <button type="submit" name="action" value="add">Add</button>
  <button type="submit" name="action" value="edit">Edit</button>
  <button type="submit" name="action" value="update">Update</button>
  <button type="submit" name="action" value="delete">Delete</button>
</form>

</body>
</html>
