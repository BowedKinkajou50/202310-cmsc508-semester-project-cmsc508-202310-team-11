-- 1. Display a list of recipients name and email
    select 
        recipients_first_name,
        email
    from 
        recipients
    order by 
        recipients_first_name ASC
    ;

-- 2. Display a list of small plants

    select 
        plant_ID, 
        plant_name
    from 
        plants
    where 
        plant_size = 'S'
    ; 

-- 3. Display a list of easy difficulty plants
-- Super easy: 1-2, easy:2-4, medium: 5-6, hard: 7-8, very hard: 9-10

    select 
        plant_ID, 
        plant_name
    from 
        plants
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
            join homes on (home_id = recipients_home_id)
            join climate_zones on (zone_state = state)
    where 
        climate_zone = '2'
        and
        climate_zone = '4'
    ;

-- 8. Display the names of all recipients in zone 5 and have kids

    select
        recipients_first_name
    from 
        recipients
            join homes on (home_id = home_id)
            join climate_zones on (state = zone_state)
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
    
-- 11. Display the states of homes with 70 degree temperature and below

    select 
        home_id,
        state
    from 
        homes
    where
        avg_temperature <= '70'
    order by 
        avg_temperature ASC
    ;

-- 12. Display all stores that are online

    select 
        store_ID
    from 
        store
    where 
        online = 'true'
    order by 
        store_ID ASC
    ;

-- 13. Display how frequent you should water for all common house plants
    
    select 
        plant_ID,
        plant_name, 
        plant_water
    from 
        plants
    where
        plant_species = 'common'
    order by
        plant_ID ASC
    ;
    

-- 14. Display the subject of all emails sent

    select 
        email_id,
        email_subject
    from 
        emails
    order by  
        email_id
    ;

-- 15. Display the names of all recipients with kids and pet

    select
        recipients_first_name
    from 
        recipients
            join homes on (home_id = recipients_home_id)
    where 
        pets != null
        and 
        kids != 0
    ;

-- 16. Display the names of all recipents who were gifted a cacti

    select 
        recipients_id,
        recipients_first_name
    from 
        recipients
            join plants on (plant_ID = recipients_plant_id)
    where 
        plant_species = 'cacti'
    order by 
        recipients_id ASC
    ;

-- 17. Display the states of recipents with 2 or more kids

    select
        home_id,
        state
    from 
        homes
    where
        kids >= 2
    order by 
        home_id ASC
    ;

-- 18. Display the name and plant ID of the plants that need indirect lighting

    select 
        plant_ID,
        plant_name
    from 
        plants 
    where
        plant_light = 'indirect lighting'
    order by 
        plant_ID
    ;

-- 19. Display body of the emails sent between July 2022 and August 2022

    select 
        email_id, 
        email_body
    from 
        emails
    where 
        date_reminder between '2022-07-01' and '2022-08-01'
    order by
        date_reminder DESC
    ;

-- 20. Display the names of plants that fall between 6-8 level of difficulty

    select
        plant_ID,
        plant_name, 
        plant_difficulty
    from
        plants
    where 
        plant_difficulty = '6'
        or 
        plant_difficulty = '7'
        or 
        plant_difficulty = '8'
    order by
        plant_difficulty ASC
    ;
