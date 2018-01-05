<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/node_modules/bootstrap/favicon.ico">
    <title>sc-platform-demo</title>
    <!-- Bootstrap core CSS -->
    <link href="/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="/node_modules/bootstrap/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom styles -->
    <link href="/css/custom.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    
    </style>
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="col-sm-12">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">SocialCare</a>
          </div>
        </div>
      </div>
    </nav>
    <div class="container-fluid main">
      <div class="col-sm-9">
        <div class="col-sm-12">
          <h3>Lab Order Entry <span class="pull-right upd" id="today">Monday, January 4, 2018</span></h3>
        </div>
        <div class="col-sm-12 break"></div>
        <div class="col-sm-6 laborder">
          <div class="well">
            <div class="col-sm-4">
              <div class="name">Patient</div>
            </div>
            <div class="col-sm-8">
              <select>
                <option>John Smith</option>
              </select>
            </div>
            <div class="col-sm-4">
              <div class="name">Physician</div>
            </div>
            <div class="col-sm-8">
              <select>
                <option>Dr. A. Jones</option>
              </select>
            </div>
            <div class="col-sm-4">
              <div class="name">Lab Order</div>
            </div>
            <div class="col-sm-8">
              <select>
                <option>lipid profile</option>
              </select>
            </div>
            <div class="col-sm-12">
              <span class="pull-right"><a class="btn btn-primary">Initiate Request</a></span>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="well">
            
          </div>
        </div>
      </div>
      <div class="col-sm-3 terminal">
        <p id="trm_listening">
          $ Listening...
        </p>
        <p id="trm_receiving">
          $ Receiving data...
        </p>
        <p id="trm_info">
          $ Laboratory Information (CCDA)<br>
          $ . "Chemistries and drug levels"<br>
          $ . id=result1; "total cholesterol, 200 mg/dl"<br>
          $ . id=result2; "HDL, 50 mg/dL"<br>
          $ . id=result3; "LDL, 125 mg/dL"
        </p>
        <p id="trm_tsk_norm">
          $ task: normalization<br>
          $ normalization complete, <span class='green'>0 errors</span>
        </p>
        <p id="trm_tsk_store">
          $ task: store<br>
          $ store complete, <span class='green'>0 errors</span>
        </p>
        <p id="trm_tsk_notify">
          $ task: notification<br>
          $ notification complete, <span class='green'>0 errors</span>
        </p>
        <p id="trm_tsk_output">
          $ task: output to FHIR 3.0<br>
          $ task: output to application<br>
          $ task: output complete, <span class='green'>0 errors</span>
        </p>
        <p id="trm_complete">
          $ Listening...
        </p>
      </div>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
    window.jQuery || document.write('<script src="/node_modules/bootstrap/assets/js/vendor/jquery.min.js"><\/script>')
    </script>
    <script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/node_modules/bootstrap/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>