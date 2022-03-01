# OS IAE 1 SEM IV 
## Question bank solutions
<br>

### 1. Define Operating System with the help of examples
### 2. Explain various functions of an OS
### 3. Explain different types of system calls with the help of an example
### 4. List various operating system structures &amp; explain any one in brief.
### 5. Explain various states of a process
### 6. Explain semaphores and signals with respect to IPC
### 7. Write a short note on queues, mailboxes
### 8. Explain Round Robin with the help of an example
Ans. Example of Round-robin Scheduling
Consider this following three processes
Process Queue 	Burst time
P1 	           4
P2 	           3
P3            	5

![image](https://user-images.githubusercontent.com/76240365/156185429-77f9d649-41e2-47b5-bbd4-89f95f2276f3.png)



Step 1) The execution begins with process P1, which has burst time 4. Here, every process executes for 2 seconds. P2 and P3 are still in the waiting queue.

![image](https://user-images.githubusercontent.com/76240365/156185477-2eb05971-5a76-41e2-a488-6b7dcded9e1a.png)


Step 2) At time =2, P1 is added to the end of the Queue and P2 starts executing	

![image](https://user-images.githubusercontent.com/76240365/156185502-9bbcbe8e-1da0-4972-91e8-cbdb569492fc.png)



Step 3) At time=4 , P2 is preempted and add at the end of the queue. P3 starts executing.

![image](https://user-images.githubusercontent.com/76240365/156185533-e3369b6f-18c2-47f8-b6af-d9c33b11f28f.png)

Step 4)	At time=6 , P3 is preempted and add at the end of the queue. P1 starts executing.

![image](https://user-images.githubusercontent.com/76240365/156185565-0fd18b94-ca2c-4abb-8134-6e78b1e6a71d.png)


Step 5) At time=8 , P1 has a burst time of 4. It has completed execution. P2 starts execution

![image](https://user-images.githubusercontent.com/76240365/156185588-5c2cb91f-296e-4bc9-b30b-377ace309031.png)

Step 6) P2 has a burst time of 3. It has already executed for 2 interval. At time=9, P2 completes execution. Then, P3 starts execution till it completes.

![image](https://user-images.githubusercontent.com/76240365/156185630-31cfcc2c-d392-46a8-b38f-9170450cec22.png)


Step 7) Let’s calculate the average waiting time for above example.

Wait time\ 
P1= 0+ 4= 4\
P2= 2+4= 6\
P3= 4+3= 7\

### 9. Explain the concept of a process ###
Ans.
A process is basically a program in execution. The execution of a process must progress in a sequential fashion.
A process is defined as an entity which represents the basic unit of work to be implemented in the system
To put it in simple terms, we write our computer programs in a text file and when we execute this program, it becomes a process which performs all the tasks mentioned in the          program.
When a program is loaded into the memory and it becomes a process, it can be divided into four sections ─ stack, heap, text and data. 

![image](https://user-images.githubusercontent.com/76240365/156186489-ae0e3dee-7657-4373-b867-bfca4440f122.png)

A Process Control Block is a data structure maintained by the Operating System for every process. The PCB is identified by an integer process ID (PID). A PCB keeps all the           information needed to keep track of a process as listed below in the table −

Process State
The current state of the process i.e., whether it is ready, running, waiting, or whatever.


Process privileges
This is required to allow/disallow access to system resources. 

Process ID
Unique identification for each of the process in the operating system.


Pointer
A pointer to parent process.


Program Counter
Program Counter is a pointer to the address of the next instruction to be executed for this process.


CPU registers
Various CPU registers where process need to be stored for execution for running state.


CPU Scheduling Information
Process priority and other scheduling information which is required to schedule the process.

Memory management information
This includes the information of page table, memory limits, Segment table depending on memory used by the operating system.


Accounting information
This includes the amount of CPU used for process execution, time limits, execution ID etc.


IO status information
This includes a list of I/O devices allocated to the process.\
![image](https://user-images.githubusercontent.com/76240365/156187051-d5e9ecf1-e972-489f-b448-dbc6d2f52090.png)


### 10. Explain Uniprocessor scheduling
  ANS --> 
   
### 11. Draw and explain Process state transition diagram
  ANS -->
   ![image](https://user-images.githubusercontent.com/76240365/156188488-957c1a2c-57a6-4276-a572-8f1f17b2b89d.png)

### 12. List various scheduling policies. Explain Preemptive SJF with the help of an example
### 13. List various scheduling policies. Explain Non Preemptive SJF with the help of an example
### 14. Write a short note on FCFS scheduling policy.

  ANS -->
  ( for 3 ques mentioned above)
   ![image](https://user-images.githubusercontent.com/76240365/156189100-3dae0995-cd99-497c-90e5-01a51923c1a1.png)

### 15. Arrival Time and Burst time for three processes P1, P2, P3 are given in  the diagram below. Calculate Turn around time, completion time, and  waiting time.

 ![table](https://user-images.githubusercontent.com/76240365/156184894-f5792849-4eec-42b1-9928-1f202e905be9.png)

### 16. Analyze shared memory model of Inter Process Communication
  ANS --> 
   ![image](https://user-images.githubusercontent.com/76240365/156189490-e016ab27-b10c-44fa-9ca6-2303aafe35e8.png)

### 17. Explain the principle of concurrency
  ANS --> 
   ![image](https://user-images.githubusercontent.com/76240365/156189639-de0ecd78-e417-4270-8ad4-7728538632b6.png)

