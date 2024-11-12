#include<stdio.h>
#include<graphics.h>
#include<math.h>

void rainbow(){
	for(int i=50;i<190;i++){
if(i<70){
		setcolor(1);

}
else if(i<=70){
	setcolor(2);
}
else if(i<=90){
	setcolor(3);
}else if(i<=110){
	setcolor(4);
}else if(i<=130){
	setcolor(5);
}else if(i<=150){
	setcolor(6);
}else if(i<=170){
	setcolor(7);
}else{
	setcolor(8);
}
	arc(200,200,0,180,i);
}
}

int main(){
	int gd,gm;
	detectgraph(&gd,&gm);
	initgraph(&gd,&gm,"");
	setcolor(15);
	rainbow();
	getch();
	closegraph();
	return 0;
}
