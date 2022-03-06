@extends('layout.app')

@section('container')

<div class="row justify-content-center">
 <div class="col-lg-4">

 <!--
  @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  -->

  @if(session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('loginError') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

   <main class="form-signin">
     <h1 class="h3 mb-3 fw-normal text-center">Login User</h1>
     <br>
     <form action="/loginuser" method="post">
       @csrf
       
       
        <div class="form-floating @error('email') is-invalid @enderror">
         <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" autofocus required>
         <label for="email">Email address</label>
         @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
         @enderror
       </div>
     
       <div class="form-floating">
         <input type="password" class="form-control" id="password" name="password" placeholder="Password">
         <label for="password">Password</label>
       </div>
       <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Remember me
        </label>
       </div>
    
       <button class="w-100 btn btn-lg btn-primary " type="submit">Login</button>
     </form>
     <small class="d-block text-center mt-3">Not Registered? <a href="/registeruser">Register Now!</a></small>
     <p class="mt-5 mb-3 text-center text-muted">&copy; 2022</p>
   </main>
 </div>
</div>



@endsection