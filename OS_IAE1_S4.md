# OS IAE 1 SEM IV 
## Question bank solutions
<br>

### 1. Define Operating System with the help of examples
Ans. 
An operating system is a powerful and usually extensive program that controls and manages the hardware and other software on a computer.\
All computers and computer-like devices require operating systems, including your laptop, tablet, desktop, smartphone, smartwatch, and router.\
Some examples include versions of Microsoft Windows (like Windows 11, Windows 10)\
The OS helps you to communicate with the computer without knowing how to speak the computer’s language. It is not possible for the user to use any computer or mobile device without having an operating system.
### 2. Explain various functions of an OS.
Ans. 
- Process management: Process management helps OS to create and delete processes. It also provides mechanisms for synchronization and communication among processes.
- Memory management: Memory management module performs the task of allocation and de-allocation of memory space to programs in need of this resources.
- File management: It manages all the file-related activities such as organization storage, retrieval, naming, sharing, and protection of files.
- Device Management: Device management keeps tracks of all devices. This module also responsible for this task is known as the I/O controller. It also performs the task of allocation and de-allocation of the devices.
- I/O System Management: One of the main objects of any OS is to hide the peculiarities of that hardware devices from the user.
- Secondary-Storage Management: Systems have several levels of storage which includes primary storage, secondary storage, and cache storage. Instructions and data must be stored in primary storage or cache so that a running program can reference it.
- Security: Security module protects the data and information of a computer system against malware threat and authorized access.
- Command interpretation: This module is interpreting commands given by the and acting system resources to process that commands.
- Networking: A distributed system is a group of processors which do not share memory, hardware devices, or a clock. The processors communicate with one another through the network.
- Job accounting: Keeping track of time & resource used by various job and users.
- Communication management: Coordination and assignment of compilers, interpreters, and another software resource of the various users of the computer systems.
### 3. Explain different types of system calls with the help of an example.
Ans. 
**Process Control**
These system calls deal with processes such as process creation, process termination etc.
Ex. CreateProcess(), 
ExitProcess(), 
WaitForSingleObject()

**File Management**
These system calls are responsible for file manipulation such as creating a file, reading a file, writing into a file etc. Ex. CreateFile(),
ReadFile(),
WriteFile(),
CloseHandle()

**Device Management**
These system calls are responsible for device manipulation such as reading from device buffers, writing into device buffers etc. Ex. SetConsoleMode()
ReadConsole()
WriteConsole()

**Information Maintenance**
These system calls handle information and its transfer between the operating system and the user program. Ex. GetCurrentProcessID()
SetTimer()
Sleep()

**Communication**
These system calls are useful for interprocess communication. They also deal with creating and deleting a communication connection. Ex. CreatePipe()
CreateFileMapping()
MapViewOfFile()

### 4. List various operating system structures &amp; explain any one in brief.
Ans. Various operating system structures:
- Simple structure: 
- Layered structure:
- Micro Kernel:
- Modular Structure:

**Simple Structure:**
Such operating systems do not have well defined structure and are small, simple and limited systems. The interfaces and levels of functionality are not well separated. MS-DOS is an example of such operating system.\
![simple structure](https://media.geeksforgeeks.org/wp-content/uploads/20200501142632/1406-4.png)\

**Advantages of Simple structure:**
It delivers better application performance because of the few interfaces between the application program and the hardware.
Easy for kernel developers to develop such an operating system.\

**Disadvantages of Simple structure:**
The structure is very complicated as no clear boundaries exists between modules.
It does not enforce data hiding in the operating system.
### 5. Explain various states of a process.
Ans. 
**New**\
This is the state when the process has just been created. It is the initial state in the process life cycle.

**Ready**\
In the ready state, the process is waiting to be assigned the processor by the short term scheduler, so it can run. This state is immediately after the new state for the process.

**Ready Suspended**\
The processes in ready suspended state are in secondary memory. They were initially in the ready state in main memory but lack of memory forced them to be suspended and gets placed in the secondary memory.

**Running**\
The process is said to be in running state when the process instructions are being executed by the processor. This is done once the process is assigned to the processor using the short-term scheduler.

**Blocked**\
The process is in blocked state if it is waiting for some event to occur. This event may be I/O as the I/O events are executed in the main memory and don't require the processor. After the event is complete, the process again goes to ready state.

**Blocked Suspended**\
This is similar to ready suspended. The processes in blocked suspended state are in secondary memory. They were initially in the blocked state in main memory waiting for some event but lack of memory forced them to be suspended and gets placed in the secondary memory. A process may go from blocked suspended to ready suspended if its work is done.

**Terminated**\
The process is terminated once it finishes its execution. In the terminated state, the process is removed from main memory and its process control block is also deleted.

### 6. Explain semaphores and signals with respect to IPC
Ans. Semaphore was proposed by Dijkstra in 1965 which is a very significant technique to manage concurrent processes by using a simple integer value, which is known as a semaphore. Semaphore is simply an integer variable that is shared between threads.
Semaphores are of two types:

**Binary Semaphore**
This is also known as mutex lock. It can have only two values – 0 and 1. Its value is initialized to 1. It is used to implement the solution of critical section problems with multiple processes.

**Counting Semaphore** 
Its value can range over an unrestricted domain. It is used to control access to a resource that has multiple instances.

**Signals**
A signal is a notification to a process indicating the occurrence of an event. Signal is also called software interrupt and is not predictable to know its occurrence, hence it is also called an asynchronous event.\
In summary, the actions performed for the signals are as follows −

Default Action\
Handle the signal\
Ignore the signal
### 7. Write a short note on queues, mailboxes.
Ans.
**Queues**\
A queue is a line of factors ready to be handled — in sequential order beginning at the start of the line. A message queue is a queue of messages sent amongst applications. It consists of a series of labor items that are ready to be processed.\
Some common examples of queues are Kafka, Heron, real-time streaming, Amazon SQS, and RabbitMQ.

**Mailboxes**\
The mailbox is an easy mechanism for asynchronous communication. Some architectures outline mailbox registers. These mailboxes have a hard and fast range of bits and may be used for small messages. We also can enforce a mailbox the usage of P() and V() the usage of essential reminiscence for the mailbox storage. A quite simple model of a mailbox, one which holds the simplest one message at a time, illustrates a few crucial standards in interprocess communication.
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

