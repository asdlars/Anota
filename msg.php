<?php
if ($_GET['m']=="") {
  $msg = "Hola, algo salió mal :( intenta de nuevo, gracias.";
  $firma = "Larry";
} else {
  $msg = $_GET['m'];
  $firma = $_GET['f'];
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/jumbotron.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/msg.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <div class="links"><a href="/">&larr; volver a anota.drop.cl</a></div>
  <div class="message-box fill"><?php echo $msg; ?></div>
  <div class="firma"><?php echo $firma; ?></div>
  <div class="notice">Para pantalla completa cliquea el mensaje</div>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <script src="/js/jquery-full-house.js"></script>
    <script type="text/javascript" src="/js/jquery.fullscreen-0.3.5.min.js"></script>

  <script>
  // fixes stupid ILLEGAL TOKEN ERROR
  function initialize() {
    $(".simplest .fill, .another .fill").each(function() {
      var element = $(this)
      options = {}

      if (element.hasClass("collapse"))
      options.collapse = true

      element.fill_with_text(options)
    })

    var to_be_filled = $(".advanced .fill")

    to_be_filled.eq(0).fill_with_text({ Font_size_increment_step: 10 }) // also you can try {  } for binary search
    to_be_filled.eq(1).fill_with_text()
    to_be_filled.eq(2).fill_with_text({ algorythm: "Binary" }) // default algorythm, but not so easy to understand
    to_be_filled.eq(3).fill_with_text({ algorythm: "Linear" }) // slow algorythm, but basic for understanding
  }

  $(initialize);

  $(window).resize(function(){
    $(".fill").fill_with_text();
  });

  </script>

  <script>
    $(".fill").fill_with_text();
    $(".fill").click(function() {
     $(".fill").fullscreen();
     $(".fill").fullscreen();
    });
  </script>
  </body>
</html>
