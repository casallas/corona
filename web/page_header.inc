<?php
include 'doctype.inc';

# generate a link to a sourceforge file
function download($file, $desc) {
  echo '<li><a href="http://prdownloads.sourceforge.net/corona/' . $file .
       '?download">' . $desc . '</a></li>';
}

function downloadDesc($file, $desc, $extra) {
  echo '<li><a href="http://prdownloads.sourceforge.net/corona/' . $file .
       '?download">' . $desc . '</a> - <i>' . $extra . '</i></li>';
}

?>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<?php
echo "<title>corona | $current_page</title>"
?>
<link rel="stylesheet" href="style.css" type="text/css" title="default" />
</head>
<body>

<?php
include 'menu.inc'
?>

<div id="body">

<h1>
<?php echo $current_page; ?>
</h1>
