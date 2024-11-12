
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
//	int x1,y1,x2,y2;
//	
//	printf("Enter X1: ");
//	scanf("%d",&x1);
//	printf("Enter Y1: ");
//	scanf("%d",&y1);
//	printf("Enter X2: ");
//	scanf("%d",&x2);
//	printf("Enter Y2: ");
//	scanf("%d",&y2);
	
	initgraph(&gd,&gm,"");
	
	
//	BresenhamLine(100,100,200,100);
// 	BresenhamLine(200,100,250,200);
//	BresenhamLine(100,100,150,200); 	
//	BresenhamLine(150,150,250,150);
//	
//	BresenhamLine(100,200,300,400);
//	BresenhamLine(300,400,600,400);
//	BresenhamLine(600,400,400,200);
//	BresenhamLine(400,200,100,200);

	BresenhamLine(100,100,200,300);
	BresenhamLine(200,200,400,200);
	BresenhamLine(400,300,300,100);
	BresenhamLine(300,100,100,100);
	
	getch();
	closegraph();
	
	return 0;
}

