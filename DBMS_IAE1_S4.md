# DBMS IAE1 SEM IV
## Question Bank Answers
<br>

### 1. What are the mapping rules for converting ER diagram into relational model.
Ans. 
### 2. Explain extended ER features with examples.
Ans. EER is a high-level data model that incorporates the extensions to the original ER model. 
Enhanced ERD are high level models that represent the requirements and complexities of complex database.
In addition to ER model concepts EE-R includes\
Subclasses and Super classes\
Specialization and Generalization\
Category or union type\
Aggregation\
These concepts are used to create EE-R diagrams.

**Subclasses and Super class**\
Super class is an entity that can be divided into further subtype.\
Super class shape has sub groups: Triangle, Square and Circle.
Sub classes are the group of entities with some unique attributes.Sub class inherits the properties and attributes from super class.

**Specialization and Generalization**\
Generalization is a process of generalizing an entity which contains generalized attributes or properties of generalized entities.
It is a Bottom up process i.e. consider we have 3 sub entities Car, Truck and Motorcycle. Now these three entities can be generalized into one super class named as Vehicle.\
Specialization is a process of identifying subsets of an entity that share some different characteristic. It is a top down approach in which one entity is broken down into low level entity.\
In above example Vehicle entity can be a Car, Truck or Motorcycle.

**Category or Union**\
Relationship of one super or sub class with more than one super class.
Owner is the subset of two super class: Vehicle and House.

**Aggregation**\
Represents relationship between a whole object and its component.
Consider a ternary relationship Works_On between Employee, Branch and Manager. Now the best way to model this situation is to use aggregation, So, the relationship-set, Works_On is a higher level entity-set. Such an entity-set is treated in the same manner as any other entity-set. We can create a binary relationship, Manager, between Works_On and Manager to represent who manages what tasks.

### 3. Explain various types of outer join operations with example.
Ans. Types of Outer Join :
Outer join is again classified into 3 types: Left Outer Join, Right Outer Join, and Full Outer Join. These are explained as following below.

**Left Outer Join:**
Left Outer Join returns all the rows from the table on the left and columns of the table on the right is null padded. Left Outer Join retrieves all the rows from both the tables that satisfy the join condition along with the unmatched rows of the left table.

**Right Outer Join:**
Right Outer Join returns all the rows from the table on the right and columns of the table on the left is null padded. Right Outer Join retrieves all the rows from both the tables that satisfy the join condition along with the unmatched rows of the right table.

**Full Outer Join:**
Full Outer Join returns all the rows from both the table. When no matching rows exist for the row in the left table, the columns of the right table are null padded. Similarly, when no matching rows exist for the row in the right table, the columns of the left table are null padded. Full outer join is the union of left outer join and right outer join.

### 4. Define the terms:Attribute,tuple,degree,cardinality.   
Ans. (a) Relation :- Data arrange in row and columns and having certain properties.

(b) Domain :- This is a pool of values from which the actual values appearing in a given column are drawn.

(c) Tuple :- A row of a relation is known as tuple.

(d) Attribute :- A column of a relation is known as attribute.

(e) Degree :- The number of attributes in a relation is called Degree.

(f) Cardinality :- The number of rows in a relation is known as Cardinality.

### 5. Define super key and candidate key.
Ans. **Super Key:** 
Super Key is an attribute (or set of attributes) that is used to uniquely identifies all attributes in a relation. All super keys can’t be candidate keys but its reverse is true. In a relation, number of super keys are more than number of candidate keys. 

**Candidate Key:**
Candidate key is a set of attributes (or attribute) which uniquely identify the tuples in a relation or table. As we know that Primary key is a minimal super key, so there is one and only one primary key in any relation but there is more than one candidate key can take place. Candidate key’s attributes can contain NULL value which oppose to the primary key. 

### 6.Explain foreign key with example.
Ans. A foreign key is a set of attributes in a table that refers to the primary key of another table. The foreign key links these two tables.
Consider two tables Student and Department having their respective attributes as shown in the below table structure:

**Student table**
| Stud_Id | Course | Name |
| ----- | ----- | ------ |
| 101 | Computer | John |
| 102 | AI | Jack |
| 103 | Biology | Jones |


**Department table**
| Department | Stud_Id |
| ---- | ---- |
| CS | 103 | 
| EXTC | 102 | 
| MECH | 101 | 

In the tables, one attribute, you can see, is common, that is Stud_Id, but it has different key constraints for both tables. In the Student table, the field Stud_Id is a primary key because it is uniquely identifying all other fields of the Student table. On the other hand, Stud_Id is a foreign key attribute for the Department table because it is acting as a primary key attribute for the Student table. It means that both the Student and Department table are linked with one another because of the Stud_Id attribute.

### 7. Draw DBMS architecture.
Ans. Database architecture can be seen as a single tier or multi-tier.
But logically, database architecture is of two types like: 2-tier architecture and 3-tier architecture.\
1-Tier Architecture\
In this architecture, the database is directly available to the user. It means the user can directly sit on the DBMS and uses it.
2-Tier Architecture\
The 2-Tier architecture is same as basic client-server. In the two-tier architecture, applications on the client end can directly communicate with the database at the server side. For this interaction, API's like: ODBC, JDBC are used.
![2 Tier](https://static.javatpoint.com/dbms/images/dbms-2-tier-architecture.png)
<br>
3-Tier Architecture\
The 3-Tier architecture contains another layer between the client and server. In this architecture, client can't directly communicate with the server.\
![3 Tier](https://static.javatpoint.com/dbms/images/dbms-3-tier-architecture.png)

### 8.Explain Specialization,generalization with example.
Ans. 
### 9.Explain different types of attribute of an entity with example.
Ans. 
### 10. Explain following relational algebra operations with suitable examples.
     A.Union    B. Cartesian product   C.Selection     D.Projection
### 11 What are different types of entities. Differentiate between them. 
### 12.Differentiate between file system and database system.
### 13.What do you mean by data abstraction and data independence in DBMS.
