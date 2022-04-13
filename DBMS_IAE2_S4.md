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
  
### 8. 






