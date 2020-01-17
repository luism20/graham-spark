@extends('spark::layouts.app')

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mousetrap/1.6.2/mousetrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
@endpush

<style type="text/css">
iframe {
  border: none;
  width: 100%;
  height: 500px;
}

@media (min-width: 1024px) {
  .content_viewport {
    border: 0px none;
    height: 900px;
width: 100%;
  }
}
@media (max-width: 1023px) {
  .content_viewport {
    border: 0px none;
    height: 900px;
width: 100%;  }
}
@media (min-width: 768px) {
  .content_viewport {
    border: 0px none;
    height: 900px;
width: 100%;  }
}
</style>

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
                            <a class="nav-link active" href="/general-view" >                                
                                General view
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" href="/financial-analysis" >
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
                                Profit and Loss
                            </a>
                        </li>                        
                    </ul>
                </aside>
            </div>

            <!-- Tab cards -->
            <div class="col-md-10">
                <div class="tab-content">
                    
                    <!-- Metrics -->
                    <div role="tabcard" class="tab-pane active" id="metrics" >
                        <!--<iframe src="https://sense-demo.qlik.com/single/?appid=133dab5d-8f56-4d40-b3e0-a6b401391bde&sheet=kHgmg" frameborder="0"></iframe>-->
                    </div>
                    
                </div>             
        </div>
    </div>
</home>
@endsection
