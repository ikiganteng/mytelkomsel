<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="http://www.fancyicons.com/free-icons/103/flags/png/48/indonesia_flag_48.png"><title>My Telkomsel Account Checker | MunafikCode</title>
  <link href="https://brobin.github.io/hacker-bootstrap/css/hacker.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery-ui.js"></script>
  <script type="text/javascript" src="js/munafikcode.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    function selectText(containerid) {
    if (document.selection) {
      var range = document.body.createTextRange();
      range.moveToElementText(document.getElementById(containerid));
      range.select();
      } else if (window.getSelection()) {
        var range = document.createRange();
        range.selectNode(document.getElementById(containerid));
        window.getSelection().removeAllRanges();
        window.getSelection().addRange(range);
      }
    }
    </script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="My Telkomsel Account Checker" />
    <meta name="author" content="Yunus Ochills" />
    <title>[+]My Telkomsel Account Checker[+]</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/blockui.js"></script>
</head>

<style media="screen">
  body {
    background: url(https://images8.alphacoders.com/456/456424.jpg) no-repeat center center fixed;
    color: white;
  }
  .form-control[disabled],.form-control[readonly],fieldset[disabled] .form-control {
    background-color: rgba(8, 8, 8, 0.90);
    opacity:1
  }
  .panel {
    background-color: rgba(8, 8, 8, 0.64);
    color: white;
  }
  .form-control {
    background-color: rgba(2, 2, 2, 0.49);
    color: white;
  }
  .form-control::-moz-placeholder {
    color: white;
    opacity:1;
  }
  .form-control:-ms-input-placeholder {
    color: white;
  }
  .form-control::-webkit-input-placeholder {
    color: white;
  }
  .btn-warning,
  .btn-info {
    background-color: rgba(255, 255, 255, 0.82);
  }
  .btn-warning:hover,
  .btn-warning:focus,
  .btn-info:hover,
  .btn-info:focus {
    background-color: rgba(255, 255, 255, 0.50);
  }

  .btn-danger:hover,
  .btn-danger:focus,
  .btn-danger,
  .btn-success:hover,
  .btn-success:focus,
  .btn-success {
    border-color: 0px solid white;
    color: white;
  }
.form-control[disabled], .form-control[readonly], fieldset[disabled] {
    background-color: rgba(255, 255, 255, 0.27);
    opacity: 1;
    color: white;
}
.form-control:focus {
    border-color: white;
    outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(0, 255, 0, 0.6);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px white;
}
</style>
</style>
<body>
  <div class="container">

    <div class="row">
      <div class="col-md-1 col-xs-1 col-lg-1"></div>
      <div class="col-md-11 col-lg-11 col-xs-11" style="margin-top: 2%;">
        <center>
<h2 style="font-family: forte;">[!]My Telkomsel Account Checker[!]</h2>
        </center>
        <hr>
        <div class="panel">
Thanks To : <span class="pull-right">
( <button type="button" class="btn btn-xs btn-success"><a href="https://facebook.com/ngok89/" target="_blank"><font color="black">Contact Here</font></a></button> )</span>
          <div class="panel-heading">
              <marquee behavior="alternate" onmouseover="this.stop()" onmouseout="this.start()" >[!]OchillBintangS. - MunafikCode - CarsonoJaya[Nononymouse] - Bima[PrivX] - GibranTukang Ngupil - DXD-ID - StalkerC0d3 - FakeCodeParty - JSec[!]</marquee>

            
          </div>
          <div class="panel-body">
            <div class="row">
              <textarea name="mailpass" id="mailpass" placeholder="Ochill@munafik.code|MunafikCk2017" class="form-control" rows="7"></textarea><br>
<input type="hidden" name="token" id="token" value="dfbwdfiuwhdfuiwdiufhwdhfwdhfudwhfwh"/>
            </div>
            <div class="row">
<p align="center">
                            Delim: <input name="delim" id="delim" style="text-align: center;display:inline;width: 40px;margin-right: 8px;padding: 4px;" value="|" type="text" class="form-control">
              <button type="button" class="btn btn-success" id="submit">Check</button>
              <button type="button" class="btn btn-danger" id="stop">Stop</button>
                                                        <img id="loading"><br>
            </p>
                        <p align="right">
                            <span id="checkStatus" style="color:limegreen"></span>
                        </p>

            </div>
            <hr>
            <div class="row">
              <div class="col-md-12 col-xs-12 col-lg-12">
                <center>
                  <div id="process_status" style="display: none;">
                    <span id="checkStatus" style="color:limegreen"></span>
                    <br>
                    <img id="loading" src="img/loading.gif" />
                  </div>
                </center>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-1 col-xs-1 col-lg-1"></div>
    </div>
    <div class="row">
      <div class="col-md-1 col-xs-1 col-lg-1"></div>
      <div class="col-md-11 col-xs-11 col-lg-11">
        <div id="result" style="display: none;">
          <div class="row">
            <div class="col-md-12 col-xs-12 col-lg-12">
              <div class="panel">
                <div class="panel-heading">
                  LIVE &nbsp;
                  <span class="label label-success" id="acc_live_count">0</span>
                  <span class="pull-right">
                    <button onclick="selectText('acc_live')" type="button" class="btn btn-xs btn-warning"><i class="fa fa-copy"></i> Copy All</button>
                    <button type="button" id="live_btn-hide" class="btn btn-xs btn-warning"><i class="fa fa-minus"></i> Hide</button>
                  </span>
                </div>
                <div id="body_live" class="panel-body">
                  <div id="acc_live"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 col-xs-12 col-lg-12">
              <div class="panel">
                <div class="panel-heading">
                  DIE &nbsp;
                  <span class="label label-danger" id="acc_die_count">0</span>
                  <span class="pull-right">
                    <button type="button" class="btn btn-xs btn-warning" id="die_hide"><i class="fa fa-minus"></i> Hide</button>
                  </span>
                  <script type="text/javascript">
                    $(document).ready(function() {
                      $('#live_btn-hide').click(function() {
                        $('#body_live').toggle(1000);
                      });
                      $('#die_hide').click(function() {
                        $('#body_hide_die').toggle(1000);
                      });
                      $('#btn-sock-hide').click(function() {
                        $('#body-sock').toggle(1000);
                      });
                      $('#wrong-btn-hide').click(function() {
                        $('#wrong-body-hide').toggle(1000);
                      });
                    });
                  </script>
                </div>
                <div id="body_hide_die" class="panel-body">
                  <div id="acc_die"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 col-xs-12 col-lg-12">
              <div class="panel">
                <div class="panel-heading">
                  WRONG &nbsp;
                  <span id="wrong_count" class="label label-warning">0</span>
                  <span class="pull-right">
                    <button type="button" id="wrong-btn-hide" class="btn btn-xs btn-warning"><i class="fa fa-minus"></i> Hide</button>
                  </span>
                </div>
                <div id="wrong-body-hide" class="panel-body">
                  <div id="wrong"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 col-xs-12 col-lg-12">
              <div class="panel">
                <div class="panel-heading">
                  BAD &nbsp;
                  <span class="label label-info" id="bad_count">0</span>
                  <span class="pull-right">
                    <button type="button" id="btn-sock-hide" class="btn btn-xs btn-warning"><i class="fa fa-minus"></i> Hide</button>
                  </span>
                </div>
                <div id="body-sock" class="panel-body">
                  <div id="acc_bad"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-1 col-xs-1 col-lg-1"></div>
    </div>
  </div>


</body>
</html>
