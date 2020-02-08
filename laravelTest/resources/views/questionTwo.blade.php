@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Question Two</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>Doctor with Most No. of Appointments</h2>   <br> 
                    <table class="table table-striped table-responsive">
                        <thead>
                            <tr>
                                <th>Doctor Name</th>
                                <th>Appointment Count</th>
                            </tr>
                            
                        </thead>
                        <tbody>
                            <tr>
                                <th>{{ $data['name'] }}</th>
                                <td>{{ $data['count'] }}</td>
                              </tr>
                        </tbody>
                    </table>
                        
                    <a href="{{route('home')}}" class="btn btn-info">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
