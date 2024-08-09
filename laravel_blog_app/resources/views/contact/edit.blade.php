
@extends('contact.app')
@section('contact')

<div id="main-content">
    <h2>Update Record</h2>
    <form class="post-form" action="{{route('Contact_EditData', $contact->id)}}" method="post">
        @csrf
        @method('PUT')
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="sid" value=""/>
          <input type="text" name="name" value="{{ old('name', $contact->name) }}"/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="address" value="{{ old('address', $contact->address) }}"/>
      </div>
      <div class="form-group">
          <label>Class</label>
          <select id="class" name="class" class="form-control" required>
            <option value="" disabled>Select Class</option>
            <option value="1" {{ old('class', $contact->class) == '1' ? 'selected' : '' }}>BCA</option>
            <option value="2" {{ old('class', $contact->class) == '2' ? 'selected' : '' }}>BSC</option>
            <option value="3" {{ old('class', $contact->class) == '3' ? 'selected' : '' }}>B.TECH</option>
        </select>
      </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="phone_number" value="{{ old('phone_number', $contact->phone_number) }}"/>
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>
</div>
</div>
@endsection
