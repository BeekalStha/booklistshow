<link rel="stylesheet" href="{{ asset('css/form.css') }}">

@if(session('success'))
<h1>{{session('success') }}</h1>
    
  
@endif

<form action="{{route('bookshop.store')}}" method="POST">
    @csrf
    
<form id="user-form">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="{{$bookshops->name ?? NULL}}" required><br><br>
  
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{{$bookshops->email ?? NULL}}" required><br><br>
  
    <label for="address">Address:</label>
    <input type="text" id="address" name="address" value="{{$bookshops->address ?? NULL}}" required><br><br>
  
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" value="{{$bookshops->password ?? NULL}}" required><br><br>
  
    <label for="confirmpassword">Confirm Password:</label>
    <input type="password" id="confirmpassword" name="confirmpassword" value="{{$bookshops->confirmpassword ?? NULL}}" required><br><br>
  
    <label for="gender">Gender:</label>
    <select id="gender" name="gender" required>
      <option value="">Select</option>
      <option value="male" {{ $bookshops ?? false ? ($bookshops->gender == 'male'? 'selected': ''): '' }}>Male</option>
      <option value="female" {{ $bookshops ?? false ? ($bookshops->gender == 'female'? 'selected': ''): '' }}>Female</option>
      {{-- <option value="other" {{ $laravels ?? false ? ($laravells->gender == 'other'? 'selected': ''): '' }}>Other</option> --}}
    </select><br><br>
  
    <label for="phone">Phone Number:</label>
    <input type="number" id="phone" name="phone" required><br><br>
  
    <button type="submit">Submit</button>
  </form>