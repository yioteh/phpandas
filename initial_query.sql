create database phptest;

use phptest;

show tables;

create table todos (id integer primary key auto_increment, description text NOT NULL, completed boolean NOT NULL);

insert into todos (description, completed) values ('Get your ass to the mars', false);