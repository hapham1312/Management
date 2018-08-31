CREATE TABLE students (studentID int NOT NULL, firstname varchar(255),  lastname varchar(255),class varchar(20),DOB date, PRIMARY KEY(studentID));
CREATE TABLE courses(courseID varchar(20)  NOT NULL, coursename varchar(255), mentor varchar(255), date_start date, date_end date, PRIMARY KEY(courseID));
CREATE TABLE enrollments(ID int AUTO_INCREMENT ,studentID int, courseID varchar(20),
 PRIMARY KEY(ID),
  FOREIGN KEY(studentID) REFERENCES students(studentID),
   FOREIGN KEY(courseID) REFERENCES courses(courseID));
-- insert value into students table--
INSERT INTO students(studentID,firstname,lastname, class, DOB) VALUES 
(1501040052,"Pham","Ha","4C15","1997-12-13"),
(1501040121,"Nguyen","Linh","4C15","1997-12-12"),
(1501040122,"Truong","Linh","4C15","1997-12-12"),
(1501040123,"Pham","Linh","4C15","1997-12-12"),
(1501040124,"Cao","Linh","4C15","1997-12-12"),
(1501040125,"Tran","Linh","4C15","1997-12-12"),
(1501040126,"Mai","Linh","4C15","1997-12-12"),
(1501040050,"Nguyen","Hieu","4C15","1997-12-13"),
(1501040051,"Truong","Hanh","4C15","1997-12-13"),
(1501040053,"Ha","Phu","4C15","1997-12-13"),
(1507020303,"Pham","Nam","4C15","1996-01-16");
-- insert value into courses table--
INSERT INTO courses(courseID,coursename,mentor, date_start,date_end) VALUES
("HCI","Human Computer Interaction", "Trang Truong", "2018-09-15","2018-12-20"),
("AI","Artificial Intelligent", "Ha Pham", "2018-09-15","2018-12-20"),
("SAD","System Analysis Design", "Quynh Cao", "2018-09-15","2018-12-20");
-- insert value into enrollment table--
INSERT INTO enrollments(studentID, courseID) VALUES(1501040052,"HCI"),
(1501040121,"AI"),
(1507020303,"SAD");