<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div id="modal">
        <div id="modal-form">
          <h2>Edit Form</h2>
          <form action=" {{route('indexUpdate',$contact->id )}}" id="edit-form" method="POST">
            @csrf
            @method('PUT')
          <table cellpadding="10px" width="100%">
            <tr>
              <td width="90px">First Name</td>
              <td><input type="text" name="sname" id="edit-name" value="{{$contact->sname ?? " "}}">
              </td>
            </tr>
            <tr>
              <td>Age</td>
              <td><input type="number" name="sage" id="edit-age" value="{{$contact->sage ?? " "}}"></td>
            </tr>
            <tr>
              <td>City</td>
              <td><input type="text" name="scity" id="edit-city" value="{{$contact->scity ?? " "}}"></td>
            </tr>
            <tr>
              <td></td>
              <td><input type="submit" id="edit-submit" value="Update"></td>
            </tr>
          </table>
          </form>
        </div>
      </div>
</body>
</html>