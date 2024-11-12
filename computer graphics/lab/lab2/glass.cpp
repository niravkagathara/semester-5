#include<graphics.h>
#include<stdio.h>
#include<math.h>

int main(){
	int gd=DETECT,gm;
	initgraph(&gd,&gm,"");
	circle(200,200,40);
	circle(320,200,40);
	line(240,200,280,200);
	line(160,200,240,100);	
	line(360,200,400,100);	
	

	getch();
	closegraph();
	return 0;
}
