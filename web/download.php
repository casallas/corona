<?php
$current_page = 'download';
include 'page_header.inc';
?>

<p>
To be notified when new versions of Corona are released, sign up for the
<a href="http://lists.sourceforge.net/lists/listinfo/corona-annc">announcements
mailing list</a>.
</p>

<h3>1.0.0</h3>

<ul>
<?php
download('corona-1.0.0-win32.zip', 'Win32 Binary Release');
download('corona-1.0.0.tar.gz',    'UNIX Source Release (.tar.gz)');
download('corona-1.0.0.tar.bz2',   'UNIX Source Release (.tar.bz2)');
download('corona-1.0.0-src.tbz',   'CVS Tree Snapshot');
?>
</ul>

<h3>Older Files</h3>

<p>
All files are available at the <a
href="http://sourceforge.net/project/showfiles.php?group_id=44336">Corona
project page</a>.
</p>

<?php
include 'page_footer.inc';
?>
