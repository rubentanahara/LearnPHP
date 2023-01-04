<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP website</title>
    <link rel="stylesheet" type="text/css" href="./styles.css"> 
  </head>
  <body id="layout-content"> 
    <section>
      <h2>Basic PHP syntax</h2>
      <h1>Printing Hello world</h1>

<h3>Code</h3>
<div class="phpcode">
<code>
<?php
$code = '<?php echo "Hello, World!"; ?>';
highlight_string($code);
?>
</code>
</div>
<h3>Output</h3>
<div class ="phpcode">
<?php echo "Hello, World!"; ?> 
</div>
      <br>
      <h1>PHP Opening and Closing Tags</h1>
      <p>
      Three types of tag are available in php:
<?php 
$code = '<?php ?>';
?>
      <br>
        1.normal tag(<?php highlight_string($code) ?>)
<?php 
$code = '<?= ?>';
?>
      <br>
        2.short echo(<?php highlight_string($code) ?>)
<?php 
$code = '<? ?>';
?>
      <br>
        3.short tag(<?php highlight_string($code) ?>)
      </p>
<span>Examples:</span>
<br>
      <span>1 .</span>
<?php
$code = '<?php echo "if you want to serve PHP code in XHTML or XML documents, use these tags"; ?>';
highlight_string($code);
?>
      <br>
      <span>2 .</span>
<?php
$code = 'You can use the short echo tag to <?= "print this string" ?>.';
highlight_string($code);
?>
      <br>
      &nbsp;&nbsp;&nbsp;&nbsp;
<?php
$code = 'Its equivalent to <?php echo "print this string" ;?>';
highlight_string($code);
?>
     <br>
    <span>3 .</span>
<?php
$code = '<? echo "this code is within short tags, but will only work ".';
highlight_string($code);
$code2 = '"if short_open_tag is enabled";?>';
highlight_string($code2)
?>
<p>This is going to be ignored by PHP and displayed by the browser.</p>
<?php 
$code = "<?php echo 'While this is going to be parsed.'; ?>";
highlight_string($code)
?>
<br>
<?php echo 'While this is going to be parsed.'; ?>
<p>This will also be ignored by PHP and displayed by the browser.</p>
<br>
<h1>Instruction separation</h1>
<p>
PHP requires instructions to be terminated with a semicolon at the end of each statement. The closing tag of a block of PHP code automatically implies a semicolon;
</p>
<h3>Code</h3>
<span>


</span>
<h3>Output</h3>


    </section>  
</body>
</html>
