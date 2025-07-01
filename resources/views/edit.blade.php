<!DOCTYPE html>
<html>
<head>
  <title>Simple Form</title>
</head>
<body>

<h2>Person Form</h2>



<form action="{{ route('crud.update')}}" method="post">
    @csrf
  <label>Name:</label>
  <input type="text" name="name" value="ali raza"><br><br>

  <label>Age:</label>
  <input type="number" name="age"><br><br>

  <label>City:</label>
  <input type="text" name="city"><br><br>

  <button type="submit"  value="add">Update </button>
</form>

</body>
</html>
