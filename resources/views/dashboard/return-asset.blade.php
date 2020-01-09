@extends('spark::layouts.app')

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mousetrap/1.6.2/mousetrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
@endpush

@section('content')
<home :user="user" inline-template>
    <div class="spark-screen container">
        <div class="row">
            <!-- Tabs -->
            <div class="col-md-2 spark-settings-tabs">
                <aside>
                    <h3 class="nav-heading ">
                        Dashboard
                    </h3>
                    <ul class="nav flex-column mb-4 ">
                        <li class="nav-item ">
                            <a class="nav-link" href="#announcements" aria-controls="announcements" role="tab" data-toggle="tab">
                                
                                General
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" href="#metrics" aria-controls="metrics" role="tab" data-toggle="tab">
                                
                                Specific
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" href="#users" aria-controls="users" role="tab" data-toggle="tab">
                                
                                Other
                            </a>
                        </li>
                    </ul>
                </aside>
            </div>

            <!-- Tab cards -->
            <div class="col-md-10">
                <div class="tab-content">
                    
                    <!-- Metrics -->
                    <div role="tabcard" class="tab-pane active" id="metrics">
                        @include('dashboard.roa')
                    </div>
                    
                </div>

            <div class="row">
                <div class="tab-content col-md-6">
                    
                    <!-- Metrics -->
                    <div role="tabcard" class="tab-pane active" id="metrics">
                        @include('dashboard.profitability')
                    </div>
                    
                </div>
                
                <div class="tab-content col-md-6">
                    
                    <!-- Metrics -->
                    <div role="tabcard" class="tab-pane active" id="metrics">
                        @include('dashboard.asset_util')
                    </div>
                    
                </div>
                
            </div>

             
        </div>
    </div>
</home>
@endsection
