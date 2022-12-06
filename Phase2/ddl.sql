drop table if exists emails;
drop table if exists recipients;
drop table if exists homes;
drop table if exists climate_zones;
drop table if exists sender;
drop table if exists store;
drop table if EXISTS plants;

CREATE table if not EXISTS sender(
    sender_id int AUTO_INCREMENT not NULL,
    sender_name varchar(255) not null,
    primary key (sender_id)
);

CREATE table IF NOT EXISTS store(
    store_ID INT auto_increment not NULL,
    online boolean not null default false,
    primary key (store_ID)
);

create table if not EXISTS plants(
    plant_ID int AUTO_INCREMENT not null,
    plant_name VARCHAR(255) not null,
    plant_species varchar(255) not null,
    plant_color VARCHAR(255) not null,
    plant_climate_zone varchar(255) not null,
    plant_difficulty int not null,
    plant_light varchar(255) not null,
    plant_water INT default 1 not null,
    plant_price_range varchar(255) not null,
    plant_size varchar(255) not null,
    plant_warning varchar(255),
    store_ID int,
    primary key (plant_ID),
    foreign key (store_ID) references store(store_ID),
    constraint CHK_plant check (plant_size in ('XS','S','M','L') and plant_warning in('pet safe','child safe' ,'poisonous sap','not pet safe ','not child safe' ,'safe (both pet and child)','pollen','dust') )
);


CREATE table IF NOT EXISTS climate_zones(
    climate_zone VARCHAR(255) not NULL,
    zone_states VARCHAR(255) not null,
    primary key (climate_zone)
);


CREATE TABLE if NOT EXISTS homes(
    home_id  int AUTO_INCREMENT not null,
    state varchar(2) not null,
    avg_temperature int,
    sunlight VARCHAR(255) not null,
    pets int NOT null default 0,
    kids int default 0,
    frequency int not null,
    primary key (home_id),
    constraint ct_sunlight check (sunlight = 'direct' OR sunlight = 'shade' OR sunlight = 'indirect')
);

create table if not exists recipients(
    recipients_id int auto_increment,
    recipients_first_name varchar(255) not null,
    recipients_home_id int,
    recipients_plant_id int, 
    email VARCHAR(255) not null,
    primary key (recipients_id),
    foreign key (recipients_home_id) references homes(home_id),
    foreign key (recipients_plant_id) references plants(plant_ID)
);

create table if not exists emails (
    email_id int auto_increment not null, 
    email_recpients_id int not null, 
    email_subject VARCHAR(255), 
    date_reminder date not null, 
    email_body VARCHAR(255),
    primary key (email_id), 
    foreign key (email_recpients_id) references recipients(recipients_id)
);
