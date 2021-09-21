#include <stdio.h>

int main(void)
{
    int i,n,cnt=0;
    printf("Enter a number :\t");
    scanf("%d",&n);
    for(i=2;i<n/2;i++)
    {
        if(n%i==0)
        cnt++;
    }
    if(cnt==0)
        printf("The number %d is prime",n);
    else
        printf("The number %d is not prime",n);
}