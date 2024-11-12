#include<stdio.h>
#include<graphics.h>
int main(){
	int gd = DETECT,gm;
	
	initgraph(&gd, &gm, "");  
	arc(400,400,0,180,120);
	getch();
	closegraph();
	return 0;
}
