<?php
$current_page = 'lists';
include 'page_header.inc';

function mailing_list($name, $description) {
  $mailto    = 'mailto:' . $name . '@lists.sf.net';
  $subscribe = 'http://lists.sourceforge.net/lists/listinfo/' . $name;
  $archive   = 'http://www.geocrawler.com/redir-sf.php3?list=' . $name;
    
  echo '<tr>';
  echo "<td><a href=\"$mailto\">$name</a></td>";
  echo '<td>';
  echo "[<a href=\"$subscribe\">subscribe</a>]<br />";
  echo "[<a href=\"$archive\">archive</a>]";
  echo '</td>';
  echo "<td>$description</td>";
  echo '</tr>';
}

echo '<table>';
mailing_list('corona-annc', 'Announcements and news related to Corona.  ' .
             'This is a low-volume list for those who are only interested in ' .
             'new releases.');
mailing_list('corona-users', 'User information and discussion.  Use this list ' .
             'to get in contact with other Corona users.');
mailing_list('corona-devel', 'Developer discussion.  This list is for discussion ' .
             'about the development process and other topics the average user ' .
             'does not care about.  Use this list to reach the developers.');
mailing_list('corona-commits', 'Relatively high-volume list that logs all CVS ' .
             'commits.  Subscribe to this list if you want to see every change ' .
             'to the source code when they happen.');
echo '</table>';

include 'page_footer.inc';
?>
