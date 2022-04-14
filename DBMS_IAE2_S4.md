## DBMS IAE 2 Answers

### 1. Explain different DDL and DML commands with example.

Ans.
DDL:
DDL is Data Definition Language which is used to define data structures. For example: create table, alter table are instructions in SQL.

DML:
DML is Data Manipulation Language which is used to manipulate data itself. For example: insert, update, delete are instructions in SQL.

List of DDL commands:

CREATE: This command is used to create the database or its objects (like table, index, function, views, store procedure, and triggers).
DROP: This command is used to delete objects from the database.
ALTER: This is used to alter the structure of the database.
TRUNCATE: This is used to remove all records from a table, including all spaces allocated for the records are removed.
COMMENT: This is used to add comments to the data dictionary.
RENAME: This is used to rename an object existing in the database.

List of DML commands:

INSERT : It is used to insert data into a table.
UPDATE: It is used to update existing data within a table.
DELETE : It is used to delete records from a database table.
LOCK: Table control concurrency.
CALL: Call a PL/SQL or JAVA subprogram.
EXPLAIN PLAN: It describes the access path to data.

### 2. Explain types of integrity Constraints in SQL.

Ans. Integrity constraints are a set of rules. It is used to maintain the quality of information.\

Integrity constraints ensure that the data insertion, updating, and other processes have to be performed in such a way that data integrity is not affected.\
**1. Domain constraints**\

- Domain constraints can be defined as the definition of a valid set of values for an attribute.
- The data type of domain includes string, character, integer, time, date, currency, etc. The value of the attribute must be available in the corresponding domain.\
  **2. Entity integrity constraints**\
  The entity integrity constraint states that primary key value can't be null.\
  This is because the primary key value is used to identify individual rows in relation and if the primary key has a null value, then we can't identify those rows.
  A table can contain a null value other than the primary key field.\
  **3. Referential Integrity Constraints**\
  A referential integrity constraint is specified between two tables.\
  In the Referential integrity constraints, if a foreign key in Table 1 refers to the Primary Key of Table 2, then every value of the Foreign Key in Table 1 must be null or be available in Table 2.\
  **4. Key constraints**\
  Keys are the entity set that is used to identify an entity within its entity set uniquely.\
  An entity set can have multiple keys, but out of which one key will be the primary key. A primary key can contain a unique and null value in the relational table.\

### 3. What are SQL set operation.Explain in details(All four)

Ans. SQL Set Operation
The SQL Set operation is used to combine the two or more SQL SELECT statements.

1. Union\
   The SQL Union operation is used to combine the result of two or more SQL SELECT queries.\
   In the union operation, all the number of datatype and columns must be same in both the tables on which UNION operation is being applied.\
   The union operation eliminates the duplicate rows from its resultset.\
2. Union All\
   Union All operation is equal to the Union operation. It returns the set without removing duplication and sorting the data.\
3. Intersect\
   It is used to combine two SELECT statements. The Intersect operation returns the common rows from both the SELECT statements.\
   In the Intersect operation, the number of datatype and columns must be the same.\
   It has no duplicates and it arranges the data in ascending order by default.\
4. Minus\
   It combines the result of two SELECT statements. Minus operator is used to display the rows which are present in the first query but absent in the second query.\
   It has no duplicates and data arranged in ascending order by default.\

### 4. Write a short note on views on SQL(Advantages and disadvantages also)

Ans. Views in SQL

- Views in SQL are considered as a virtual table. A view also contains rows and columns.
- To create the view, we can select the fields from one or more tables present in the database.
- A view can either have specific rows based on certain condition or all the rows of a table.

**Advantages of views**\
Security\
Each user can be given permission to access the database only through a small set of views that contain the specific data the user is authorized to see, thus restricting the user's access to stored data.\
Query Simplicity\
A view can draw data from several different tables and present it as a single table, turning multi-table queries into single-table queries against the view.\

**Disadvantages of views**\
Performance\
Views create the appearance of a table, but the DBMS must still translate queries against the view into queries against the underlying source tables. If the view is defined by a complex, multi-table query then simple queries on the views may take considerable time.\
Update restrictions\
When a user tries to update rows of a view, the DBMS must translate the request into an update on rows of the underlying source tables. This is possible for simple views, but more complex views are often restricted to read-only.\

### 5. What is trigger? Explain trigger with suitable example.

Ans. **Trigger**\ A trigger is a stored procedure in database which automatically invokes whenever a special event in the database occurs. For example, a trigger can be invoked when a row is inserted into a specified table or when certain table columns are being updated.\

**Example**\
Given Student Report Database, in which student marks assessment is recorded. In such schema, create a trigger so that the total and average of specified marks is automatically inserted whenever a record is insert.\
Here, as trigger will invoke before record is inserted so, BEFORE Tag can be used.\
SQL Trigger to problem statement.\
create trigger stud_marks \
before INSERT \
on \
Student\
for each row\
set Student.total = Student.subj1 + Student.subj2 + Student.subj3, Student.per = St\

### 6. What are the Pitfalls in Relational-Database designs.

Ans.

### 7. Explain Partial Dependency in normalization.

Ans.
Partial Dependency occurs when a non-prime attribute is functionally dependent on part of a candidate key.\
The 2nd Normal Form (2NF) eliminates the Partial Dependency.\
Example\
<StudentProject>

![image](https://user-images.githubusercontent.com/82268112/163270243-44eb23ef-4a42-431b-a53c-7b8ae12c6082.png)

The StudentName can be determined by StudentID, which makes the relation Partial Dependent.\
The ProjectName can be determined by ProjectNo, which makes the relation Partial Dependent.\
Therefore, the <StudentProject> relation violates the 2NF in Normalization and is considered a bad database design.

### 8. When an indirect relationship causes functional dependency it is called Transitive Dependency.

Ans.
To achieve 3NF, eliminate the Transitive Dependency.
Ans. When an indirect relationship causes functional dependency it is called Transitive Dependency.

If P -> Q and Q -> R is true, then P-> R is a transitive dependency.

To achieve 3NF, eliminate the Transitive Dependency.

**image needs uploading**

The above table is not in 3NF because it has a transitive functional dependency −

Movie_ID -> Listing_ID
Listing_ID -> Listing_Type

Therefore, the following has transitive functional dependency.

Movie_ID -> Listing_Type.

### 9. State the need of normalization.

Ans.
Normalization is the process of structuring and handling the relationship between data to minimize redundancy in the relational table and avoid the unnecessary anomalies properties from the database like insertion, update and delete. It helps to divide large database tables into smaller tables and make a relationship between them. It can remove the redundant data and ease to add, manipulate or delete table fields.

- It is used to remove the duplicate data and database anomalies from the relational table.
- Normalization helps to reduce redundancy and complexity by examining new data types used in the table.
- It is helpful to divide the large database table into smaller tables and link them using relationship.

### 10. Write a short note on: Boyce-Codd Normal Form (BCNF)

Ans. Boyce–Codd Normal Form (BCNF) is based on functional dependencies that take into account all candidate keys in a relation; however, BCNF also has additional constraints compared with the general definition of 3NF.\
To test whether a relation is in BCNF, we identify all the determinants and make sure that they are candidate keys.\

### 11.

Ans.  
**1NF**\
If a relation contain composite or multi-valued attribute, it violates first normal form or a relation is in first normal form if it does not contain any composite or multi-valued attribute. A relation is in first normal form if every attribute in that relation is singled valued attribute.\
**2NF**\
To be in second normal form, a relation must be in first normal form and relation must not contain any partial dependency. A relation is in 2NF if it has No Partial Dependency.\
Partial Dependency – If the proper subset of candidate key determines non-prime attribute, it is called partial dependency.\
**3NF**\
A relation is in third normal form, if there is no transitive dependency for non-prime attributes as well as it is in second normal form.\
A relation is in 3NF if at least one of the following condition holds in every non-trivial function dependency X –> Y\

X is a super key.\
Y is a prime attribute (each element of Y is part of some candidate key).\

### 12.

Ans.
States through which a transaction goes during its lifetime. These are the states which tell about the current state of the Transaction and also tell how we will further do the processing in the transactions. These states govern the rules which decide the fate of the transaction whether it will commit or abort. \

Active State –
When the instructions of the transaction are running then the transaction is in active state. If all the ‘read and write’ operations are performed without any error then it goes to the “partially committed state”; if any instruction fails, it goes to the “failed state”.

Partially Committed –
After completion of all the read and write operation the changes are made in main memory or local buffer. If the the changes are made permanent on the Data Base then the state will change to “committed state” and in case of failure it will go to the “failed state”.

Failed State –
When any instruction of the transaction fails, it goes to the “failed state” or if failure occurs in making a permanent change of data on Data Base.

Aborted State –
After having any type of failure the transaction goes from “failed state” to “aborted state” and since in previous states, the changes are only made to local buffer or main memory and hence these changes are deleted or rolled-back.

Committed State –
It is the state when the changes are made permanent on the Data Base and the transaction is complete and therefore terminated in the “terminated state”.

Terminated State –
If there isn’t any roll-back or the transaction comes from the “committed state”, then the system is consistent and ready for new transaction and the old transaction is terminated.

### 13. What are ACID properties of transaction.Explain in detail.

Ans.  
Atomicity
By this, we mean that either the entire transaction takes place at once or doesn’t happen at all. There is no midway i.e. transactions do not occur partially. Each transaction is considered as one unit and either runs to completion or is not executed at all. It involves the following two operations.
—Abort: If a transaction aborts, changes made to database are not visible.
—Commit: If a transaction commits, changes made are visible.

Consistency
This means that integrity constraints must be maintained so that the database is consistent before and after the transaction. It refers to the correctness of a database. Referring to the example above,
The total amount before and after the transaction must be maintained.
Total before T occurs = 500 + 200 = 700.
Total after T occurs = 400 + 300 = 700.

Isolation
This property ensures that multiple transactions can occur concurrently without leading to the inconsistency of database state. Transactions occur independently without interference. Changes occurring in a particular transaction will not be visible to any other transaction until that particular change in that transaction is written to memory or has been committed.

Durability:
This property ensures that once the transaction has completed execution, the updates and modifications to the database are stored in and written to disk and they persist even if a system failure occurs. These updates now become permanent and are stored in non-volatile memory. The effects of the transaction, thus, are never lost.

### 14.

Ans.
When multiple transactions execute concurrently in an uncontrolled or unrestricted manner, then it might lead to several problems.
Such problems are called as concurrency problems.

Dirty Read Problem\
Unrepeatable Read Problem\
Lost Update Problem\
Phantom Read Problem\

### 15. What do you mean by Serializability in DBMS?

Ans. Serializability is the concept in a transaction that helps to identify which non-serial schedule is correct and will maintain the database consistency. It relates to the isolation property of transaction in the database.

Serializability is the concurrency scheme where the execution of concurrent transactions is equivalent to the transactions which execute serially.

Serializable Schedule\
A serial schedule is always a serializable schedule because any transaction only starts its execution when another transaction has already completed its execution. However, a non-serial schedule of transactions needs to be checked for Serializability.

### 16. What do you mean by Deadlock in DBMS.

Ans.
In a database, a deadlock is an unwanted situation in which two or more transactions are waiting indefinitely for one another to give up locks. Deadlock is said to be one of the most feared complications in DBMS as it brings the whole system to a Halt.

**Deadlock prevention**
For a large database, the deadlock prevention method is suitable. A deadlock can be prevented if the resources are allocated in such a way that deadlock never occurs. The DBMS analyzes the operations whether they can create a deadlock situation or not, If they do, that transaction is never allowed to be executed.

### 17. Explain the methods to prevent the deadlock.

Ans.
**Deadlock Prevention**\
Deadlock prevention method is suitable for a large database. If the resources are allocated in such a way that deadlock never occurs, then the deadlock can be prevented.
The Database management system analyzes the operations of the transaction whether they can create a deadlock situation or not. If they do, then the DBMS never allowed that transaction to be executed.\
**Wait-Die scheme**\
In this scheme, if a transaction requests for a resource which is already held with a conflicting lock by another transaction then the DBMS simply checks the timestamp of both transactions. It allows the older transaction to wait until the resource is available for execution.\
**Wound wait scheme**\
In wound wait scheme, if the older transaction requests for a resource which is held by the younger transaction, then older transaction forces younger one to kill the transaction and release the resource. After the minute delay, the younger transaction is restarted but with the same timestamp.\
If the older transaction has held a resource which is requested by the Younger transaction, then the younger transaction is asked to wait until older releases it.
