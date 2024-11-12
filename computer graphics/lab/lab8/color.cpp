#include<stdio.h>
#include<graphics.h>
#include<math.h>


void midpointcircle(int xc,int yc, int r);
void plotPoint(int x,int y,int xc,int yc);
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
	int gd=DETECT , gm;
	int xc,yc,r;

//	printf("enter the value of xc :\t");
//	scanf("%d",&xc);
//	printf("enter the value of yc :\t");
//	scanf("%d",&yc);
//	printf("enter the value of r :\t");
//	scanf("%d",&r);

	initgraph(&gd,&gm,"");

	setcolor(15);

	midpointcircle(200,200,100);
	boundary(200,200,RED,WHITE);

	midpointcircle(200,100,100);
	boundary(200,50,1,WHITE);


	midpointcircle(200,300,100);
	boundary(200,350,2,WHITE);

//	boundary(200,300,BLUE,WHITE);

	midpointcircle(115,150,100);
	boundary(65,150,3,WHITE);

//	boundary(115,150,YELLOW,WHITE);

	midpointcircle(115,250,100);
	boundary(65,250,7,WHITE);

	midpointcircle(285,150,100);
	boundary(335,150,5,WHITE);

	midpointcircle(285,250,100);
		boundary(335,250,6,WHITE);

	
	

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
