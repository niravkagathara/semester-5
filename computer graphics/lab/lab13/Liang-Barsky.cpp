#include<stdio.h>
#include<graphics.h>
#include<math.h>
main()
{
int i,gd,gm;
int x1,y1,x2,y2,xmin,xmax,ymin,ymax,xx1,xx2,yy1,yy2;
float t1,t2,p[4],q[4],temp;
printf("Enter Line end point x1, y1:");
scanf("%d%d",&x1,&y1);
printf("Enter Line end point x2, y2:");
scanf("%d%d",&x2,&y2);
printf("Enter Cliping Rectangle xmin, xmax:");
scanf("%d%d",&xmin,&xmax);
printf("Enter Cliping Rectangle ymin, ymax:");
scanf("%d%d",&ymin,&ymax);
detectgraph(&gd,&gm);
initgraph(&gd,&gm,"");
line(x1,y1,x2,y2);
rectangle(xmin,ymin,xmax,ymax);
p[0] = -(x2-x1);
p[1] = (x2-x1);
p[2] = -(y2-y1);
p[3] = (y2-y1);
q[0] = (x1-xmin);
q[1] = (xmax-x1);
q[2] = (y1-ymin);
q[3] = (ymax-y1);
for(i=0;i<4;i++)
{
if(p[i]==0)
{
//printf("line is parallel to one of the clipping boundary");
outtextxy(10,10,"line is parallel to one of the clipping boundary");
delay(500);
if(q[i] >= 0)
{
if(i < 2)
{
if (y1 < ymin)
{
	y1 = ymin;
}
if (y2 > ymax)
{
y2 = ymax;
}
delay(1000);
cleardevice();
rectangle(xmin,ymin,xmax,ymax);
line(x1,y1,x2,y2);
}
if(i > 1)
{
if (x1 < xmin)
{
x1 = xmin;
}
if (x2 > xmax)
{
x2 = xmax;
}
delay(1000);
cleardevice();
rectangle(xmin,ymin,xmax,ymax);
line(x1,y1,x2,y2);
}
}
getch();
return(0);
}
}
t1 = 0;
t2 = 1;
for(i=0;i<4;i++)
{
temp = q[i]/p[i];
if(p[i] < 0)
{
if(t1 <= temp)
{
t1 = temp;
}
}
else
{
if(t2 > temp)
{
t2 = temp;
}
}
}
if(t1<t2)
{
xx1 = x1 + t1 * p[1];
xx2 = x1 + t2 * p[1];
yy1 = y1 + t1 * p[3];
yy2 = y1 + t2 * p[3];
}
delay(1000);
cleardevice();
outtextxy(10,10,"Result After Clipping");
rectangle(xmin,ymin,xmax,ymax);
line(xx1,yy1,xx2,yy2);
getch();
closegraph();
}
