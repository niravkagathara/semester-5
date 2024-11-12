#include<stdio.h>
#include<graphics.h>
int main(){
	int gd = DETECT,gm,x,y;
	
	initgraph(&gd, &gm, "");  
	circle(300,300,120);
	x=getmaxx();
	y=getmaxy();

	printf("%d \n ",&x);
	printf("%d",&y);

	getch();
	closegraph();
	return 0;
}
