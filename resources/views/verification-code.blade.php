@extends('layouts.app2')

@section('content')
<a href="/register"><h6 id="goback"><i class="fas fa-arrow-circle-left"></i> Go back</h6></a>

<div class="verify-form">
   <div class="form">
      <h5>Email Verification</h5>
      <p>Verification Code has been sent to your email !</p>
      <form method="POST" action="">
         @csrf
          <input type="text" name="code" id="code" placeholder="Enter Code">
          <button type="submit">submit</button>
      </form>  
      <p>Didn't recieved code ? <a href="/verification">Resend</a></p>
   </div>
</div>


@endsection