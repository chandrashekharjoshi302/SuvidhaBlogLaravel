

@extends('contact.app')
@section('contact')
    
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="{{route('contact_saveData')}}" method="post">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="address" />
        </div>
        <div class="form-group">
            <label>Class</label>
            <select name="class">
                <option value="" selected disabled>Select Class</option>
                <option value="1">BCA</option>
                <option value="2">BSC</option>
                <option value="3">B.TECH</option>
            </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="phone_number" />
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
@endsection