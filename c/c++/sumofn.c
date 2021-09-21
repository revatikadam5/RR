#include <stdio.h>
int main(void)
{
    int n,sum=0;
    printf("Enter the number of elements :\t");
    scanf("%d",&n);
    sum = (n * (n - 1)) / 2;
    printf("The sum of first %d numbers is %d",n,sum);
}