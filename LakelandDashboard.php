<!--include head
------------------------>
<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/header.php";  include_once($path); ?>
<title>Field Day - Open Game Data</title>
</head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<body class="singleapp page opengamedata" onload="onload()">
<!--include Main Navigation
------------------------>
<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/main-nav.php";  include_once($path); ?>

<div id="mainwrapper">
  <!--Start page content
  ------------------------>
  <section class="singlehero page_hero">
    <div class="info">
      <h1 class="corrected">Open Game Data</h1>
      <p class="">These anonymous data are provided in service of future educational data mining research. They are made available under the <a target="_blank" href="https://creativecommons.org/publicdomain/zero/1.0/">Creative Commons CCO 1.0 Universal license.</a> Source code for this website and related data processing is available on <a target="_blank" href="https://github.com/fielddaylab/opengamedata">github</a></p>
    </div>
    <div class="graphic">
      <img class="graph_img" src="/assets/img/illustrations/mountainrange.png">
    </div>
  </section>
  <div class="row">
    <div class="col-xl-2 col-md-3 col-sm-4 col-xs-12 ui_column">
      <h2 id="whatis">Choose a session:</h2>
      <p>View sessions by Player ID:
        <input type="checkbox" id="require_pid" value="View only sessions with Player IDs">
      </p>
      <p>SIMULATION MODE:
        <input type="checkbox" id="sim_mode" value="SIMULATION MODE" checked>
      </p>
      <ul class="session_list" id="session_list"></ul>
    </div>
    <div class="col-xl-8 col-md-7 col-sm-5 col-xs-12 ui_column">
      <div class="game_info">
        <div class="row">
          <div class="col-md-4">
            <img id="rt_game_img" src="" alt="">
          </div>
          <div class="col-md-8">
            <h2 id="rt_game_title">Realtime Player Data</h2>
            <a id="rt_game_events_readme" href="" target="_blank">View README for the game events</a><br>
            <a id="rt_game_features_readme" href="" target="_blank">View README for the processed features</a><br>
            <a id="rt_game_link" href="" target="_blank">Play the game</a>
          </div>
        </div>
        <div class="row" id="playstats_row">
          <div class="playstats" id="playstats"></div>
        </div>
      </div>
      <div class="pub-wrap">
        <h3>About Realtime Player Data</h3>
        <p class="small">Field Day Lab develops games and uses them as instruments to understand learning. We use game analytics, including machine learning, to understand how players interact with our games. Our research includes desktop, mobile, virtual reality, and augmented reality games. </p>
        <p class="small">This page uses fontawesome.</p>
      </div>
    </div>
  </div>
  <span class="spreader"></span>
  <!----------------------
  End page content -->
</div>

<!--include footer
------------------------>
<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/footer.php";  include_once($path); ?>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/c3/0.4.10/c3.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.6/d3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/c3/0.4.10/c3.min.js"></script>
<script src="realtime_config.js"></script>
<script src="games_list.js"></script>
<script src="RTServer.js"></script>
<script src="ViewRenderer.js"></script>
<script src="PlayerList.js"></script>
<script src="PlayerDashboard.js"></script>
<script src="dashboard_page.js"></script>
<script>
$(function() {

    // Call Gridder
    $('.gridder').gridderExpander({
        scroll: true,
        scrollOffset: 100,
        scrollTo: "panel",                  // panel or listitem
        animationSpeed: 900,
        animationEasing: "easeInOutExpo",
        showNav: true,                      // Show Navigation
        nextText: "Next",                   // Next button text
        prevText: "Previous",               // Previous button text
        closeText: "Close",                 // Close button text
        onStart: function(){
            //Gridder Inititialized
        },
        onContent: function(){
            //Gridder Content Loaded
        },
        onClosed: function(){
            //Gridder Closed
        }
    });
});
</script>
</body>
</html>