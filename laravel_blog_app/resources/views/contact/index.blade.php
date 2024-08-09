

@extends('contact.app')
@section('contact')

<div id="main-content">
    <h2>All Records</h2>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>

            @foreach ($contactData as $item)
                
           
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->address}}</td>
                <td>{{$item->class}}</td>
                <td>{{$item->phone_number}}</td>
                <td>
                    <a href='{{route('contact_edit',$item->id)}}'>Edit</a>

                    <form action="{{route('contact_delete_id',$item->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
               
                    </form>
                    
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection