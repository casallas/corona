project(formats)

find_package(Corona REQUIRED)

include_directories(${CORONA_INCLUDE_DIR})

set(CMAKE_CXX_FLAGS "-g -Wall")

set(CORELIBS ${CORONA_LIB})

add_executable(formats formats.cpp)
target_link_libraries(formats ${CORELIBS})
