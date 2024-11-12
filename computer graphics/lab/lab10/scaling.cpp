#include<stdio.h>
#include<graphics.h>
#include<math.h>

int main(){
	int gd = DETECT, gm;
	
	float p[3][2] = {
		{100,100},
		{200,100},
		{150,50},
	};
	
	float r[3][2] = {0};
	float sx,sy;
	int i;
	
	printf("Enter Sx: ");
	scanf("%f",&sx);
	printf("Enter Sy: ");
	scanf("%f",&sy);
	
	for(i=0;i<3;i++){
		r[i][0] = p[i][0]*sx;
		r[i][1] = p[i][1]*sy;
	}
	
	initgraph(&gd,&gm," ");
	
	setcolor(15);
	line(p[0][0],p[0][1],p[1][0],p[1][1]);
	line(p[1][0],p[1][1],p[2][0],p[2][1]);
	line(p[2][0],p[2][1],p[0][0],p[0][1]);
	
	setcolor(3);
	line(r[0][0],r[0][1],r[1][0],r[1][1]);
	line(r[1][0],r[1][1],r[2][0],r[2][1]);
	line(r[2][0],r[2][1],r[0][0],r[0][1]);
	
	getch();
	closegraph();
	return 0;
}
