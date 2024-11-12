#include<stdio.h>
#include<conio.h>
#include<graphics.h>
int main()
{
int gd=DETECT, gm;
int p[3][2]={{100,100},{200,100},{150,50}};
int rx[3][2]={0};
int i,shx;
printf("Enter value of Shx:");
scanf("%d",&shx);
for(i=0;i<3;i++)
{
rx[i][0]=p[i][0]+(shx*p[i][1]);
rx[i][1]=p[i][1];
}
initgraph(&gd,&gm,"C:\\TC\\BGI");
cleardevice();
setcolor(4);
line(p[0][0],p[0][1],p[1][0],p[1][1]);
line(p[1][0],p[1][1],p[2][0],p[2][1]);
line(p[2][0],p[2][1],p[0][0],p[0][1]);
setcolor(2);
line(rx[0][0],rx[0][1],rx[1][0],rx[1][1]);
line(rx[1][0],rx[1][1],rx[2][0],rx[2][1]);
line(rx[2][0],rx[2][1],rx[0][0],rx[0][1]);
getch();
closegraph();
return 0;
}
