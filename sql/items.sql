/*drop existing tables*/
drop table if exists employer;
drop table if exists job;

/*create new talbes*/
create table employer (
    id        integer not null primary key,
    name      varchar(50) not null,
    industry  text default '',    
    details   text default ''
);

create table job (
    id           integer not null primary key,
    title        text default '',
    description  text default '',
    location     text default '',
    salary       real default 0.0,
  	employerID INTEGER NOT NULL REFERENCES employer(id)
);

/*insert default data into tables*/
insert into employer values (null, "Hack Attack", "IT", "Started in 1999, best ever.");
insert into employer values (null, "Doctors Anonymous", "Healthcare", "bestest ever.");
insert into job values (null, "Software Developer", "Code monkey job, write code as quickly as possible or get fired!", "Brisbane", 50000.00, 1);
insert into job values (null, "Web Programmer", "You embrace the web and are not afraid of dipping into some CSS. You responsibilities include writing back end and front end javascript.", "Melbourne", 55000.55, 1);
insert into job values (null, "Desktop Support Specialist", "Require someone with mad IT skills to manage and small database of users using Open Directory.", "Sydney", 60000.86, 1);
insert into job values (null, "Elite Hacker", "Looking for a security penetration tester to perform an internal audit.", "Gold Coast", 65000.30, 1);
insert into job values (null, "Healthcare Practitioner", "Helping the needy in Africa where healthcare is lacking.", "Africa", 79000, 2);
insert into job values (null, "General Practitioner", "Looking for someone to deal prozac to the public.", "USA", 100000, 2);