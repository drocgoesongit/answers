#include <stdlib.h>
#include <stdio.h>

int mutex = 1;
int fullSlots = 0;
int emptySlots = 10;
int itemProduced = 0;

void consumer()
{
    --mutex;
    itemProduced--;
    fullSlots--;
    emptySlots++;
    ++mutex;
    printf("remaining items after consumption: %d.\n", itemProduced);
}

void produce()
{
    --mutex;
    itemProduced++;
    fullSlots++;
    emptySlots--;
    ++mutex;
    printf("Total numbers of items produced: %d. \n", itemProduced);
}
int main()
{

    printf("Select from options below:\n");
    printf("\n1. Press 1 for Producer"
           "\n2. Press 2 for Consumer"
           "\n3. Press 3 for Exit\n");

    for (int i = 0; i >= 0; i++)
    {
        int n;

        scanf("%d", &n);

        switch (n)
        {
        case 1: // produce item.
            if (mutex == 1 && emptySlots != 0)
            {
                produce();
            }
            else
            {
                printf("buffer is full\n");
            }
            break;

        case 2:
            if (mutex == 1 && fullSlots != 0)
            {
                consumer();
            }
            else
            {
                printf("no item to consume.\n");
            }
            break;

        case 3:
            exit(0);
        default:
            break;
        }
    }

    return 0;
}
