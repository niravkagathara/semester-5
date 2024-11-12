#include<stdio.h>
#include<graphics.h>
#include<math.h>

void parallelogram(){
	setcolor(5);
	line(100,100,400,200);
	setcolor(2);
	line(400,200,400,400);
	setcolor(4);
	line(400,400,100,300);
	setcolor(3);
	line(100,300,100,100);

}

int main(){
	int gd,gm;
	detectgraph(&gd,&gm);
	initgraph(&gd,&gm,"");
	setcolor(15);
	parallelogram();
	getch();
	closegraph();
	return 0;
}
