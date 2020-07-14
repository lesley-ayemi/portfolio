@extends('layouts.backend')

@section('content')
<div class="row">
    <div class="col-md-12">

<!-- Basic Data Tables -->
<!--===================================================-->
<div class="panel">
   <div class="panel-heading">
       <h3 class="panel-title">Contact Us Request</h3>
   </div>
   <div class="panel-body">
       <table id="demo-dt-basic" class="table table-striped table-bordered">
           <thead>
               <tr>
                   <th>Name</th>
                   <th class="min-tablet">Email</th>
                   <th class="min-tablet">Message</th>
                   <th>Requested Date</th>
                   {{-- <th class="min-desktop">Start date</th>
                   <th class="min-desktop">Salary</th> --}}
               </tr>
           </thead>
           <tbody>
               @foreach ($users as $user)
               <tr>
                   <td>{{$user->name}}</td>
                   <td>{{$user->email}}</td>
                   <td>{{$user->message}}</td>
                   <td>{{$user->created_at->diffForHumans()}}</td>
               </tr>
               @endforeach
           </tbody>
        </table>
        {{$users->links()}}
   </div>
</div>
</div>
    
@endsection