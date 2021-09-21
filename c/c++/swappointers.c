#include <stdio.h>
int main(void)
{
    int a,b,temp,*x,*y;
    printf("Enter two numbers :\t");
    scanf("%d%d",&a,&b);
    x=&a;
    y=&b;
    temp=*x;
    *x=*y;
    *y=temp;
    printf("The swapped numbers are : %d %d",*x,*y);
}