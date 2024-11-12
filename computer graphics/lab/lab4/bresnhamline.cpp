#include<stdio.h>
#include<graphics.h>
#include<math.h>
#include<stdlib.h>

void BresenhamLine(int x1, int y1, int x2, int y2){
	int x,y,i;
	int dx,dy,tdy,tdytdx;
	float p;
	
	if(x1<x2){
		x = x1;
		y = y1;
		dx = x2-x1;
		dy = y2-y1;
	}
	else{
		x = x2;
		y = y2;
		dx = x1-x2;
		dy = y1-y2;
	}
	
	tdy = 2*dy;
	tdytdx = (2*dy) - (2*dx);
	p = tdy - dx;
	
	putpixel(x,y,WHITE);
	
	for(i=0; i<dx; i++){
		x = x+1;
		
		if(p<0){
			p = p + tdy;
		}
		else{
			y = y+1;
			p = p + tdytdx;
		}
		delay(10);
		putpixel(x,y,WHITE);
	}
	
}




int main(){
	int gd = DETECT, gm;
	int x1,y1,x2,y2;
	
	printf("Enter X1: ");
	scanf("%d",&x1);
	printf("Enter Y1: ");
	scanf("%d",&y1);
	printf("Enter X2: ");
	scanf("%d",&x2);
	printf("Enter Y2: ");
	scanf("%d",&y2);
	
	initgraph(&gd,&gm,"");
	
	BresenhamLine(x1,y1,x2,y2);
	
	getch();
	closegraph();
	
	return 0;
}
