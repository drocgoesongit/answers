# AOA IAE1 SEM IV
## Question Bank Solutions.
```
All the answers of the question banks. If you think there is some error and something needs to be changed. 
Feel free to submit your pull requests to this repo. We will check and then merge appropriate pull requests.
```
<br>

### 1. List and explain various methods to solve recurrences.
Ans: Here are four methods for solving Recurrence:
a-Substitution Method
b-Iteration Method
c-Recursion Tree Method
d-Master Method

**Explanation remains.**

### 2. Explain Greedy approach and it’s applications.

Ans: It simply means to pick up a choice/solution that seems the best at the moment ( being greedy). 
This technique is best suited when we want an immediate solution. 
It helps to solve optimization problems \
i.e. which gives either minimum results or maximum results.
A solution satisfying the condition in the problem is a feasible solution.\
The solution having minimum cost out of all possible feasible solutions is the optimal solution i.e. it is the best solution.
The goal of the greedy algorithm is to find the optimal solution. There can be only 1 optimal solution.\
Application: CPU Scheduling algorithms, Minimum spanning trees,  Fit algorithm in memory management

### 3. Explain the basic principle of Divide and Conquer method and its applications.
Ans.The divide-and-conquer paradigm is often used to find an optimal solution of a problem. 
Its basic idea is to decompose a given problem into two or more similar, but simpler, subproblems, to solve them in turn, 
and to compose their solutions to solve the given problem. 
Problems of sufficient simplicity are solved directly.
Application: 
Finding the maximum and minimum of a sequence of numbers.
Strassen's matrix multiplication.
Merge sort.
Binary search

### 4. Differentiate between P and NP.

Ans. ![image](https://user-images.githubusercontent.com/80765098/156199217-9357a792-622a-41b6-ba4b-f7f31f5ac027.png)


### 5. Explain different complexity classes.

Ans. In computer science, there exist some problems whose solutions are not yet found, the problems are divided into classes known as Complexity Classes. 
In complexity theory, a Complexity Class is a set of problems with related complexity.
Types of Complexity classes and their explanation.
1. P Class
The P in the P class stands for Polynomial Time. It is the collection of decision problems(problems with a “yes” or “no” answer) that can be solved by a
deterministic machine in polynomial time.
2. NP Class
The NP in NP class stands for Non-deterministic Polynomial Time. It is the collection of decision problems that can be solved by a non-deterministic 
machine in polynomial time.
3. Co-NP Class
Co-NP stands for the complement of NP Class. It means if the answer to a problem in Co-NP is No, then there is proof that can be checked in polynomial time.
4. NP-hard class
An NP-hard problem is at least as hard as the hardest problem in NP and it is the class of the problems such that every problem in NP reduces to NP-hard.

### 6. Compare A priori and A posteriori analysis
Ans. 
| A Posteriori analysis  | A priori analysis |
| ------------- | ------------- |
| Posteriori analysis is a relative analysis.  | Piori analysis is an absolute analysis.  |
| It is dependent on language of compiler and type of hardware.  | It is independent of language of compiler and types of hardware.  |
| It will give exact answer. | It will give approximate answer. |
| It doesn’t use asymptotic notations to represent the time complexity of an algorithm. | It uses the asymptotic notations to represent how much time the algorithm will take in order to complete its execution.  |
| The time complexity of an algorithm using a posteriori analysis differ from system to system. | The time complexity of an algorithm using a priori analysis is same for every system. |

### 7. Compare merge sort and quick sort Algorithm.
Ans. 
| Basis for comparison | Quick Sort |	Merge Sort |
| ------- | -------- | -------- |
| The partition of elements in the array | The splitting of a array of elements is in any ratio, not necessarily divided into half.	| In the merge sort, the array is parted into just 2 halves (i.e. n/2). |
| Worst case complexity | O(n2) |	O(nlogn) |
| Works well on | It works well on smaller array	| It operates fine on any size of array |
| Speed of execution | It work faster than other sorting algorithms for small data set like Selection sort etc |	It has a consistent speed on any size of data |
| Additional storage space requirement | Less(In-place) |	More(not In-place) |
| Efficiency | Inefficient for larger arrays	| More efficient |
| Sorting method | Internal |	External |
| Stability | Not Stable |	Stable |
| Preferred for | for Arrays	| for Linked Lists |
| Locality of reference | good |	poor |

### 8. Compare INSERTION sort and selection sort Algorithm.
Ans. 
| Insertion Sort |	Selection Sort |
| ------- | -------- | 
|	Inserts the value in the presorted array to sort the set of values in the array. |	Finds the minimum / maximum number from the list and sort it in ascending / descending order. |
|	It is a stable sorting algorithm.	| It is an unstable sorting algorithm. |
|	The best-case time complexity is O(N) when the array is already in ascending order. |	There is no best case the time complexity is O(N2) in all cases. |
| The number of comparison operations performed in this sorting algorithm is less than the swapping performed.	| The number of comparison operations performed in this sorting algorithm is more than the swapping performed. |
|	It is more efficient than the Selection sort. |	It is less efficient than the Insertion sort. |

### 9. Differentiate between Prims and Kruskals algorithm.
Ans.
| Prim’s Algorithm |	Kruskal’s Algorithm |
| ------- | -------- | 
| It starts to build the Minimum Spanning Tree from any vertex in the graph.	| It starts to build the Minimum Spanning Tree from the vertex carrying minimum weight in the graph. | 
| It traverses one node more than one time to get the minimum distance. |	It traverses one node only once. |
| Prim’s algorithm has a time complexity of O(V2), V being the number of vertices and can be improved up to O(E log V) using Fibonacci heaps.	| Kruskal’s algorithm’s time complexity is O(E log V), V being the number of vertices. |
| Prim’s algorithm gives connected component as well as it works only on connected graph.	 | Kruskal’s algorithm can generate forest(disconnected components) at any instant as well as it can work on disconnected components |
| Prim’s algorithm runs faster in dense graphs.	| Kruskal’s algorithm runs faster in sparse graphs. |
| Prim’s algorithm uses List Data Structure. |	Kruskal’s algorithm uses Heap Data Structure. |


### 10. Explain insertion sort and derive its complexity.
Ans. The insertion sort algorithm iterates through an input array and removes one element per iteration, finds the place the element belongs in the array, and then places it there. This process grows a sorted list from left to right.\
**Best Case Analysis:**\
Insertion sort performs two operations: it scans through the list, comparing each pair of elements, and it swaps elements if they are out of order. Each operation contributes to the running time of the algorithm. If the input array is already in sorted order, insertion sort compares O(n)O(n) elements and performs no swaps (in the Python code above, the inner loop is never triggered). Therefore, in the best case, insertion sort runs in O(n)O(n) time.\
**Worst and Average Case Analysis:**\
The worst case for insertion sort will occur when the input list is in decreasing order. To insert the last element, we need at most n-1n−1 comparisons and at most n-1n−1 swaps. To insert the second to last element, we need at most n-2n−2 comparisons and at most n-2n−2 swaps, and so on.[3] The number of operations needed to perform insertion sort is therefore: 2 \times (1+2+ \dots +n-2+n-1)2×(1+2+⋯+n−2+n−1).  As expected, the algorithm's complexity is O(n^2). So insertion sort, on average, takes O(n^2) time.

### 11. Explain merge sort and derive its complexity.
Ans. In Merge Sort, the given unsorted array with n elements, is divided into n subarrays, each having one element, because a single element is always sorted in itself. Then, it repeatedly merges these subarrays, to produce new sorted subarrays, and in the end, one complete sorted array is produced.\
whenever we divide a number into half in every step, it can be represented using a logarithmic function, which is log n and the number of steps can be represented by log n + 1(at most)\
Also, we perform a single step operation to find out the middle of any subarray, i.e. O(1).\
And to merge the subarrays, made by dividing the original array of n elements, a running time of O(n) will be required.\
Hence the total time for mergeSort function will become n(log n + 1), which gives us a time complexity of O(n*log n).\
Worst Case Time Complexity [ Big-O ]: O(n*log n)\
Best Case Time Complexity [Big-omega]: O(n*log n)\
Average Time Complexity [Big-theta]: O(n*log n)

### 12. Explain selection sort and derive its complexity.
Ans. With each loop cycle,
The minimum element in unsorted sub-array is selected.
It is then placed at the correct location in the sorted sub-array until array A is completely sorted.\
Time Complexity Analysis-\
Selection sort algorithm consists of two nested loops.
Owing to the two nested loops, it has O(n2) time complexity.
Space Complexity Analysis-\
Selection sort is an in-place algorithm.
It performs all computation in the original array and no other array is used.
Hence, the space complexity works out to be O(1).

### 13. Explain quick sort and derive its complexity.
Ans. Quick sort is a highly efficient sorting algorithm and is based on partitioning of array of data into smaller arrays. A large array is partitioned into two arrays one of which holds values smaller than the specified value, say pivot, based on which the partition is made and another array holds values greater than the pivot value.


### 14. Explain binary search Algorithm and derive its complexity.
Ans. A binary search algorithm works on the idea of neglecting half of the list on every iteration. It keeps on splitting the list until it finds the value it is looking for in a given list. A binary search algorithm is a quick upgrade to a simple linear search algorithm.\
The time complexity of the binary search algorithm is O(log n). The best-case time complexity would be O(1) when the central index would directly match the desired value. The worst-case scenario could be the values at either extremity of the list or values not in the list. 

### 15. What is the framework for the analysis of Algorithms?
Ans. 

### 16. What is asymptotic analysis?
Ans. Asymptotic analysis refers to computing the running time of any operation in mathematical units of computation. For example, the running time of one operation is computed as f(n) and may be for another operation it is computed as g(n2). This means the first operation running time will increase linearly with the increase in n and the running time of the second operation will increase exponentially when n increases. Similarly, the running time of both operations will be nearly the same if n is significantly small.

Usually, the time required by an algorithm falls under three types −

Best Case − Minimum time required for program execution.

Average Case − Average time required for program execution.

Worst Case − Maximum time required for program execution.

Asymptotic Notations
Following are the commonly used asymptotic notations to calculate the running time complexity of an algorithm.

Ο Notation (Worst case)
Ω Notation (Best case)
θ Notation (Average case)

### 17. Search an element 5 in the array X=(5,2,4,7,1,3,2,6)
Ans. ![answer 17](https://github.com/drocgoesongit/answers/blob/main/Assets/17%20ans%20AOA.jpeg)

### 18. Using Master Theorem calculate time complexity of
> a. T[n]=2T[n/2] + n
> b. T[n]=4T[n/2] + n2 
> c. T[n]=2T[n/2] + n3 
> d. T[n]=T[n-1]+1
Ans. 
### 19. Write an Algorithm for finding out the maximum and minimum number in the array using divide and conquer.
Ans.

a. Let P = (n, a [i],……,a [j]) denote an arbitrary instance of the problem.
b. Here ‘n’ is the no. of elements in the list (a [i],….,a[j]) and we are interested in finding the maximum and minimum of the list.
c. If the list has more than 2 elements, P has to be divided into smaller instances.
d. For example, we might divide ‘P’ into the 2 instances, P1=([n/2],a[1],……..a[n/2]) & P2= ( n-[n/2], a[[n/2]+1],….., a[n]) After having divided ‘P’ into 2 smaller sub problems, we can solve them by recursively invoking the same divide-and-conquer algorithm.
 
![image](https://user-images.githubusercontent.com/90335734/156029560-191f06d7-155b-45f5-8299-f9fa93406f18.png)

### 20. Analyze merge sort and apply it to get ascending order of an array X=(5,2,4,7,1,3,2,6)
Ans.

X=(5,2,4,7,1,3,2,6)
Analysis:
![image](https://user-images.githubusercontent.com/90335734/156029614-e5d6b36c-0799-4c80-99bb-f20afaab03f7.png)

Ascending order of an array X=(5,2,4,7,1,3,2,6):
![image](https://user-images.githubusercontent.com/90335734/156029656-f32a6035-8a47-4063-8017-835114a1977c.png)

### 21. Analyze quick sort Algorithm and apply it to get ascending order of an Array X=(5,2,4,7,1,3,2,6)
Ans.

Analysis of QuickSort :
Time taken by QuickSort, in general, can be written as following. 
 T(n) = T(k) + T(n-k-1) +  (n)
The first two terms are for two recursive calls, the last term is for the partition process. k is the number of elements which are smaller than pivot. 
The time taken by QuickSort depends upon the input array and partition strategy. Following are three cases.
 
Worst Case: The worst case occurs when the partition process always picks greatest or smallest element as pivot. If in the partition strategy where last element is always picked as pivot, the worst case would occur when the array is already sorted in increasing or decreasing order. Following is recurrence for worst case. 
 
 T(n) = T(0) + T(n-1) +  θ(n)

which is equivalent to  

T(n) = T(n-1) + θ(n)
 
The solution of above recurrence is  θ(n2).

Best Case: The best case occurs when the partition process always picks the middle element as pivot. Following is recurrence for best case. 
 
 T(n) = 2T(n/2) + θ(n)
 
The solution of above recurrence is θ(nLogn). It can be solved using case 2 of Master Theorem.
 
Average Case: 
To do average case analysis, we need to consider all possible permutation of array and calculate time taken by every permutation which doesn’t look easy. 
We can get an idea of average case by considering the case when partition puts O(n/9) elements in one set and O(9n/10) elements in other set. Following is recurrence for this case. 
 
 T(n) = T(n/9) + T(9n/10) + θ(n)
 
Solution of above recurrence is also O(nLogn)

Ascending order of an array X=(5,2,4,7,1,3,2,6):
![image](https://user-images.githubusercontent.com/90335734/156029780-884d9fa5-dca4-4665-949a-c423844963ea.png)


### 22. Explain with an example of how divide and conquer strategy is used in binary search?
Ans.

Binary search is an efficient searching method. While searching the elements using this method the most essential thing that the elements in the array should be sorted one.
An element which is to be searched from the list of elements stored in array A[0…n-1] is called KEY element.
Let A[m] be the mid element of array A. then there are three conditions that needs to be tested while searching the array using this method.
1.	If KEY=A[m] then desired element is present in the list.
2.	Otherwise if KEY<a[m] then="" search="" the="" left="" sub="" list.<="" p="">
3.	Otherwise if KEY>A[m] then search the right sub list.
This can be represented as
![image](https://user-images.githubusercontent.com/90335734/156029828-bbbf2de2-ac8d-45fc-b451-4b48d49c4f12.png)

Example
![image](https://user-images.githubusercontent.com/90335734/156029848-bc274ee4-5b20-4c2e-b5f7-4d6f011aacae.png)

### 23. Arrange the following time functions in ascending order :n, 2n , log(n), n3 ,n2 , n log(n)
Ans. Ascending order: log(n), n, n log(n), n2, n3, 2n
### 24. Compute complexities using O(Big_oh) ,omega and theta notation, for the function 
> a) T[n]=5 
> b) T[n]=10 n2+2n+5
> c) T[n]=2T[n/2] + n3 d) T[n]=T[n-1]+1
Ans.

![image](https://user-images.githubusercontent.com/90335734/156029908-e67fb5ad-ded9-4e04-a462-55cb9f8af728.png)
