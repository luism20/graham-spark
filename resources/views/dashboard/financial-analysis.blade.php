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
                            <a class="nav-link" href="/general-view">                                
                                General view
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link active" href="/financial-analysis" >
                                Financial Analysis
                            </a>
                        </li>
                    </ul>
                    <h3 class="nav-heading ">
                        Reports
                    </h3>
                    <ul class="nav flex-column mb-4 ">                       
                        <li class="nav-item">
                            <a class="nav-link" href="/balance-sheet" >
                                Balance Sheet
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/pnl" >
                                Profit and Loses
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
                        @include('dashboard.roe')
                    </div>
                    
                </div>

            <div class="row">
                <div class="tab-content col-md-4">
                    
                    <!-- Metrics -->
                    <div role="tabcard" class="tab-pane active" id="metrics">
                        @include('dashboard.cashflow')
                    </div>
                    
                </div>
                
                <div class="tab-content col-md-4">
                    
                    <!-- Metrics -->
                    <div role="tabcard" class="tab-pane active" id="metrics">
                        @include('dashboard.roa')
                    </div>
                    
                </div>
                <div class="tab-content col-md-4">
                    
                    <!-- Metrics -->
                    <div role="tabcard" class="tab-pane active" id="metrics">
                        @include('dashboard.rona')
                    </div>                    
                    
                </div>
            </div>

             
        </div>
    </div>
</home>
@endsection
