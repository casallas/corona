<?php
$current_page = 'download';
include 'page_header.inc';
?>

<p>
To be notified when new versions of Corona are released, sign up for the
<a href="http://lists.sourceforge.net/lists/listinfo/corona-annc">announcements
mailing list</a>.
</p>

<h3>1.0.2</h3>

<ul>
<?php
downloadDesc('corona-1.0.2-vc6.zip',     'VC6 Binary Release',
             'Standard Win32 development binaries.');
downloadDesc('corona-1.0.2-vc7.zip',     'VC7 Binary Release',
             'Win32 binaries compiled with .NET support.');
downloadDesc('corona-1.0.2.tar.gz',      'UNIX Source Release',
             './configure && make && make install');
downloadDesc('corona-1.0.2-src.tar.bz2', 'Source Code Snapshot',
             'Raw source tree; if you want to compile in Windows ' .
             'yourself, this is what you want.');
?>
</ul>

<h3>1.0.1</h3>

<ul>
<?php
downloadDesc('corona-1.0.1-vc6.zip',     'VC6 Binary Release',
             'Standard Win32 development binaries.');
downloadDesc('corona-1.0.1-vc7.zip',     'VC7 Binary Release',
             'Win32 binaries compiled with .NET support.');
downloadDesc('corona-1.0.1.tar.gz',      'UNIX Source Release',
             './configure && make && make install');
downloadDesc('corona-1.0.1-src.tar.bz2', 'Source Code Snapshot',
             'Raw source tree; if you want to compile in Windows ' .
             'yourself, this is what you want.');
?>
</ul>

<h3>1.0.0</h3>

<ul>
<?php
download('corona-1.0.0-win32.zip', 'Win32 Binary Release');
download('corona-1.0.0.tar.gz',    'UNIX Source Release (.tar.gz)');
download('corona-1.0.0.tar.bz2',   'UNIX Source Release (.tar.bz2)');
download('corona-1.0.0-src.tbz',   'Source Code Snapshot');
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
