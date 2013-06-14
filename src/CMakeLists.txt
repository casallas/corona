# Minimal corona build
# CMake cross-platform build system recipe
#
# 2012 Juan Sebastian Casallas
# <casallas@iastate.edu>
#
# Iowa State University HCI Graduate Program/VRAC
cmake_minimum_required(VERSION 2.6)
project(Corona)

find_package(JPEG REQUIRED)
find_package(PNG REQUIRED)
find_package(GIF REQUIRED)

set(CMAKE_CXX_FLAGS "-g -Wall")

set(CORELIBS ${JPEG_LIBRARIES} ${PNG_LIBRARIES} ${GIF_LIBRARIES})

OPTION(BUILD_CORONA_SHARED "Build the Corona libraries shared." ON)

IF(BUILD_CORONA_SHARED)
  SET(CORONA_LIBRARY_TYPE SHARED)
ELSE(BUILD_CORONA_SHARED)
  SET(CORONA_LIBRARY_TYPE STATIC)
ENDIF(BUILD_CORONA_SHARED)

include_directories(${JPEG_INCLUDE_DIR} ${PNG_INCLUDE_DIR} ${GIF_INCLUDE_DIR})

add_library(corona ${CORONA_LIBRARY_TYPE} 
	Debug.h
	MemoryFile.h
	Open.h
	Save.h
	SimpleImage.h
	Types.h
	Utility.h
	corona.h
	Convert.cpp
    Corona.cpp
    Debug.cpp
    DefaultFileSystem.cpp
    MemoryFile.cpp
    OpenBMP.cpp
    OpenGIF.cpp
    OpenJPEG.cpp
    OpenPCX.cpp
    OpenPNG.cpp
    OpenTGA.cpp
    SaveJPEG.cpp
    SavePNG.cpp
    SaveTGA.cpp)
target_link_libraries(corona ${CORELIBS})

install(TARGETS corona DESTINATION lib)
install (FILES corona.h DESTINATION include)
