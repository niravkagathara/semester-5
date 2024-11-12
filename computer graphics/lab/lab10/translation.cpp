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
	float tx,ty;
	int i;
	
	printf("Enter Tx: ");
	scanf("%f",&tx);
	printf("Enter Ty: ");
	scanf("%f",&ty);
	
	for(i=0;i<3;i++){
		r[i][0] = p[i][0] + tx;
		r[i][1] = p[i][1] + ty;
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
