#include<stdio.h>
#include<graphics.h>
#include<math.h>

void boundary(int x, int y,int fc,int bc){
	if(getpixel(x,y)!=bc && getpixel(x,y)!=fc){
		putpixel(x,y,fc);
		boundary(x+1,y,fc,bc);
		boundary(x-1,y,fc,bc);
		boundary(x,y+1,fc,bc);
		boundary(x,y-1,fc,bc); 
	}
}
int main(){
	int gd,gm;
	detectgraph(&gd,&gm);
	initgraph(&gd,&gm,"");
	setcolor(15);
	circle(100,100,100);
	boundary(100,100,RED,WHITE);
	getch();
	closegraph();
	return 0;
}
