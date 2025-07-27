/*1. Crie um bacno de dados e uma tabela para a lista de emails*/

/* Criando o banco de dados */

create database elvis_store

use elvis_store

create table email_list (
    first_name varchar(20),
    last_name varchar(20),
    email varchar(60)
)

describe email_list

drop table email_list

/* select */

select * from email_list where first_name = 'Martin'
select last_name from email_list where first_name = 'Bubba'
select first_name, last_name from email_list where email = 'ls@objectville.net'
select * from email_list where first_name = 'Amber' and last_name = 'McCarthy'


