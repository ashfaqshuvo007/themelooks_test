@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h2>Questions</h2>
                        <a href="{{ route('Question One')}}" class="btn btn-info">Question 1</a>
                        <a href="{{ route('Question Two')}}" class="btn btn-info">Question 2</a>
                        <a href="{{ route('Question Three')}}" class="btn btn-info">Question 3</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
