<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Title</title>
	<?php if (WP_DEBUG) {
   $root = 'http://localhost:5173';
   $css_ext = 'scss';
   $js_ext = 'ts';
   echo '<script type="module" src="http://localhost:5173/@vite/client"></script>';
 } else {
   $root = get_template_directory_uri();
   $css_ext = 'css';
   $js_ext = 'js';
 } ?>
  <link rel="stylesheet" href="<?php echo $root; ?>/assets/style/style.<?php echo $css_ext; ?>">
  <script src="<?php echo $root; ?>/assets/js/script.<?php echo $js_ext; ?>" type="module"></script>
</head>
<body>
<h1>index page</h1>
<h2>background image</h2>
<div class="bg"></div>
<h2>static image</h2>
<img class="static" src="<?php echo get_template_directory_uri(); ?>/images/static.webp" alt="" width="1000" height="667">
<h2>canvas image</h2>
<canvas id="canvas" width="1000" height="667"></canvas>
</body>
</html>
