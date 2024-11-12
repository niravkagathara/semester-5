#include<stdio.h>
#include<conio.h>
#include<graphics.h>
int main()
{
int gd=DETECT, gm;
int p[3][2]={{100,100},{200,100},{150,50}};
int rx[3][2]={0};
int ry[3][2]={0};
int i,xm,ym;
for(i=0;i<3;i++)
{
rx[i][0]=p[i][0];
rx[i][1]=-1 * p[i][1];
ry[i][0]=-1 * p[i][0];
ry[i][1]=p[i][1];
}
initgraph(&gd,&gm,"C:\\TC\\BGI");
cleardevice();
xm=getmaxx();
ym=getmaxy();
setcolor(4);
line(p[0][0]+(xm/2),p[0][1]+(ym/2),p[1][0]+(xm/2),p[1][1]+(ym/2));
line(p[1][0]+(xm/2),p[1][1]+(ym/2),p[2][0]+(xm/2),p[2][1]+(ym/2));
line(p[2][0]+(xm/2),p[2][1]+(ym/2),p[0][0]+(xm/2),p[0][1]+(ym/2));
setcolor(1);
line(0,((int)ym/2),xm,((int)ym/2));
line(((int)xm/2),0,((int)xm/2),0);
setcolor(2);
line(rx[0][0]+(xm/2),rx[0][1]+(ym/2),rx[1][0]+(xm/2),rx[1][1]+(ym/2));
line(rx[1][0]+(xm/2),rx[1][1]+(ym/2),rx[2][0]+(xm/2),rx[2][1]+(ym/2));
line(rx[2][0]+(xm/2),rx[2][1]+(ym/2),rx[0][0]+(xm/2),rx[0][1]+(ym/2));
setcolor(5);
line(ry[0][0]+(xm/2),ry[0][1]+(ym/2),ry[1][0]+(xm/2),ry[1][1]+(ym/2));
line(ry[1][0]+(xm/2),ry[1][1]+(ym/2),ry[2][0]+(xm/2),ry[2][1]+(ym/2));
line(ry[2][0]+(xm/2),ry[2][1]+(ym/2),ry[0][0]+(xm/2),ry[0][1]+(ym/2));
getch();
closegraph();
return 0;
}
