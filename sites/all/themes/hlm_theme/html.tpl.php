<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
  <head>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title><?php print $head_title; ?></title>
 <?php print $head; ?>
  <?php print $styles; ?>
  <!--[if IE ]>
	  <link rel="stylesheet" href="http://hlm.as/site/sites/all/themes/hlm_theme/css/ie.css" />
  <![endif]-->
  <!--[if lte IE 7]>
	  <link rel="stylesheet" href="http://hlm.as/site/sites/all/themes/hlm_theme/css/ie7.css" />
  <![endif]-->
   <?php print $scripts; ?>
  </head>
<body class="<?php print $classes; ?>">
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  <script type="text/javascript"> Cufon.now(); </script>
  <script type="text/javascript">
  
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-27829038-1']);
    _gaq.push(['_trackPageview']);
  
    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  
  </script>
</body>
</html>