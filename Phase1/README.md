# Problem Statement
Finding the exceptional plant that is best suited for yourself or a loved one can be a rather difficult task especially if you are not well versed in horticulture. There are many moving components that come into play when finding the right plant. Every plant has a different set of needs to live and continue to grow. Each plant needs a certain amount of sunlight and water, problems can occur if they get too little or too much of this. The plant's size can vary as well, you want to make sure you choose the right size of plant as they can greatly vary in size. These may seem like the only issues in finding the right plant but there are other risks associated with getting the wrong plant. We want to make sure everyone gets the correct plant for them and their household. Some additional factors that are important are climate/location, some plants can only live in certain areas so we need to make sure we have a plant that is suitable for each person's location and climate. We also need to keep in mind the home environment such as the temperature, some plants have specific temperature needs. The amount of sunlight the plant will get and needs varies in each household. The frequency or availability for the owner to be at home comes into play so they are able to water their plant often enough if necessary. We also need to be wary of pets or children in the household, specific plants can be toxic to your pets or they can be allergic to certain plants. We also need to account for children, some plants can harm children such as cactus with their needles. Pricing also matters, each individual has their own desired price range and plants vary greatly in their cost.

We will be creating a program that addresses all these factors in choosing the perfect plant for you and your household. We will ask a series of questions to determine the best species or options of plants that would work best for you or a friend. The program will filter through all the available options and take into account all the choices the user selects to give you options of suitable plants.

## Entity-relationship Diagram
![ER Diagram](ER_Diagram_P1.png)

## Relational Schema
Plants(plant_ID [PK], name, species, color, climate, difficulty, price_Range, size, allergen, light, water)
FK {climate} references {climate.zone} 

Sender(sender_ID [PK], name, address)

Recipient(recipient_ID[PK], name, address, email)
FK {address} references {home.address} 
FK {email} references {Email.email_ID} 

Climate(zone[PK], state) 

Email(email_ID[PK], subject, date, body) 

Home(address[PK], temp, sunlight, pets, kids, frequency_at_home)

## Relational Model 
Plants(plant_ID [PK], name, species, color, climate, difficulty, price_Range, size, allergen, light, water) 
FK {climate} references {climate.zone} 

Sender(sender_ID [PK], name, address) 

Recipient(recipient_ID[PK], name, address, email)
FK {address} references {home.address} 
FK {email} references {Email.email_ID}

Climate(zone[PK], state) 

Email(email_ID[PK], subject, date, body)

Home(address[PK], temp, sunlight, pets, kids, frequency_at_home) 

Lives(Recipient[PK], Address[PK])
FK {Recipient} references {Recipient.Recipient_ID} 
FK {Address} references {home.address} 

Gifting(Sender_ID[PK], recipient_ID[PK]) 
FK {Sender_ID} references {Sender.Sender_ID} 
FK {recipient_ID} references {Recipient.Recipient_ID} 

Sell(Store_ID[PK],Plant_ID[PK]) 
FK {Plant_ID} references {Plant.Plant_ID}
FK {Store_ID} references {Store.Store_ID}

Likes(Plant_ID[PK], Zone[PK]) 
FK {Plant_ID} references {Plant.Plant_ID}
FK {Zone} references {Climate.Zone} 

In(Address[PK], Zone[PK])
FK {Address} references {Home.Address}
FK {Zone} references {Climate.Zone}

Gets(Email ID[PK], Receiver_ID[PK])
FK {Email_ID} references {Email.Email_ID} 
FK {Receiver_ID} references {Receiver.Receiver_ID} 

Match(Plant_ID[PK], Receiver_ID[PK], Allergy, Allergen) 
FK {Receiver} references {Receiver.Receiver_ID} 
FK {Allergy} references {Receiver.Allergy} 
FK {Allergen} references {Plant.Allergen}
FK {Plant_ID} references {Plant.Plant_ID} 

## Normalization
### Functional Dependencies 
- Plant_ID    Sender ID    Reciepient_ID    Email_ID    Address      Zone    Store ID
-  A               B           C                D           E          F         G
- A -> C,F,G
- B -> C 
- C -> D, F 
- D -> C 
- E -> C, F 
- F -> E
- G-> A
## 20 Queries 
[See our data](https://docs.google.com/spreadsheets/d/1ZVhi1Yec7Qh7uCQ5f82go3bJfFGRzCk8H_Jlh6xIpe4/edit?usp=sharing) 
1. 
