<?php
$current_page = 'development';
include 'page_header.inc';
?>

<p>
Corona development primarily takes place on
<a href="http://sf.net/">SourceForge</a>.  The
<a href="http://sf.net/projects/corona/">project page</a> has
<a href="http://sourceforge.net/project/showfiles.php?group_id=44336">downloads</a>,
<a href="http://sourceforge.net/tracker/?atid=439230&amp;group_id=44336&amp;func=browse">bug reports</a>,
<a href="http://sourceforge.net/tracker/?atid=439233&amp;group_id=44336&amp;func=browse">feature requests</a>,
<a href="http://sourceforge.net/mail/?group_id=44336">mailing lists</a>, a
<a href="http://sourceforge.net/pm/?group_id=44336">task manager</a>, and a web-based
<a href="http://cvs.sourceforge.net/cgi-bin/viewcvs.cgi/corona">CVS viewer</a>.
</p>

<p>
Our development philosophy is that everything should be well-tested.
Corona has a set of
<a href="http://www.extremeprogramming.org/rules/unittests.html">unit tests</a>
(using <a href="http://cppunit.sf.net/">CppUnit</a>)
that verify basic API functionality and correct image loading.  For example, every
image in the <a href="http://entropymine.com/jason/bmpsuite/">bmpsuite</a> is
compared with reference PNG images.  If the loaded images don't match, the test
fails.  When a bug is found, tests are added to make sure it never appears again.
Unit testing guarantees quality software with every release.
</p>

<?php
include 'page_footer.inc';
?>
