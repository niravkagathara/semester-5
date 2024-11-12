#include<graphics.h>
#include<stdio.h>
#include<math.h>

int main(){
	int gd=DETECT,gm;
	initgraph(&gd,&gm,"");
	circle(200,200,200);
	circle(100,150,40);
	circle(300,150,40);
	arc(200,250,180,360,100);
	

	getch();
	closegraph();
	return 0;
}
