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
      <th scope="col">   actions </th>
    </tr>
  </thead>
@foreach ($account as  $acc)
   <tr>
      <th >  {{$acc->LastName }} </th>
      <td> {{$acc->firstName }}  </td>
      <td>{{$acc->iban }}  </td>
      <td> {{$acc->balance }} </td>
      
      <td>
      <a class="btn btn-primary" href="">detele</a>
      <a class="btn btn-primary"  href="{{URL::to('addFunds/' .$acc->id)}}">add funds</a>
      <a class="btn btn-primary" style=' margin-top: 5px;' href="">widthdrow funds</a>


        </td>
    </tr>
@endforeach


  </tbody>
</table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
