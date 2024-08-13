@extends('news.admin.layouts.app')
@section('contant')
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Modify User Details</h1>
              </div>
              <div class="col-md-offset-4 col-md-4">
                  <!-- Form Start -->
                  <form  action="{{route('AdminNews_update_user_DataPost' , $Scientists->scientistsID)}}" method ="POST">
                    @csrf
                    @method('PUT')
                      {{-- <div class="form-group">
                          <input type="hidden" name="user_id"  class="form-control" value="1" placeholder="" >
                      </div> --}}
                          <div class="form-group">
                          <label>First Name</label>
                          <input type="text" name="fname" class="form-control" value="{{$Scientists->fname}}" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>Last Name</label>
                          <input type="text" name="lname" class="form-control" value="{{$Scientists->lname}}" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>User Name</label>
                          <input type="text" name="user" class="form-control" value="{{$Scientists->user}}" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>User Role</label>
                          <select class="form-control" name="role" value="{{$Scientists->role}}">
                              <option value="user">normal User</option>
                              <option value="admin">Admin</option>
                          </select>
                      </div>
                      <input type="submit" name="submit" class="btn btn-primary" value="Update" required />
                  </form>
                  <!-- /Form -->
              </div>
          </div>
      </div>
  </div>
  @endsection
