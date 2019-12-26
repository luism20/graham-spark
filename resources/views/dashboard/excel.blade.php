@extends('spark::layouts.app')

@section('content')
<home :user="user" inline-template>
    <div class="container">
        <!-- Application Dashboard -->
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">
                        <h2>Cool, let's upload that accounting data!</h2>                    
                    </div>
                <script>
                  function handleFiles(files) {
                    if(files.length>0) {
                      document.getElementById("file-name").innerText = files[0].name;
                    }                        
                  }
                </script>
                    <div class="card-body">
                       <div class="tile is-parent">
                               <article class="tile is-child notification onboarding_integration">
                               
                    <form id="form" role="form" method="post" action="excel/import" enctype="multipart/form-data">
                      <div class="file has-name is-fullwidth">
                        <label class="file-label">
                          <input id="file_input" name="file_input" class="file-input" type="file" onchange="handleFiles(this.files)">
                          <span class="file-cta">
                            <span class="file-icon">
                              <i class="fas fa-upload"></i>
                            </span>
                            <span class="file-label">
                              Choose a file…
                            </span>
                          </span>
                          <span id="file-name" class="file-name">
                          </span>
                        </label>
                    </div>
                    <progress class="progress is-success" value="0" max="100" style="margin-top:20px;display:none;">60%</progress>
                    <div class="box-footer" style="margin-top:20px;">
                            @csrf
                            <input type="submit" class="button is-success" value="Submit" />
                        </div>                      
                    </form>
                 
                    <script>
                      $(function() {
                          var bar = $('#bar');
                          var percent = $('#percent');
                          var status = $('#status');

                          $('form').ajaxForm({
                              beforeSend: function() {
                                  status.empty();
                                  document.getElementById("progressBar").style.display = "block";
                                  var percentVal = '0';
                                  bar.html(percentVal);
                                  percent.css("value", percentVal);
                              },
                              uploadProgress: function(event, position, total, percentComplete) {
                                  var percentVal = percentComplete ;
                                  bar.html(percentVal);
                                  percent.css("value", percentVal);
                              },
                              complete: function(xhr) {
                                  var errors = JSON.parse(xhr.responseText);                
                                  status.html(errors.message);
                                  $('#file_input').val('');
                              }
                          });
                      });
                    </script>
                    
                    </article>
                            </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</home>
@endsection
