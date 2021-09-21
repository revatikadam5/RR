#include <stdio.h>
int main(void)
{
    int a,b,temp;
    printf("Enter two numbers :\t");
    scanf("%d%d",&a,&b);
    temp = a;
    a = b;
    b = temp;
    printf("The swapped numbers are : %d %d",a,b);
}