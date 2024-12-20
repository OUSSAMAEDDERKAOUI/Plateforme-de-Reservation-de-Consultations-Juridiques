 CREATE TABLE users (
  id_user int(11) NOT NULL,
  fname varchar(50) NOT NULL,
  lname varchar(50) NOT NULL,
  phone varchar(50) NOT NULL,
  email varchar(50) unique ,
  password varchar(500) NOT NULL,
  post enum('avocat','client') NOT NULL
)

CREATE TABLE info (
  id_speciality int(11) NOT NULL,
  biography varchar(500) NOT NULL,
  photo blob NOT NULL,
  adress varchar(150) NOT NULL,
  id_lawyer int(11) DEFAULT NULL
)



create table disponibility (
    id_disponibility int PRIMARY KEY AUTO_INCREMENT ,
    id_speciality int ,
    date_occupation date NOT NULL ,
    FOREIGN KEY (id_speciality) REFERENCES info (id_speciality)
)

create table reservation (
id_reservation int PRIMARY KEY AUTO_INCREMENT ,
    id_lawyer int ,
    id_client int ,
    date_reservation date ,
    description text ,
    validation ENUM('yes','no'),
    foreign key (id_client) REFERENCES users(id_users),
    foreign key (id_lawyer) REFERENCES users (id_users),
UNIQUE(id_reservation,id_client,date_reservation)
)


SELECT reservation.ID_Membre, reservation.ID_Activite
FROM reservation
WHERE reservation.ID_Membre  IN (SELECT membres.ID_Membre FROM  membres WHERE membres.Nom='abdelhafid')





SELECT membres.Nom , COUNT(ID_Resrvation) AS nbr  
                    
FROM reservation JOIN membres on reservation.ID_Membre=membres.ID_Membre 

 GROUP BY reservation.ID_Membre 
 ORDER BY nbr DESC
 LIMIT 1;





UPDATE table
SET nom_colonne_1 = 'nouvelle valeur'
WHERE condition



DELETE FROM `table`
WHERE condition




ALTER TABLE nom_table
ADD nom_colonne type_donnees





