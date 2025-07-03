<!DOCTYPE html>
<html>
<head>
  <title>Simple Person Table</title>
</head>
<body>


<h2>Person Table</h2>

  <a href="{{route('crud.addd')}}">ADD NEW DATA</a>
  
</br>
<table border="1">
  <tr>
    <th>Name</th>
    <th>Age</th>
    <th>City</th>
    <th>Actions</th>
  </tr>
  <tr>
    <td>Ali</td>
    <td>25</td>
    <td>Lahore</td>
    <td>
      <a href="{{route('crud.editt')}}">Edit</a>
      <button>Delete</button>
    </td>
  </tr>
  <tr>
    <td>Sana</td>
    <td>28</td>
    <td>Karachi</td>
    <td>
      <a href="{{route('crud.editt')}}">Edit</a>
      <button>Delete</button>
    </td>
  </tr>
  <tr>
    <td>Ahmed</td>
    <td>30</td>
    <td>Islamabad</td>
    <td>
      <a href="{{route('crud.editt')}}">Edit</a>
      <button>Delete</button>
    </td>
  </tr>
  <tr>
    <td>Hina</td>
    <td>23</td>
    <td>Multan</td>
    <td>
      <a href="{{route('crud.editt')}}">Edit</a>
      <button>Delete</button>
    </td>
  </tr>

</table>

</body>
</html>
