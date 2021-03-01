create database  db5;



CREATE TABLE branches (
id INT( 4 ) NOT NULL  PRIMARY KEY ,
name VARCHAR( 10 ) NOT NULL ,
address VARCHAR( 50 ) NOT NULL ,
projectid0 INT( 4 ) ,
primarykey(id ,projectid ) ),
foreign key(projectid0) references province(projectid)
) ;


CREATE TABLE staff (
staffid INT( 4 ) NOT NULL PRIMARY KEY ,
staffname VARCHAR( 10 ) NOT NULL ,
id INT( 4 ) NOT NULL unique ,
projectid1 INT( 4 )  unique,
teamid1 INT( 4 )   ,
foreign key(projectid1) references province(projectid)
foreign key(teamid1) references province(teamid)

)  ;

CREATE TABLE team (
teamid INT( 4 ) NOT NULL  PRIMARY KEY ,
teamname VARCHAR( 10 ) NOT NULL 

)  ;
CREATE TABLE project (
projectid INT( 4 ) NOT NULL PRIMARY KEY  ,
projectname VARCHAR( 10 ) NOT NULL 
)  ;

