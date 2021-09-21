#include <stdio.h>
int main(void)
{
    int n,i=1,fact=1;
    printf("Enter the number of elements :\t");
    scanf("%d",&n);
    while (i<=n)
    {
        fact = fact * i;
        i++;
    }
    printf("The factorial of %d numbers is %d",n,fact);    
}