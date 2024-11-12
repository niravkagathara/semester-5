#include <graphics.h> 

int main() 
{  
	int gd = DETECT, gm;  
	initgraph(&gd, &gm, "");  
	lineto(250, 100); 
	getch(); 
	closegraph(); 
	return 0; 
} 

