#include<graphics.h>
#include<stdio.h>
#include<math.h>

int main(){
	int gd=DETECT,gm;
	int x1,x2,i;
	initgraph(&gd,&gm,"");
	rectangle(50,200,150,450);
	rectangle(75,300,125,450);
	rectangle(150,200,400,450);
	rectangle(200,250,250,300);
	line(50,200,100,50);
	line(100,50,350,50);
	circle(100,150,20);
	x1=100,x2=150;
	for(i=0;i<=10;i++){
		line(x1,50,x2,200);
		x1 +=25;
		x2 +=25;
	}

	getch();
	closegraph();
	return 0;
}
