@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Question One</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>Showing All Appointments For October</h2>   <br> 
                    <table class="table table-striped table-responsive">
                        <thead>
                            <tr>
                                <th>Doctor Name</th>
                                <th>Patient Name</th>
                                <th>Slot Date Time</th>
                            </tr>
                            
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <th>{{ $item->doctor_name }}</th>
                                <td>{{ $item->patient_name }}</td>
                            <td>{{ $item->date }} &nbsp; {{ $item->time }}</td>
                              </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                        
                    <a href="{{route('home')}}" class="btn btn-info">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
