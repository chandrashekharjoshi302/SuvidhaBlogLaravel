

@extends('contact.app')
@section('contact')


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="{{route('contact_delete_idM')}}" method="post">
        @csrf
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="id_delete" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
@endsection
