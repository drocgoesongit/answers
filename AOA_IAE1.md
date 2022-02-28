# AOA IAE1 SEM IV

## Question Bank Solutions.
### 1. List and explain various methods to solve recurrences.

Ans: Here are four methods for solving Recurrence:
a-Substitution Method
b-Iteration Method
c-Recursion Tree Method
d-Master Method

**Explanation remains.**

### 2. Explain Greedy approach and it’s applications.

Ans: It simply means to pick up a choice/solution that seems the best at the moment ( being greedy). 
This technique is best suited when we want an immediate situation. 
It helps to solve optimization problems 
i.e. which gives either minimum results or maximum results.
A solution satisfying the condition in the problem is a feasible solution.
The solution having minimum cost out of all possible feasible solutions is the optimal solution i.e. it is the best solution.
The goal of the greedy algorithm is to find the optimal solution. There can be only 1 optimal solution.
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

Ans. 

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
11. Explain selection sort and derive its complexity.
12. Explain merge sort and derive its complexity.
13. Explain quick sort and derive its complexity.
14. Explain binary search Algorithm and derive its complexity.
15. What is the framework for the analysis of Algorithms?
16. What is asymptotic analysis?
17. Search an element 5 in the array X=(5,2,4,7,1,3,2,6)
18. Using Master Theorem calculate time complexity of
a. T[n]=2T[n/2] + n
