<?php
$current_page = 'home';
include 'page_header.inc';
?>

<h2>Overview</h2>

<p>
Corona is an image input/output library that can read, write, and
manipulate image files in just a few lines of code.  It can write PNG
files, and read PNG, JPEG, PCX, BMP, TGA, and GIF.  Corona was designed to be
easy to use, and exports a straightforward C++ API.  With just a few lines
of C++, you can add image loading to your application.
</p>

<p>
Corona is <a href="http://opensource.org/">open source</a> and licensed under
the <a href="http://opensource.org/licenses/zlib-license.html">zlib license</a>.
In a nutshell, this means that you can use the code however you wish, as
long as you don't claim it as your own.
</p>

<p>
Corona is highly portable and works on Windows, Linux, and IRIX.  It
has been tested with the following compilers:  Visual C++ 6, Visual C++ 7,
gcc 2.95.3, gcc 2.96, and gcc 3.0.1.  The code has no known endian issues,
so it should work everywhere with few or no changes.
</p>

<h2>News</h2>

<h3>2002.06.05 - Corona 0.2.0 Released</h3>

<p>
Corona 0.2.0 is out.  A new web page came with it.  :)  Here is what changed
since 0.1.0.
</p>

<ul>
<li>added GLUT example</li>
<li>added support for the entire BMP spec</li>
<li>added comprehensive test suite</li>
<li>four build systems: VC++ 6, VC++ 7, SCons, autoconf/automake</li>
<li>builds on IRIX</li>
<li>doxygen documentation</li>
<li>added image creation and cloning functionality</li>
<li>fixed possible crash in PNG exporter</li>
<li>added support for reading TGA and GIF images</li>
<li>fixed several PCX loading bugs</li>
<li>added support for palettized images</li>
</ul>

<?php
include 'page_footer.inc';
?>
