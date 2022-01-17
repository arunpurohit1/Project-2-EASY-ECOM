@extends('home')

@section('content')

  <form method = "POST" action="{{ route('userdata.store') }}" >
     @csrf
      <p></p>
     <label for="name">Name</label><br>
     <p></p>
     <input type="text" name="name" required><br>
     <p></p>
     <label for="email">Email</label><br>
     <p></p>
     <input type="text" name="email" required><br>
     <p></p><br>
     <label for="userconfig">User</label><br>
     <p></p>
     <input type="radio" value = "User" name = "userconfig"><br>
     <label for="userconfig">Admin</label><br>
     <p></p>
     <input type="radio" value = "Admin" name = "userconfig"><br>
     <p></p>
     <input type="submit" value="Create"><br>
  </form>

@endsection
