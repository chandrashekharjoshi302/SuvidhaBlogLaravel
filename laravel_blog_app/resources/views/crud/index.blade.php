<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP & Ajax CRUD</title>
  <link rel="stylesheet" href="css/style.css">

  <style>
    body{
  font-family: arial;
  background: #b2bec3;
  padding:0;
  margin: 0;
}
.center{
  text-align: center;
}
#main{
  width: 800px;
  margin: 0 auto;
  background: white;
  font-size: 19px;
}
#header{
  background: #5D3F6A;
  color: #fff;
}
h1{
  float: left;
  margin: 15px;
}
#search-bar{
  padding: 10px 20px 0;
  float: right;
}
#search-bar label{
  font-size: 16px;
  font-weight: bold;
  display: block;
}
#search-bar input{
  width: 250px;
  height: 25px;
  font-size: 18px;
  letter-spacing: 0.8px;
  padding: 3px 10px;
  border-radius: 4px;
  border: 1px solid #000;
}
#search-bar input:focus{
  outline: 0;
}
#table-form{
  background: #FFB3A7;
  padding: 20px 10px;
}
#table-form input[type="text"],#sage{
  height: 25px;
  font-size: 18px;
  padding: 3px 10px;
  margin-right: 17px;
  border-radius: 4px;
  border: 1px solid #5D3F6A;
  outline: 0;
}
#sage{
  width: 40px;
  padding: 3px 0 3px 10px;
}
#scity{
  width: 120px;
}

#save-button,
#edit-submit{
  background:#2c3e50;
  color: #fff;
  font-size: 18px;
  border:0;
  padding: 8px 30px;
  margin-left: 7px;
  border-radius: 3px;
  cursor: pointer;
}
#save-button:focus,
#edit-submit:focus{
  outline: 0;
}

#table-data{
  padding: 15px;
  height: 500px;
  vertical-align: top;
}
#table-data th{
  background: #C93756;
  color: #fff;
}
#table-data tr:nth-child(odd){
  background: #ecf0f1;
}
#table-data h2{
  text-align: center;
}
#success-message,
#error-message{
  background: #DEF1D8;
  color: green;
  font-size: 30px;
  padding: 10px;
  margin: 10px;
  display: none;
  position: fixed;
  right: 15px;
  top: 15px;
  z-index: 20;
}
#error-message{
  background: #EFDCDD;
  color: red;
}
.delete-btn{
  background:#e74c3c;
  color: #fff;
  border:0;
  padding: 4px 10px;
  border-radius: 3px;
  cursor: pointer;
}
.edit-btn{
  background: #27ae60;
  color: white;
  border: 0;
  padding: 4px 10px;
  border-radius: 3px;
  cursor: pointer;
}
#modal{
  background: rgba(0,0,0,0.7);
  position: fixed;
  left: 0;
  top:0;
  width: 100%;
  height: 100%;
  z-index: 10;
  display: none;
}
#modal-form{
  background: #fff;
  width: 30%;
  position: relative;
  top: 20%;
  left: calc(50% - 15%);
  padding: 15px;
  border-radius: 4px;
}
#modal-form h2{
  margin: 0 0 15px;
  padding-bottom: 10px;
  border-bottom: 1px solid #000;
}
#modal-form input[type = "text"],
#modal-form input[type="number"]{
  width: 90%;
  height: 25px;
  font-size: 18px;
  padding: 3px 10px;
  margin-right: 17px;
  border-radius: 4px;
  border: 1px solid #5D3F6A;
  outline: 0;
}

#close-btn{
  background: red;
  color: white;
  width: 30px;
  height: 30px;
  line-height: 30px;
  text-align: center;
  border-radius: 50%;
  position: absolute;
  top: -15px;
  right: -15px;
  cursor: pointer;
}

  </style>
</head>
<body>
  <table id="main" border="0" cellspacing="0">
    <tr>
      <td id="header">
        <h1>PHP REST API CRUD</h1>

        <div id="search-bar">
          <label>Search :</label>
          <input type="text" id="search" autocomplete="off">
        </div>
      </td>
    </tr>
    <tr>
      <td id="table-form">
        <form id="addForm" action="{{route('indexData')}}" method="POST">
            @csrf
          Name : <input type="text" name="sname" id="sname" >
          Age : <input type="number" name="sage" id="sage" >
          City : <input type="text" name="scity" id="scity" >
          <input type="submit" id="save-button" value="Save">
        </form>
      </td>
    </tr>
    <tr>
      <td id="table-data">
        <table width="100%" cellpadding="10px" >
          <tr>
            <th width="40px">Id</th>
            <th>Name</th>
            <th width="50px">Age</th>
            <th width="150px">City</th>
            <th width="60px">Edit</th>
            <th width="70px">Delete</th>
          </tr>
          <tbody id="load-table">
            @foreach ($contactData as $item)
            <tr>
              <td class="center">{{$item->id}}</td>
              <td>{{$item->sname}}</td>
              <td>{{$item->sage}}</td>
              <td>{{$item->scity}}</td>
              <td class="center">
                <a href="{{route('indexEdit' , $item->id)}}" target="_blank" rel="noopener noreferrer">Edit</a>
                </td>
              <td class="center">
                <form action="{{ route('delete' , $item->id ) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="delete-btn" type="submit" data-id="">Delete</button>
                </form>
            </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </td>
    </tr>
  </table>

  <div id="error-message" class="messages"></div>
  <div id="success-message" class="messages"></div>




<script>

</script>
</body>
</html>
