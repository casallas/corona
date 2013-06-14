cmake_minimum_required(VERSION 2.6)

list(APPEND CMAKE_MODULE_PATH "${CMAKE_SOURCE_DIR}/cmake")

OPTION(BUILD_FORMATS_EXAMPLE "Build the formats example." ON)
OPTION(BUILD_GLUT_EXAMPLE "Build the glut example." ON)

IF(WIN32)
  	OPTION(BUILD_WINVIEWER_EXAMPLE "Build the winviewer example." ON)
ENDIF(WIN32)

IF(BUILD_FORMATS_EXAMPLE)
  	add_subdirectory(formats)
ENDIF(BUILD_FORMATS_EXAMPLE)

IF(BUILD_GLUT_EXAMPLE)
  	add_subdirectory(glut)
ENDIF(BUILD_GLUT_EXAMPLE)

IF(BUILD_WINVIEWER_EXAMPLE)
  	add_subdirectory(winviewer)
ENDIF(BUILD_WINVIEWER_EXAMPLE)