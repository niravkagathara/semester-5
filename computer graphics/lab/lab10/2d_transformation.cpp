#include <graphics.h>
#include <conio.h>
#include <math.h>

#define PI 3.14159265

// Function to draw a rectangle with transformations
void drawTransformedRect(int x, int y, int width, int height, double angle, double scale) {
    // Calculate the corners of the rectangle
    int x1 = x - width / 2;
    int y1 = y - height / 2;
    int x2 = x + width / 2;
    int y2 = y - height / 2;
    int x3 = x + width / 2;
    int y3 = y + height / 2;
    int x4 = x - width / 2;
    int y4 = y + height / 2;

    // Apply scaling
    x1 = (int)(x1 * scale);
    y1 = (int)(y1 * scale);
    x2 = (int)(x2 * scale);
    y2 = (int)(y2 * scale);
    x3 = (int)(x3 * scale);
    y3 = (int)(y3 * scale);
    x4 = (int)(x4 * scale);
    y4 = (int)(y4 * scale);

    // Apply rotation (around the center of the rectangle)
    int xc = x, yc = y;
    int newX1 = xc + (x1 - xc) * cos(angle * PI / 180) - (y1 - yc) * sin(angle * PI / 180);
    int newY1 = yc + (x1 - xc) * sin(angle * PI / 180) + (y1 - yc) * cos(angle * PI / 180);
    int newX2 = xc + (x2 - xc) * cos(angle * PI / 180) - (y2 - yc) * sin(angle * PI / 180);
    int newY2 = yc + (x2 - xc) * sin(angle * PI / 180) + (y2 - yc) * cos(angle * PI / 180);
    int newX3 = xc + (x3 - xc) * cos(angle * PI / 180) - (y3 - yc) * sin(angle * PI / 180);
    int newY3 = yc + (x3 - xc) * sin(angle * PI / 180) + (y3 - yc) * cos(angle * PI / 180);
    int newX4 = xc + (x4 - xc) * cos(angle * PI / 180) - (y4 - yc) * sin(angle * PI / 180);
    int newY4 = yc + (x4 - xc) * sin(angle * PI / 180) + (y4 - yc) * cos(angle * PI / 180);

    // Draw the transformed rectangle
    line(newX1, newY1, newX2, newY2);
    line(newX2, newY2, newX3, newY3);
    line(newX3, newY3, newX4, newY4);
    line(newX4, newY4, newX1, newY1);
}

int main() {
    int gd = DETECT, gm;
    initgraph(&gd, &gm, "");

    int x = getmaxx() / 2;
    int y = getmaxy() / 2;
    int width = 100;
    int height = 50;
    double angle = 0;
    double scale = 1.0;

    // Animation loop
    for (int i = 0; i < 360; i++) {
        cleardevice();

        // Apply translation and rotation
        angle += 1;
        scale = 1.0 + 0.5 * sin(i * PI / 180); // Vary scale for effect

        drawTransformedRect(x, y, width, height, angle, scale);

        delay(50);  // Slow down the animation
    }

    getch();
    closegraph();
    return 0;
}

