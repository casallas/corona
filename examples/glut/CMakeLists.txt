project(glutExample)

find_package(GLUT REQUIRED)
find_package(OpenGL REQUIRED)
find_package(Corona REQUIRED)

include_directories(${CORONA_INCLUDE_DIR})

set(CMAKE_CXX_FLAGS "-g -Wall")

set(CORELIBS ${GLUT_LIBRARY} ${OPENGL_LIBRARY} ${CORONA_LIB})

add_executable(glutExample glut.cpp)
target_link_libraries(glutExample ${CORELIBS})
