#include <stdio.h>
int main(void)
{
    int a,b,temp;
    printf("Enter two numbers :\t");
    scanf("%d%d",&a,&b);
    a=a^b;
    b=a^b;
    a=a^b;
    printf("The swapped numbers are : %d %d",a,b);
}