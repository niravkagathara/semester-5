
#include<stdio.h>
#include<graphics.h>
#include<math.h>


void midpointcircle(int xc,int yc, int r);
void plotPoint(int x,int y,int xc,int yc);

int main(){
	int gd=DETECT , gm;
	int xc,yc,r;

	printf("enter the value of xc :\t");
	scanf("%d",&xc);
	printf("enter the value of yc :\t");
	scanf("%d",&yc);
	printf("enter the value of r :\t");
	scanf("%d",&r);

	initgraph(&gd,&gm,"");


	midpointcircle(xc,yc,r);

	getch();
	closegraph();
	
	return 0;
}

void midpointcircle(int xc,int yc,int r){

	int x=0,y=r,p=1-r;
	plotPoint(x,y,xc,yc);

	while(x<=y){
		if(p<0){
			x++;
			p = p + 2*x +1;
		}
		else{
			x++;
			y--;
			p = p + 2*x - 2*y +1;
		} 
		plotPoint(x,y,xc,yc);
	}
}

void plotPoint(int x,int y,int xc,int yc){
	putpixel(xc+x,yc+y,WHITE);
	putpixel(xc+y,yc+x,WHITE);
	putpixel(xc+y,yc-x,WHITE);
	putpixel(xc+x,yc-y,WHITE);
	putpixel(xc-x,yc-y,WHITE);
	putpixel(xc-y,yc-x,WHITE);
	putpixel(xc-y,yc+x,WHITE);
	putpixel(xc-x,yc+y,WHITE);






}
