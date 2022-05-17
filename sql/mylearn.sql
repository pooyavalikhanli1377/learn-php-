--my sql connect in cmd  
mysql -h localhost -u root -p
--show  
show databases;
show tables; 
--create 
create table table_name (clum_name varible&key&(number) ) ;
create database database_name ;
--delet 
drop  database database_name;
drop table table_name ;
truncate table  table_name;
--out put table 
describe table_name ; 
--go table or database
use table\database  table_name\database_name 
--insert 
insert into table_name (culname1,culname2) value (value1,valuu2)
insert into tabale_name value (value1,value2)
--delet 
delete from tabale_name where condition
--update 
update table_name set clumn1="value" where condition 
--select 
select * from table_name 
select * from table_name where condition
--like 
select * from table_name where clumn1 like "% condition%"
--between 
select * from table_name where clum1 between condition1 or condition2
--orderby  
select *from tabale_name where culm where condition order by condition asc or desc
--groupby 
select clum1 ,count(clumn),culmn2 from table_name  
where condition 
group by clumn
having condition 
order by clumn asc or desc 
--limit 
select * from table_name where_or_groupby 
limit start, leangth
--join ANSI_SQL_92
--inerjoin
select * from table_name join table_name  
on table_name.culnme =table_name.culnme  
--left join
select * from table_name left join table_name  
on table_name.culnme =table_name.culnme  
--rigt join
select * from table_name right join table_name  
on table_name.culnme =table_name.culnme  
--full join
select * from table_name left join table_name  
on table_name.culnme =table_name.culnme  
union
select * from table_name right join table_name  
on table_name.culnme =table_name.culnme  
