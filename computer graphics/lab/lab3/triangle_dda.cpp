#include<stdio.h>
#include<graphics.h>
#include<math.h>
#include<stdlib.h>
void DDA(int x1,int y1,int x2,int y2){
	int dx=x2-x1,dy=y2-y1,steps,i;
	float xinc,yinc,x=x1,y=y1;
	
	if(abs(dx)>abs(dy)){
		steps=abs(dx);
	}
	else{
		steps=abs(dy);
	}
	xinc=dx/(float)steps;
	yinc=dy/(float)steps;
	putpixel(floor(x+0.5),floor(y+0.5),12);

	for(i=0;i<steps;i++){
		x=x+xinc;
		y=y+yinc;
		putpixel(floor(x+0.5),floor(y+0.5),12);
	}
}

int main(){
	int gd=DETECT,gm;
	int x1,x2,y1,y2,i;

	initgraph(&gd,&gm,"");
	
	

	DDA(100,100,200,200);
	DDA(100,100,0,200);
	DDA(0,200,200,200);

	getch();
	closegraph();
	return 0;
}

