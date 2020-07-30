@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               

            <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Last Name</th>
      <th scope="col">First Name</th>
      <th scope="col">IBAN</th>
      <th scope="col">banlance</th>
       <th scope="col">add</th>
      <th scope="col">  action  </th>
    </tr>
  </thead>

   <tr>
      <td > {{$account->LastName }} </td>
      <td>  {{$account->firstName }} </td>
      <td> {{$account->iban }} </td>
      <td> {{$account->balance }}  </td>
      <form action="" method= 'post'>
      <td>  <input type='text'> </td>
      <td> <button type="submit" class="btn btn-primary">add funds</button>  </td>
      </form>
    </tr>



  </tbody>
</table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
