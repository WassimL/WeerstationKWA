CREATE TABLE sdvillan_db2.Weather (
	ID INT not null auto_increment,
	dateAndTime datetime,
    temperature INT,
    humidity INT,
    airpressure FLOAT,
    primary key (ID)
    );
    
INSERT INTO weather (dateAndTime, temperature, humidity, airpressure)
VALUES ('2038-01-19 03:14:07.999999', '20', '80', '17.5');

DROP TABLE weather;

SELECT * FROM weather;