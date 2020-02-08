@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Question Three</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>Showing All Appointments hours for Doctors</h2>   <br> 
                    <table class="table table-striped table-responsive">
                        <thead>
                            <tr>
                                <th>Doctor Name</th>
                                <th>Total Duration</th>
                            </tr>
                            
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <th>{{ $item->doctor_name }}</th>
                                <td>{{ $item->duration }}</td>
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
