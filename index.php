<?php
//this is example, to use the fancytext function
include('fancytext.php');
if(isset($_GET['t']) && !empty($_GET['t'])){
  $text = $_GET['t'];
} else {
  $text = 'type text here';
}
if(isset($_GET['k']) && !empty($_GET['t'])){
  $type = $_GET['k'];
} else {
  $type = 0;
}
$ft = fancytext($type, $text);
$fontname = $ft[2];
$result = nl2br($ft[1]);
$fontlist = '';
for($i=0;$i<count($fontname);$i++){
  if($i != $type){
  $fontlist .= "<option value='$i'>$fontname[$i]</option>";
  } else {
    $fontlist .= "<option selected value='$i'>$fontname[$i]</option>";
  }
}
?>
<html>
  <head>
    <title>fancy text generator</title>
    <meta name="viewport" content="width=device-width,height=device-height, initial-scale=1.0, maximum-scale=1.0">
  </head>
  <body>
    <form>
      <div style="user-select: all;"><?php print $result; ?></div>
      <textarea name='t'><?php print $text; ?></textarea><br />
      <select name='k'>
        <?php echo $fontlist;?>
      </select>
      <input type='submit' />
    </form>
  </body>
</html>
