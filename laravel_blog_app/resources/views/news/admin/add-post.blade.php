@extends('news.admin.layouts.app')
@section('contant')
  <div id="admin-content">
      <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <h1 class="admin-heading">Add New Post</h1>
             </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form -->
                  <form  action="{{route('AdminNews_add_post_DataPost')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                      <div class="form-group">
                          <label for="post_title">Title</label>
                          <input type="Title" name="title" class="form-control" autocomplete="off" required>
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1"> Description</label>
                          <textarea name="descriptions" class="form-control" rows="5"  required></textarea>
                      </div>
                      {{-- scientists --}}
                      <div class="form-group">
                          <label for="exampleInputPassword1">Scientists</label>
                          <select name="subjectcategoriesID" class="form-control">
                            <option value="" selected> Select Category</option>
                            @foreach ($Subjectcategory as $item)
                                
                           
         
                              <option value="1" >{{$item->subjectcategoriesID}}</option>
                          
                              @endforeach
                          </select>
                      </div>
                      {{-- subjectcategories --}}

                      <div class="form-group">
                        <label for="exampleInputPassword1">Subjectcategories</label>
                        <select name="scientistsID" class="form-control">
                            <option value="" selected> Select Category</option>

                            @foreach ($Scientists as $item)
                                
                          
                            <option value="1" >{{$item->scientistsID}}</option>
                            @endforeach
                        </select>
                    </div>
                      {{-- <div class="form-group">
                          <label for="exampleInputPassword1">Post image</label>
                          <input type="file" name="image" required>
                      </div> --}}
                      <input type="submit" name="submit" class="btn btn-primary" value="Save" required />
                  </form>
                  <!--/Form -->
              </div>
          </div>
      </div>
  </div>
  @endsection
