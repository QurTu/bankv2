@extends('layouts.app')

@section('content')
<div style="width: 500px;">      >

<form class="text-center  p-5" action=" {{route('saveAcc')}} "   method="post">
@c
<p class="h4 mb-4">Add new account</p>


<input type="text" name="firstName"class="form-control mb-4" placeholder="Name" > 
<input type="text" name="lastName" class="form-control mb-4" placeholder=" Last Name"> 
<input type="text" name="id"class="form-control mb-4" placeholder="Personal ID"> 
<input type="text" name="iban"class="form-control mb-4" placeholder="IBAN"> 



<!-- Sign in button -->
<button class="btn btn-info btn-block" type="submit">Add Account</button>

@csrf
</form>
<!-- Default form subscription -->
</div>
@endsection