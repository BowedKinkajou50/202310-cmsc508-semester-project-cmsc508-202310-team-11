-- 1. Display a list of recipients name and email
    select 
        recipients_first_name,
        email
    from 
        recipents
    order by 
        recipients_first_name ASC
    ;

-- 2. Display a list of small plants

    select 
        plant_ID, 
        plant_name
    from 
        plant
    where 
        plant_size = 'S'
    ; 

-- 3. Display a list of easy difficulty plants
-- Super easy: 1-2, easy:2-4, medium: 5-6, hard: 7-8, very hard: 9-10

    select 
        plant_ID, 
        plant_name
    from 
        plant
    where 
        plant_difficulty = '3' 
        or 
        plant_difficulty = '4'
    ;

-- 4. Display a list of recipients who live in Virginia state

    select 
        recipients_id,
        recipients_first_name
    from 
        recipients
            join homes on (recipients_home_id = home_id)
    where 
        state = 'VA'
    ;

-- 5. Display a list of green succulents

    select 
        plant_ID,
        plant_name
    from 
        plants
    where 
        plant_color = 'Green'
        AND
        plant_species = 'Succulent'
    ;

-- 6. Display a list of low cost plants <20$

    select 
        plant_ID, 
        plant_name
    from 
        plants
    where 
        plant_price_range = '$'
    ;

-- 7. Display the names of all recipients in zone 2 and 4

    select 
        recipients_first_name
    from 
        recipients
    where 
        climate_zones = '2'
        AND
        climate_zone = '4'
    ;

-- 8. Display the names of all recipients in zone 5 and have kids

    select
        recipients_first_name
    from 
        recipients
            join homes on (home_id = home_id)
            join climate_zones on (state = zone_states)
    where
        kids > 0
        and
        climate_zone = '5'
    ;

-- 9. Display names of plants that are not the color green

    select 
        plant_ID, 
        plant_name
    from 
        plants
    where 
        plant_color != 'Green'
    ;

-- 10. Display names of plants with difficulty level below 5

    select 
        plant_ID,
        plant_name
    from 
        plants
    where 
        plant_difficulty < 5
    ;
    
-- Display the states of homes with 70 degree temperature and below
-- Display all stores that are online
-- Display how frequent you should water for all common house plants
-- Display the subject of all emails sent
-- Display the names of all all recipients with kids and pet
-- Display the names of all recipents who were gifted a cacti
-- Display the states of recipents with 2 or more kids
-- Display the name and plant ID of the plants that need indirect lighting
-- Display body of the emails sent between July 2022 and August 2022
-- Display the names of plants that fall between 6-8 level of difficulty
