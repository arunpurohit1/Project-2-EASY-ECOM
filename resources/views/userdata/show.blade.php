
@extends('home')

@section('content')



 @if ($userdatum->userconfig == 'User' )
  <ul>
      <ol>
        <h1>{{ $userdatum->name }} Details</h1>
          <h2>{{ $userdatum->name }}</h2>
          <h2>{{ $userdatum->email }}</h2>
          <h2>{{ $userdatum->userconfig }}</h2>
          <h2>{{ $userdatum->created_at }}</h2>
      </ol>
  </ul>
@endif



@if ($userdatum->userconfig == 'Admin' )
<h1>All Users Details</h1>
  @foreach ($userdatum::all() as $user)
  <ul>
    <ol>
        <h2>{{ $user->name }}</h2>
        <h2>{{ $user->email }}</h2>
        <h2>{{ $user->userconfig }}</h2>
        <h2>{{ $user->created_at }}</h2>
    </ol>
</ul>

  @endforeach

@endif
@endsection('content')
