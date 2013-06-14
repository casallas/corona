project(winviewer)

find_package(Corona REQUIRED)

include_directories(${CORONA_INCLUDE_DIR})

set(CMAKE_CXX_FLAGS "-g -Wall")

set(CORELIBS ${CORONA_LIB})

add_executable(winviewer resource.h winviewer.rc winviewer.cpp)
target_link_libraries(winviewer ${CORELIBS})
