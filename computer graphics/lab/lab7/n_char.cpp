#include<stdio.h>
#include<graphics.h>
#include<math.h>
void charactor();
int main() {
int gd=DETECT,gm;

initgraph(&gd,&gm,"");
		charactor();
getch();
closegraph();
return 0;
}
void charactor(){
int i,j;
int x[10][10] = {
{1,0,0,0,0,0,0,0,0,1}, 
{1,1,0,0,0,0,0,0,0,1}, 
{1,0,1,0,0,0,0,0,0,1}, 
{1,0,0,1,0,0,0,0,0,1}, 
{1,0,0,0,1,0,0,0,0,1}, 
{1,0,0,0,0,1,0,0,0,1}, 
{1,0,0,0,0,0,1,0,0,1}, 
{1,0,0,0,0,0,0,1,0,1}, 
{1,0,0,0,0,0,0,0,1,1}, 
{1,0,0,0,0,0,0,0,0,1}, 
};

	for(i=0;i<10;i++){
		for(j=0;j<10;j++){
			if(x[i][j]==1){
			putpixel(j+200, i+200,WHITE);
			}	
		}
	}
}
