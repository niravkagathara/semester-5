#include<stdio.h>
#include<graphics.h>
#include<math.h>
#include<stdlib.h>
void DDA(int x1,int y1,int x2,int y2,int c){
	int dx=x2-x1,dy=y2-y1,steps,i,a=c;
	float xinc,yinc,x=x1,y=y1;
	
	
	if(abs(dx)>abs(dy)){
		steps=abs(dx);
	}
	else{
		steps=abs(dy);
	}
	xinc=dx/(float)steps;
	yinc=dy/(float)steps;
	putpixel(floor(x+0.5),floor(y+0.5),a);

	for(i=0;i<steps;i++){
		x=x+xinc;
		y=y+yinc;
		delay(1);
		putpixel(floor(x+0.5),floor(y+0.5),a);
		
	}
}

int main(){
	int gd=DETECT,gm;
	int x1,x2,y1,y2,i;
	
	initgraph(&gd,&gm,"");
	
	
	DDA(50,250,250,250,2);
	DDA(250,250,100,400,8);
	DDA(100,400,150,150,6);
	DDA(150,150,200,400,5);
	DDA(200,400,50,250,12);
	getch();
	closegraph();
	return 0;
}

