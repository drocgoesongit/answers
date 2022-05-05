#include <stdlib.h>
#include <stdio.h>

int main()
{
    int totalHeadMovement = 0, i, n, reqArr[100], initial;

    printf("Enter the number of requests: ");
    scanf("%d", &n);
    printf("\n");

    printf("Enter the initial request: ");
    scanf("%d", &initial);
    printf("\n");

    printf("Enter the requests \n");

    for (i = 0; i < n; i++)
    {
        scanf("%d", &reqArr[i]);
    }

    for (i = 0; i < n; i++)
    {
        totalHeadMovement = totalHeadMovement + abs(reqArr[i] - initial);
        initial = reqArr[i];
    }
    printf("\nTotal head movements: %d", totalHeadMovement);

    return 0;
}