#include <GL/glut.h>

void init(void) {
    glClearColor(1.0, 1.0, 1.0, 0.0);
    glMatrixMode(GL_PROJECTION);
    glLoadIdentity();
    gluOrtho2D(0.0, 640.0, 0.0, 480.0);
}

void display() {
    glClear(GL_COLOR_BUFFER_BIT);

    // Draw the house body (square)
    glColor3f(0.6, 0.3, 0.0); // Brown color
    glBegin(GL_POLYGON);
    glVertex2i(220, 200);
    glVertex2i(420, 200);
    glVertex2i(420, 350);
    glVertex2i(220, 350);
    glEnd();

    // Draw the roof (triangle)
    glColor3f(1.0, 0.0, 0.0); // Red color
    glBegin(GL_TRIANGLES);
    glVertex2i(320, 420);
    glVertex2i(180, 350);
    glVertex2i(460, 350);
    glEnd();

    // Draw the chimney (small rectangle)
    glColor3f(0.3, 0.3, 0.3); // Dark gray color
    glBegin(GL_POLYGON);
    glVertex2i(370, 400);
    glVertex2i(400, 400);
    glVertex2i(400, 350);
    glVertex2i(370, 350);
    glEnd();

    // Draw the door (rectangle)
    glColor3f(0.3, 0.1, 0.0); // Dark brown
    glBegin(GL_POLYGON);
    glVertex2i(290, 200);
    glVertex2i(350, 200);
    glVertex2i(350, 280);
    glVertex2i(290, 280);
    glEnd();

    glFlush();
}

int main(int argc, char** argv) {
    glutInit(&argc, argv);
    glutInitWindowSize(640, 480);
    glutInitWindowPosition(10, 10);
    glutCreateWindow("House with Chimney");
    init();
    glutDisplayFunc(display);
    glutMainLoop();
    return 0;
}