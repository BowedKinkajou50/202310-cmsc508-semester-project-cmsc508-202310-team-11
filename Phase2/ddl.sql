drop table if exists emails;
drop table if exists recipients;
drop table if exists homes;
drop table if exists climate_zones;
drop table if exists sender;
drop table if EXISTS plants;
drop table if exists store;


CREATE table if not EXISTS sender(
    sender_id int AUTO_INCREMENT not NULL,
    sender_name varchar(255) not null,
    primary key (sender_id)
);

CREATE table IF NOT EXISTS store(
    store_ID INT auto_increment not NULL,
    store_name varchar(255),
    store_link varchar(255),
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
    constraint CHK_plant check (plant_size in ('XS','S','M','L') 
        and plant_warning in ('Safe', 'Poisonous Sap', 'Allergies', 'Not Pet Safe', 'Not Child Safe', 'Not Pet Safe + Not Child Safe', 'Not Pet Safe + Not Child Safe + Poisonous Sap','Not Pet Safe + Not Child Safe + Allergies + Poisonous Sap')                     
        and plant_species in ('cacti', 'fern', 'palm', 'flowering', 'succulent', 'common house'))
);



CREATE table IF NOT EXISTS climate_zones(
    climate_zone INT not NULL,
    zone_state VARCHAR(255) not null,
    primary key (zone_state)
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

INSERT into sender(sender_name)
VALUES 
('Angela'),
('Helen'),
('Julie'),
('Owen'),
('Evan'),
('Evelyn');

INSERT into store(online, store_name, store_link)
VALUES
(true,'Lively Root','https://www.livelyroot.com/'),
(false,'Plant house','https://www.planthouse.us/richmond-va'),
(true,'Stranges','https://www.stranges.com/'),
(false,'Plant Vines','https://www.plantvine.com/'),
(true,'Hey Rooted','https://heyrooted.com/'),
(false,'Gardyn','https://mygardyn.com/');

INSERT into plants(plant_ID, plant_name, plant_species, plant_color, plant_climate_zone, plant_difficulty, plant_light, plant_water, plant_price_range, plant_size, plant_warning, store_ID)
VALUES
(1, 'Cereus', 'Cacti', 'Green', '3', 5, 'direct', 3, '$$', 'L', 'Safe', 1),
(2, 'Ferocactus', 'Cacti', 'Green', '3', 2, 'direct', 2, '$', 'M', 'Safe', 1),
(3, 'Jade', 'Succulent', 'Green', '1,2,3', 4, 'shade', 2, '$', 'XS', 'Poisonous Sap', 3),
(4, 'Burros Tail', 'Succulent', 'Green', '1,2,3', 7, 'direct', 2, '$', 'M', 'Safe', 2),
(5, 'Parlor Palm', 'Palm', 'Green', '1,2,3', 4, 'shade', 2, '$', 'M', 'Not Pet Safe', 1),
(6, 'Majesty Palm', 'Palm', 'Green', '1,2,3', 5, 'shade', 2, '$$', 'L', 'Safe', 3),
(7, 'African Violet', 'Flowering', 'Purple', '2,3', 6, 'indirect', 1, '$', 'S', 'Allergies', 2),
(8, 'Pink Anthurium', 'Flowering', 'Pink', '2,3', 3, 'indirect', 1, '$$$', 'S', 'Not Pet Safe + Not Child Safe + Allergies + Poisonous Sap', 5),
(9, 'Delphinum', 'Flowering', 'Blue', '4,5,6,7', 7, 'direct', 1, '$$', 'L', 'Not Pet Safe + Not Child Safe', 4),
(10, 'Staghorn Fern', 'Fern', 'Purple', '1,2,3', 8, 'indirect', 1, '$', 'M', 'Safe', 3),
(11, 'Alocasia', 'Common House', 'Purple', '2,3,4', 5, 'indirect', 1, '$$', 'L', 'Not Pet Safe + Not Child Safe', 4),
(12, 'Monstera', 'Common House', 'Freen', '1,2,3,4', 3, 'indirect', 2, '$$', 'L', 'Not Pet Safe + Not Child Safe + Poisonous Sap', 6),
(13, 'Philodendron Pathos', 'Common House', 'Green', '1,2,3', 2, 'indirect', 2, '$$', 'M', 'Not Pet Safe + Not Child Safe', 5),
(14, 'Fiddle Leaf Fig', 'Common House', 'Green', '1,2,3', 7, 'direct', 1, '$$', 'L', 'Not Pet Safe + Not Child Safe + Poisonous Sap', 4),
(15, 'Pilea Pepermoidies', 'Common House', 'Green', '1,2,3,4', 4, 'indirect', 1, '$', 'M', 'Allergies', 6)
;

INSERT into climate_zones(zone_state, climate_zone)
VALUES
('AS', 1),
('GU', 1),
('HI', 1),
('MP', 1),
('PR', 1),
('UM', 1),
('FI', 2),
('TX', 2),
('AL', 3),
('AR', 3),
('CA', 3),
('GA', 3),
('LA', 3),
('MS', 3),
('NC', 3),
('OK', 3),
('SC', 3),
('VA', 4),
('DE', 4),
('IN', 4),
('KS', 4),
('KY', 4),
('MD', 4),
('MO', 4),
('NJ', 4),
('OR', 4),
('TN', 4),
('VT', 4),
('IL', 5),
('NE', 5),
('NH', 5),
('NM', 5),
('NV', 5),
('OH', 5),
('PA', 5),
('RI', 5),
('WA', 5),
('WV', 5),
('IA', 6),
('ID', 6),
('ME', 6),
('MI', 6),
('MN', 6),
('MT', 6),
('ND', 6),
('NY', 6),
('SD', 6),
('UT', 6),
('WI', 6),
('WY', 6),
('AK', 7)
;



INSERT into homes(home_id, state, avg_temperature, sunlight, pets, kids, frequency)
VALUES
(1, 'VA', 72, 'direct', 3, 2, 6),
(2, 'MA', 52, 'shade', 0, 1, 5),
(3, 'MD', 70, 'indirect', 0, 0, 2),
(4, 'CA', 80, 'direct', 4, 1, 6),
(5, 'CO', 69, 'shade', 2, 2, 7),
(6, 'MA', 60, 'shade', 1, 3, 7)
;



INSERT into recipients(recipients_id, recipients_first_name, recipients_home_id, recipients_plant_id, email)
VALUES
(1, 'Annie', 1, 4, 'sasculia@omdiaco.com'),
(2, 'John', 2, 4, 'eingekochtes@nakiuha.com'),
(3, 'Cena', 3, 4, 'dmorufi@kasmabirader.com'),
(4, 'Mateo', 4, 4, 'ninahoegele@nakiuha.com'),
(5, 'Lin', 1, 5, 'mlwick@acampadaparis.com'),
(6, 'Mohammud', 6, 4, 'gilmarsanteiro@cuendita.com')
;

INSERT into emails(email_id, email_recpients_id, email_subject, date_reminder, email_body)
VALUES
(1, 1, 'Reminder', '2022-3-23',"bac"),
(2, 2, 'Plant Bought', '2022-1-20',"asdf"),
(3, 3, 'Reminder','2022-2-17',"absdv"),
(4, 4, 'Reminder', '2022-7-14',"asdfadsf"),
(5, 5, 'Reminder', '2022-8-4',"asdfadsf"),
(6, 6, 'Reminder', '2022-8-19',"sdfasdfasdfasdf")
;
