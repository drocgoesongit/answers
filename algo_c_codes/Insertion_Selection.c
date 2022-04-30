// code for sorting algorithms like Insertion sort, Selection Sort, Merge Sort.
#include <stdio.h>
#include <stdlib.h>

void insertionSort(int arr[], int n);
void selectionSort(int arr[], int n);
void mergeSort();

void insertionSort(int arr[], int n)
{

    int key, i, j;

    // starting from i = 1 to last element of array.

    for (i = 1; i < n; i++)
    {
        key = arr[i];
        j = i - 1;

        // if element is greater than key then only swap position.

        while (j >= 0 && arr[j] > key)
        {
            arr[j + 1] = arr[j];
            j = j - 1;
        }
        arr[j + 1] = key;
    }
}

// swaping function
void swap(int *xp, int *yp)
{
    int temp = *xp;
    *xp = *yp;
    *yp = temp;
}

// selection sort
void selectionSort(int arr[], int n)
{

    int i, j, key, min_index;

    for (i = 0; i < n - 1; i++)
    {
        key = arr[i];
        min_index = i;

        for (j = i + 1; j < n; j++)
        {
            if (arr[j] < arr[min_index])
            {
                min_index = j;
            }
        }
        swap(&arr[min_index], &arr[i]);
    }
}

// A utility function to print an array of size n
void printArray(int arr[], int n)
{
    int i;
    for (i = 0; i < n; i++)
        printf("%d ", arr[i]);
    printf("\n");
}

int main()
{
    int arr[] = {1, 12, 34, 10, 23};
    int size = sizeof(arr) / sizeof(arr[0]);

    selectionSort(arr, size);
    printArray(arr, size);

    return 0;
}
