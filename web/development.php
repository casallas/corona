<?php
$current_page = 'development';
include 'page_header.inc';
?>

<p>
Corona's development tools are hosted on
<a href="http://sourceforge.net/">SourceForge</a>.
</p>

<ul>
<li><a href="http://sf.net/projects/corona/">Project Page</a></li>
<li><a href="http://sourceforge.net/project/showfiles.php?group_id=44336">Downloads</a></li>
<li><a href="http://sourceforge.net/tracker/?atid=439230&amp;group_id=44336&amp;func=browse">Bug Reports</a></li>
<li><a href="http://sourceforge.net/tracker/?atid=439233&amp;group_id=44336&amp;func=browse">Feature Requests</a></li>
<li><a href="http://sourceforge.net/mail/?group_id=44336">Mailing Lists</a></li>
<li><a href="http://sourceforge.net/pm/?group_id=44336">Task Manager</a></li>
<li><a href="http://cvs.sourceforge.net/cgi-bin/viewcvs.cgi/corona">CVS viewer</a></li>
</ul>

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
