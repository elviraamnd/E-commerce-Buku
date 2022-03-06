@extends('layout.app')

@section('container')

<div class="row justify-content-center">

@if(session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
 
  <main class="form-registration">
    <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
    <br>
    <form action="/registeruser" method="post" enctype="multipart/form-data">
    @csrf
      <div class="row justify-content-center">
        <div class="col-lg-3">   
          <div class="text-center" id>
            <img class="rounded-circle mt-5 display:block; margin:auto;" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
            <p>Profile Image</p>
            <input type="file" id="photo" name="photo">
            <div class="text-danger">
              @error('photo')
                {{ $message }}
              @enderror
            </div>
          </div>       
          <div class="form-floating @error('name') is-invalid @enderror">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
              <label for="name">Name</label>
              <div class="text-danger">
                @error('name')
                  {{ $message }}
                @enderror
              </div>
          </div>
          <div class="form-floating @error('email') is-invalid @enderror">
              <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
              <label for="floatingInput">Email Address</label>
                @error('email')
                  {{ $message }}
                @enderror 
          </div>
          <div class="form-floating @error('password') is-invalid @enderror">
              <input type="password" class="form-control" name="password" id="password" placeholder="Password">
              <label for="floatingPassword">Password</label>
                @error('password')
                  {{ $message }}
                @enderror 
          </div>
          <br>
          <p>Status</p>
          <select class="form-select form-select-sm" id="status" name="status" aria-label=".form-select-sm example @error('status') is-invalid @enderror">
              <!--<option selected>Status</option> -->
              <option value="1">Aktif</option>
              <option value="2">Tidak Aktif</option>
              @error('status')
                  {{ $message }}
              @enderror 
          </select>
          <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
        </div>
      </div>
    </form>
    <small class="d-block text-center mt-3">Already Registered? <a href="/loginuser">Login Now!</a></small>
    <p class="mt-5 mb-3 text-center text-muted">&copy; 2022</p>
  </main>
</div>


@endsection