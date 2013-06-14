# Minimal corona build
# CMake cross-platform build system recipe
#
# 2012 Juan Sebastian Casallas
# <casallas@iastate.edu>
#
# Iowa State University HCI Graduate Program/VRAC
cmake_minimum_required(VERSION 2.6)

OPTION(BUILD_CORONA_LIBRARY "Build the corona library." ON)
OPTION(BUILD_CORONA_EXAMPLES "Build the glut example." OFF)

IF(BUILD_CORONA_LIBRARY)
  	add_subdirectory(src)
ENDIF(BUILD_CORONA_LIBRARY)

IF(BUILD_CORONA_EXAMPLES)
  	add_subdirectory(examples)
ENDIF(BUILD_CORONA_EXAMPLES)