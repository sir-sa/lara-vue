@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                </div>

            </div>
         
        </div>
        <div class="col-md-8 ml-15">
            <div class="card-body">
                <task-list/>
            </div>
            
        </div>
         
        <task-form/>
         
    </div>
</div>
@endsection
