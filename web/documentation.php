<?php
$current_page = 'documentation';
include 'page_header.inc';
?>

<h2>API Reference</h2>

<p>
We use <a href="http://doxygen.org/">Doxygen</a> to generate API
documentation from source code and specially-formatted comments.
This includes documentation for both external interfaces and interfaces
not exported by the library.  Therefore, it is probably more useful
to developers than users of the library, but don't let that stop you
from looking at it.
</p>

<ul>
<li><a href="doxygen/">API Reference (Web)</a></li>
<?php download('corona-doxygen.zip',    'API Reference (.zip format)'); ?>
<?php download('corona-doxygen.tar.gz', 'API Reference (.tar.gz format)'); ?>
<?php download('corona.chm',            'API Reference (HTMLHelp format)'); ?>
</ul>

<p>
More documentation is included in the <a href="download.php">downloads</a>.
</p>

<?php
include 'page_footer.inc';
?>
