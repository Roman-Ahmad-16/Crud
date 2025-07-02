<!DOCTYPE html>
<html>
<head>
  <title>Simple Form</title>
</head>
<body>

<h2>Person Form</h2>



<form action="{{route('crud.updatee')}}" method="post">
    @csrf
  <label>Name:</label>
  <input type="text" name="name" value="ALI RAZA"><br><br>

  <label>Age:</label>
  <input type="number" name="age"><br><br>

  <label>City:</label>
  <input type="text" name="city"><br><br>

  <button type="submit" name="action" value="add">Update</button>
</form>

</body>
</html>
