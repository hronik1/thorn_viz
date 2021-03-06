<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Thread Networks: cluster viewing within threads</title>
  <meta name="description" content="Demo for How to Build an Interactive Network Visualization.">
  <meta name="author" content="Brent Hronik">

  <meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- CSS concatenated and minified via ant build script-->
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- end CSS-->

  <script src="js/libs/modernizr-2.0.6.min.js"></script>
</head>

<body>

  <div id="container" class="container">
    <header>
    <h1>Thread Networks</h1>
    <p>Network related to a forum thread. Node size related to influence within thread and color associated to cluster within thread.</p>
    </header>

      <div id="thread_selection" class="control">
        <h3>Thread Id</h3>
        <select id="thread_select">
          <?php
            foreach (glob("data/*.json") as $filename) {
              $base = basename($filename);
              echo "<option value='$base'>$base</option>";
            }
          ?>
        </select>

      </div>
      <div id="filters" class="control">
        <h3>Filter</h3>
        <a id="all" class="active">All</a>
        <a id="activity">Activity</a>
        <a id="likers">Likers</a>
        <a id="posters">Posters</a>
        <a id="influential">Influential</a>
      </div>
      <div id="search_section" class="control">
        <form id="search_form" action=""  method="post">
          <p class="search_title">Search <input type="text" class="text-input" id="search" value="" /></p>
        </form>
      </div>
    <div id="main" role="main">
      <div id="vis"></div>
    </div>
    <footer>
    <p>Data from free_pretty_ascii data set.<br/>Edges signify an above average amount of positive sentiment from one node to the other.</p>

    </footer>
  </div> <!--! end of #container -->


  <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> -->
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.2.min.js"><\/script>')</script>


  <script defer src="js/plugins.js"></script>
  <script defer src="js/script.js"></script>
  <script src="js/libs/coffee-script.js"></script>
  <script src="js/libs/d3.v2.js"></script>
  <script src="js/Tooltip.js"></script>
  <script type="text/coffeescript" src="coffee/vis.coffee"></script>

  <script> // Change UA-XXXXX-X to be your site's ID
    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
  </script>


  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
  
</body>
</html>
