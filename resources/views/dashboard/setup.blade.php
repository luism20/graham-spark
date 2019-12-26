@extends('spark::layouts.app')

@section('content')

<home :user="user" inline-template>
    <div class="container">
        <!-- Application Dashboard -->
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">
                        <h2>{{__('Welcome, let\'s get you setup!')}}</h2>
                    </div>

                    <div class="card-body">
                        <a href="#">Quickbooks</a>
                    </div>

                    <div class="card-body">
                        <a href="/excel">Excel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</home>
@endsection
