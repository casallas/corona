<?php
$current_page = 'home';
include 'page_header.inc';
?>

<h2>Overview</h2>

<p>
Corona is an image input/output library that can read, write, and
manipulate image files in just a few lines of code.  It can write PNG and TGA
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
gcc 2.95.3, gcc 2.96, gcc 3.0.1, and gcc 3.2.  The code has no known endian
issues, so it should work everywhere with few or no changes.
</p>

<h2>News</h2>

<h3>2003.01.05 - Corona 1.0.0 Released</h3>

<p>
The big one oh!  After seven months, a new version of Corona is out.  It has
proven itself to be very mature software, and this release has no very large
changes in functionality.  However, I wholeheartedly recommend that everyone
using 0.2.0 use 1.0.0 instead.  And if you're not using Corona but are looking
to load image files in C++, give it a shot!
</p>

<p>
Changes since 0.2.0:
</p>

<ul>
<li>use __declspec instead of .def files for DLL compatibility with mingw</li>
<li>made interfaces use __stdcall (COR_CALL) in Win32 so they are more compatible with COM</li>
<li>build without PNG or JPEG support if their respective libraries aren't found</li>
<li>added a ConvertPalette function to convert palettes between different pixel formats</li>
<li>added a corona-config script</li>
<li>fix bug in image cloning where the whole palette wouldn't be cloned</li>
<li>added support for BGRA and BGR pixel formats</li>
<li>better TGA support: 32-bit images should be BGRA, not GBRA.  also, properly support flipped and mirrored images.</li>
<li>added Kevin Gadd's change to make SaveImage() for PNG images save the correct pixel format, including the palette.</li>
<li>added GetSupportedReadFormats and GetSupportedWriteFormats for supported format enumeration</li>
<li>renamed GetBytesPerPixel to GetPixelSize</li>
<li>made GetBytesPerPixel public within the API</li>
<li>added a MemoryFile implementation for loading images from a block of memory</li>
<li>removed the FileSystem interface</li>
<li>added test Win32 image viewer</li>
<li>made BMP loader return palettized images when relevant</li>
<li>added JPEG tests to test suite (aegis)</li>
<li>switch the order of the file type and pixel format in OpenImage.  This is so people can do OpenImage("filename", PF_R8G8B8A8) without caring about the file type.</li>
<li>don't crash when loading incomplete JPEGs</li>
<li>added Matt Gambrell's .NET bindings to the VC7 build</li>
<li>const correctness in File::write</li>
</ul>

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
