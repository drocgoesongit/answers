# MP IAE1 SEM IV 
## Question bank solutions
<br>

### 1.Explain advantages of memory segmentation.
  ANS -->
    
Segmentation is the process in which the main memory of the computer is logically divided into different segments and each segment has its own base address. It is basically used to enhance the speed of execution of the computer system, so that the processor is able to fetch and execute the data from the memory easily and fast.
   Advantages of the Segmentation The main advantages of segmentation are as follows:
  It provides a powerful memory management mechanism.
  Data related or stack related operations can be performed in different segments.
  Code related operation can be done in separate code segments.
  It allows to processes to easily share data.
  It allows to extend the address ability of the processor, i.e. segmentation allows the use of 16 bit registers to give an addressing capability of 1 Megabytes. Without segmentation, it would require 20 bit registers.
  It is possible to enhance the memory size of code data or stack segments beyond 64 KB by allotting more than one segment for each area. 

        
        
### 2.Explain flag register or PSW of 8086.

    ANS --> 
   ![image](https://user-images.githubusercontent.com/76240365/156193505-34ff87d2-409f-48df-af74-33ede5b54dcf.png)

### 3.Describe following pins. LOCK, HOLD..RQ0/GTO, INTR, B1-1E/S7, TEST,READY, RESET, NMI.
Ans.
 LOCK
    When this signal is active, it indicates to the other processors not to ask the CPU to leave the system bus. It is activated using the LOCK prefix on any instruction and is available at pin 29.

   HOLD
    This signal indicates to the processor that external devices are requesting to access the address/data buses. It is available at pin 31.

   RQ/GT1 and RQ/GT0
    These are the Request/Grant signals used by the other processors requesting the CPU to release the system bus. When the signal is received by CPU, then it sends acknowledgment. RQ/GT0 has a higher priority than RQ/GT1.

   INTR
     It is available at pin 18. It is an interrupt request signal, which is sampled during the last clock cycle of each instruction to determine if the processor considered this as an interrupt or not.

   S7/BHE
    BHE stands for Bus High Enable. It is available at pin 34 and used to indicate the transfer of data using data bus D8-D15. This signal is low during the first clock cycle, thereafter it is active. 

   TEST(bar)
    TEST pin is examined by the "WAIT" instruction. If the TEST pin is Low, execution continues. Otherwise the processor waits in an "idle" state. This input is synchronized internally during each clock cycle on the leading edge of CLK. 

   Ready
    It is available at pin 22. It is an acknowledgement signal from I/O devices that data is transferred. It is an active high signal. When it is high, it indicates that the device is ready to transfer data. When it is low, it indicates wait state. 

   RESET
    It is available at pin 21 and is used to restart the execution. It causes the processor to immediately terminate its present activity. This signal is active high for the first 4 clock cycles to RESET the microprocessor.

   NMI
   It stands for non-maskable interrupt and is available at pin 17. It is an edge triggered input, which causes an interrupt request to the microprocessor. 

### 4.Explain 2 Assembler directives.
.MODEL, DUP operator, END, EQU,ORG, .CODE, .STACK
 ANS.
    .MODEL
      Initializes the program memory model.

   DUP OPERATORS
    The DUP operator is very often used in the declaration of arrays This operator works with any of the data allocation directives.
	  e.g. -->        4 DUP(2)  --> is equivalent to 2, 2, 2, 2

  END
    Every assembly language source file must end with END on a line by itself.

  EQU
    we use EQU to define constants. This is similar to the use of #define to define a constant in C.

  ORG
    ORG means origin ORG is used for specific addressing in microprocessor and microcontroller programming.
    For example:
    .org 0000H
    This means we want to start our program from the 0000H address.

   DATA
    The data section is used for declaring initialized data or constants. 

   STACK
     defines a stack segment (with segment name STACK). The optional size specifies the number of bytes for the stack (default 1,024). The .STACK              directive              automatically closes the stack statement.

   CODE
       indicates the start of a code segment.
### 5.Explain absolute and Partial decoding techniques.
Ans. 
**ABSOLUTE DECODING**\
The decoding in which all available address line (16 lines in memory mapped and 8 lines in
peripheral mapping) are used for decoding to generate a unquie address is called absolute.\
**Partial Decoding**\
The decoding in which all available address line(16 lines in memory mapping and 8 lines in
peripheral mapping) are not used for decoding resulting in multiple address for same port is
called partial decoding.
### 6.Advantages and Disadvantages of DRAM.
Ans. 
**Advantages**\
Very dense\
Low cost per bit\
Simple memory cell structure\
**Disadvantages**\
Complex manufacturing process\
Date requires refreshing\
More complex enternal circuitry required (read and refresh periodically)\
Volatile memory\
Relatively slow operational speed\

### 7.WAP and draw a flowchart to add two 16- bit numbers and store the result in memory location 2309.
  ANS -->
  
            MOV CX, 0000
            MOV AX, AA22H
            MOV BX, BB34H
            ADD AX, BX
            JNC STORE
            INC CX
    STORE:  MOV [2309] AX
            MOV [230B] CX
        
![image](https://user-images.githubusercontent.com/76240365/156200705-0381687a-d1d7-4d7a-a275-0d292e6602eb.png)

    
### 8.WAP to find factorial of a given number.
 ANS.\
   ![image](https://user-images.githubusercontent.com/76240365/156820027-a4d44978-1a55-45d9-bfaf-a776d3aab3a4.png)



### 9.Draw 8086 minimum mode microprocessor based system
   ANS.\
   ![Minimum-Mode-Configuration-of-8086-1](https://user-images.githubusercontent.com/76240365/156820256-6cf1d9a0-c3dd-4e2b-9d2e-ce7154458ad3.jpg)

### 10.Draw 8086 maximum mode microprocessor based system
   ANS.\
    ![Untitleddrawing17](https://user-images.githubusercontent.com/76240365/156820458-66202fbb-7951-4cf2-9099-4e929d1ddd9a.png)
### 11.Explain addressing modes of 8086 microprocessor.
Ans. 
**Addressing modes in 8086 microprocessor**
The way of specifying data to be operated by an instruction is known as addressing modes. This specifies that the given data is an immediate data or an address. It also specifies whether the given operand is register or register pair.

Types of addressing modes:

Register mode – In this type of addressing mode both the operands are registers.
Example:
MOV AX, BX
XOR AX, DX
ADD AL, BL\
Immediate mode – In this type of addressing mode the source operand is a 8 bit or 16 bit data. Destination operand can never be immediate data.
Example:
MOV AX, 2000
MOV CL, 0A
ADD AL, 45
AND AX, 0000
Note that to initialize the value of segment register an register is required.

MOV AX, 2000
MOV CS, AX \
Displacement or direct mode – In this type of addressing mode the effective address is directly given in the instruction as displacement.
Example:
MOV AX, [DISP]
MOV AX, [0500]\
Register indirect mode – In this addressing mode the effective address is in SI, DI or BX.
Example: Physical Address = Segment Address + Effective Address
MOV AX, [DI]
ADD AL, [BX]
MOV AX, [SI] \
Based indexed mode – In this the effective address is sum of base register and index register.
Base register: BX, BP
Index register: SI, DI 
The physical memory address is calculated according to the base register.
Example:

MOV AL, [BP+SI]
MOV AX, [BX+DI]\
Indexed mode – In this type of addressing mode the effective address is sum of index register and displacement.
Example:
MOV AX, [SI+2000]
MOV AL, [DI+3000]\
Based mode – In this the effective address is the sum of base register and displacement.
Example:
MOV AL, [BP+ 0100]\
Based indexed displacement mode – In this type of addressing mode the effective address is the sum of index register, base register and displacement.
Example:
MOV AL, [SI+BP+2000] \
String mode – This addressing mode is related to string instructions. In this the value of SI and DI are auto incremented and decremented depending upon the value of directional flag.
Example:
MOVS B
MOVS W \
Input/Output mode – This addressing mode is related with input output operations.
Example:
IN A, 45
OUT A, 50 \
Relative mode –
In this the effective address is calculated with reference to instruction pointer.
Example:
JNZ 8 bit address
IP=IP+8 bit address 
### 12.Draw Timing diagram for read and write operation in minimum mode.
### 13.Draw Timing diagram for read and write operation in maximum mode.
### 14.Explain interrupts of 8086.
Ans.
Interrupt is the method of creating a temporary halt during program execution and allows peripheral devices to access the microprocessor. The microprocessor responds to that interrupt with an ISR (Interrupt Service Routine), which is a short program to instruct the microprocessor on how to handle the interrupt.

The following image shows the types of interrupts we have in a 8086 microprocessor.\
![reference image](https://www.tutorialspoint.com/microprocessor/images/interrupts.jpg)\
**Hardware Interrupts**
Hardware interrupt is caused by any peripheral device by sending a signal through a specified pin to the microprocessor.

The 8086 has two hardware interrupt pins, i.e. NMI and INTR. NMI is a non-maskable interrupt and INTR is a maskable interrupt having lower priority. One more interrupt pin associated is INTA called interrupt acknowledge.\
**Software Interrupts**
Some instructions are inserted at the desired position into the program to create interrupts. These interrupt instructions can be used to test the working of various interrupt handlers.
### 15.Explain following instructions in detail with example MOV dest, source,
MUL source, DIV source
AAS, DAA, AAD, CWD, SHL, RCR, NOP, STD
### 16.Explain Features of 8086
    ANS -->
   ![image](https://user-images.githubusercontent.com/76240365/156198697-59c3754a-89a1-4b5b-9751-ee96b1f37d7f.png)

### 17.Significance of Instruction Queue.
    ANS --> 
   ![image](https://user-images.githubusercontent.com/76240365/156196518-4cad982f-93c7-44ec-9297-64d7a0fcbeff.png)

### 18.WAP to translate a BCD number to 7 segment code
### 19.What is stack, Explain the instructions related to stack.
Ans. 
**Stack:**
The stack is a LIFO (last in, first out) data structure implemented in the RAM area and is used to store addresses and data when the microprocessor branches to a subroutine. Then the return address used to get pushed on this stack. Also to swap values of two registers and register pairs we use the stack as well.\

There are two more special purpose registers, each of 16-bit width. They are the stack pointer, SP, and the program counter, PC. The Stack Pointer register will hold the address of the top location of the stack.\
SP is a special purpose 16-bit register. It contains a memory address. PUSH and POP. In case of PUSH operation, the SP register gets decreased by 2 and new data item used to insert on to the top of the stack. On the other hand, in case of POP operation, the data item will have to be deleted from the top of the stack and the SP register will get increased by the value of 2.\
### 20.Explain BIU and EU in detail
  ANS -->


   ![image](https://user-images.githubusercontent.com/76240365/156196228-baa5bdc6-f460-4a5f-bc17-033d215c1c5d.png)
   ![image](https://user-images.githubusercontent.com/76240365/156195893-19879dfc-04f5-46bc-8b16-391288dfea6e.png)
   ![image](https://user-images.githubusercontent.com/76240365/156196002-cc6f50a3-e5da-4b17-bff2-91f4bd218e16.png)

