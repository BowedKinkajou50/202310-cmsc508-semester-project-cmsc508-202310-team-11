drop table if EXISTS Plants;
drop table if exists store;
drop table if exists sender;
drop table if exists climate_zones;
drop table if exists store;
drop table if exists homes;
drop table if exists recipients;

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

create table if not EXISTS Plants(
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
    constraint CHK_plant check (plant_size in ('XS','S','M','L') and plant_warning in('pet safe','child safe' ,'poisonous sap','not pet safe ','not child safe' ,'safe (both pet and child)','pollen','dust',) )
);


CREATE table IF NOT EXISTS climate_zones(
    climate_zone INT not NULL,
    zone_states VARCHAR(255) not null,
    primary key (climate_zone)
);


CREATE TABLE if NOT EXISTS homes(
    home_id  int AUTO_INCREMENT not null,
    state varchar(2) not null,
    avg_temperature int,
    sunlight VARCHAR(255) not null,
    pets int non null default 0,
    kids int default 0,
    frequency int not null,
    primary key (home_id),
    constraint ct_sunlight check (sunlight = 'direct' OR sunlight = 'shade' OR sunlight = 'indirect')
);

create table if not exists recipients(
    recipients_id int auto_increment,
    recipients_first_name varchar(255) not null,
    home_id int,
    email VARCHAR(255) not null,
    primary key (recipients_id),
    foreign key (home_id) references homes(home_id)
);
