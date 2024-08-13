@extends('news.admin.layouts.app')
@section('contant')
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-10">
                  <h1 class="admin-heading">All Users</h1>
              </div>
              <div class="col-md-2">
                  <a class="add-new" href="{{route('AdminNews_add_user')}}">add user</a>
              </div>
              <div class="col-md-12">
                  <table class="content-table">
                      <thead>
                          <th>S.No.</th>
                          <th>Full Name</th>
                          <th>User Name</th>
                          <th>Role</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </thead>
                      <tbody>
                        @foreach ($Scientists as $item)
                            
                       
                          <tr>
                              <td class='id'>{{$item->scientistsID}}</td>
                              <td>{{$item->fname}}  {{$item->lname}}</td>
                              <td>{{$item->user}}</td>
                              <td>{{$item->role}}</td>
                             
                              
                              <td class='edit'><a href='{{route('AdminNews_update_user_DataPost', $item->scientistsID)}}'><i class='fa fa-edit'></i></a></td>
                              <form action="{{ route('AdminNews_delete_user_DataPost', $item->scientistsID) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <td><button type="submit" class="btn btn-danger">Delete</button></td>
                            </form>
                            
                            

                          
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
                  <ul class='pagination admin-pagination'>
                      <li class="active"><a>1</a></li>
                      <li><a>2</a></li>
                      <li><a>3</a></li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
  @endsection
