<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CRUD</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <h1>Suvidha contact Management</h1>
        </div>
        <div id="menu">
            <ul>
                <li>
                    <a href="{{route('contact_index')}}">Home</a>
                </li>
                <li>
                    <a href="{{route('contact_add')}}">Add</a>
                </li>
                <li>
                    <a href="{{route('contact_update')}}">Update</a>
                </li>
                <li>
                    <a href="{{route('contact_delete')}}">Delete</a>
                </li>
            </ul>
        </div>

@yield('contact')


</div>
</body>
</html>
