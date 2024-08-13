@extends('news.admin.layouts.app')
@section('contant')
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1 class="admin-heading">All Categories</h1>
            </div>
            <div class="col-md-2">
                <a class="add-new" href="{{route('AdminNews_post_to_show')}}">add category</a>
            </div>
            <div class="col-md-12">
                <table class="content-table">
                    <thead>
                        <th>S.No.</th>
                        <th>Category Name</th>
                        <th>Created at</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        @foreach ($Subjectcategory as $item)
                            
                    
                        <tr>
                            <td class='id'>{{$item->subjectcategoriesID}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->created_at}}</td>
                            <td class='edit'><a href='{{route('AdminNews_update_category',$item->subjectcategoriesID)}}'><i class='fa fa-edit'></i></a></td>
                            {{-- <td class='delete'><a href='{{route('AdminNews_update_category',$item->subjectcategoriesID)}}'><i class='fa fa-trash-o'></i></a></td> --}}
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
