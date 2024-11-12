#include<stdio.h>
#include<graphics.h>
#include<math.h>

void boundary(int x, int y,int fc,int bc){
	if(getpixel(x,y)!=fc && getpixel(x,y)!=bc){
		putpixel(x,y,fc);
		boundary(x+1,y,fc,bc);
		boundary(x-1,y,fc,bc);
		boundary(x,y+1,fc,bc);
		boundary(x,y-1,fc,bc); 
	}
}
void flood(int x, int y,int oc,int nc){
	if(getpixel(x,y)==oc ){
		putpixel(x,y,nc);
		flood(x+1,y,oc,nc);
		flood(x-1,y,oc,nc);
		flood(x,y+1,oc,nc);
		flood(x,y-1,oc,nc); 
	}
}
int main(){
	int gd,gm;
	detectgraph(&gd,&gm);
	initgraph(&gd,&gm,"");
	setcolor(15);
	circle(100,100,100);
	boundary(100,100,RED,WHITE);
	flood(100,100,RED,GREEN);
	getch();
	closegraph();
	return 0;
}
