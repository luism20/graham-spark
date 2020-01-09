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
                            <a class="nav-link active" href="/general-view" aria-controls="announcements" role="tab" data-toggle="tab">                                
                                General view
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" href="/financial-analysis" aria-controls="metrics" role="tab" data-toggle="tab" >
                                Financial Analysis
                            </a>
                        </li>
                    </ul>
                    <h3 class="nav-heading ">
                        Reports
                    </h3>
                    <ul class="nav flex-column mb-4 ">                       
                        <li class="nav-item">
                            <a class="nav-link" href="/balance-sheet" aria-controls="users" role="tab" data-toggle="tab">
                                Balance Sheet
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/pnl" aria-controls="users" role="tab" data-toggle="tab">
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
                    <div role="tabcard" class="tab-pane active" id="metrics" >
                        <iframe id="Example2"
                            title="iframe Example 2"
                            width="400" height="300"
                            style="border:none"
                            src="https://54.159.127.9/single/?appid=0fe6d036-9069-410c-9754-543056198d49&obj=ppJJCcK">
</iframe>
                    </div>
                    
                </div>             
        </div>
    </div>
</home>
@endsection
