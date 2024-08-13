@extends('news.admin.layouts.app')
@section('contant')
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="adin-heading"> Update Category</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
                  <form action="{{route('AdminNews_update_category')}}" method ="POST">
                    @csrf
                 
                      <div class="form-group">
                          <label>Category Name</label>
                          <input type="text" name="name" class="form-control" value="Html"  placeholder="" required>
                      </div>
                      <input type="submit" name="sumbit" class="btn btn-primary" value="Update" required />
                  </form>
                </div>
              </div>
            </div>
          </div>
          @endsection
