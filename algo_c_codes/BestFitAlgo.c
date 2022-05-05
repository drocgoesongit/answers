#include <stdlib.h>
#include <stdio.h>

void bestFit(int blockSize[], int m, int processSize[], int n)
{
    int allocation[n];
    for (int i = 0; i < n; i++)
        allocation[i] = -1;

    for (int i = 0; i < n; i++)
    {
        int bestIndex = -1;
        for (int j = 0; j < m; j++)
        {
            if (blockSize[j] > processSize[i])
            {
                if (bestIndex == -1)
                {
                    bestIndex = j;
                }
                else
                {
                    if (blockSize[j] < blockSize[bestIndex])
                    {
                        bestIndex = j;
                    }
                }
            }
        }

        if (bestIndex != -1)
        {
            allocation[i] = bestIndex;
            // reduce available memory;
            blockSize[i] -= processSize[i];
        }
    }

    // printing the allocation.
    printf("Process id    Process size    Allocated\n");
    for (int i = 0; i < n; i++)
    {
        printf("   %d            %d            ", i + 1, processSize[i]);
        if (allocation[i] != -1)
        {
            printf("%d\n", allocation[i] + 1);
        }
        else
        {
            printf("not allcated\n");
        }
    }
}

int main()
{
    int blockSize[] = {100, 500, 200, 300, 600};
    int processSize[] = {212, 417, 112, 426};
    int m = sizeof(blockSize) / sizeof(blockSize[0]);
    int n = sizeof(processSize) / sizeof(processSize[0]);

    bestFit(blockSize, m, processSize, n);

    return 0;
}