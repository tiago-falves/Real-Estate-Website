DROP TABLE IF EXISTS Image;
DROP TABLE IF EXISTS Person;
DROP TABLE IF EXISTS Owner;
DROP TABLE IF EXISTS Home;
DROP TABLE IF EXISTS Location;
DROP TABLE IF EXISTS Reservation;
DROP TABLE IF EXISTS Photo;
DROP TABLE IF EXISTS Comment;
DROP TABLE IF EXISTS Reply;
DROP TABLE IF EXISTS Message;

CREATE TABLE Image(
    id INTEGER PRIMARY KEY,
    path TEXT NOT NULL UNIQUE
    );

CREATE TABLE Person(
    id INTEGER PRIMARY KEY,
    userName TEXT NOT NULL UNIQUE,
    profilePicture INTEGER REFERENCES Image,
    password_hash TEXT NOT NULL,
    title TEXT,
    userLocation Integer REFERENCES Location,
    userDescription TEXT,
    rating INTEGER
    );

CREATE TABLE Home(
    id INTEGER PRIMARY KEY,
    title TEXT,
    price FLOAT NOT NULL,
    description TEXT,
    rating FLOAT,
    type TEXT NOT NULL,
    bedrooms TEXT NOT NULL,
    address TEXT NOT NULL,
    location INTEGER REFERENCES Location,
    owner INTEGER REFERENCES Person,
    characteristics TEXT,
    CONSTRAINT type_name CHECK (
        type = 'House'
        OR type = 'Apartment'
        ),
    CONSTRAINT bedrooms_type CHECK (
        bedrooms = 'T1' OR
        bedrooms = 'T2' OR
        bedrooms = 'T3' OR
        bedrooms = 'T4' OR
        bedrooms = 'T5+'
        )
    );

CREATE TABLE Location(
    id INTEGER PRIMARY KEY,
    name TEXT UNIQUE NOT NULL
    );

CREATE TABLE Reservation(
    id INTEGER PRIMARY KEY,
    start_date DATE NOT NULL,
    end_date DATE NOT NULL,
    userID INTEGER REFERENCES Person(id),
    home INTEGER REFERENCES Home(id)
    );

CREATE TABLE Photo(
    id INTEGER PRIMARY KEY,
    approved BOOLEAN DEFAULT FALSE,
    image INTEGER REFERENCES Image,
    uploader_id  INTEGER REFERENCES Person(id),
    home INTEGER REFERENCES Home(id)
    );

CREATE TABLE Comment(
    id INTEGER PRIMARY KEY,
    date DATE NOT NULL,
    hour INTEGER NOT NULL,
    content TEXT NOT NULL,
    commenter_id INTEGER REFERENCES Person(id),
    home_id INTEGER REFERENCES Home(id)
    );

CREATE TABLE Reply(
    id INTEGER PRIMARY KEY,
    date DATE NOT NULL,
    hour INTEGER NOT NULL,
    content TEXT NOT NULL,
    comment INTEGER REFERENCES comment(id),
    userID INTEGER REFERENCES Person
    );

CREATE TABLE Message(
    id INTEGER PRIMARY KEY,
    date DATE NOT NULL,
    hour INTEGER NOT NULL,
    content TEXT NOT NULL,
    senderID INTEGER REFERENCES Person(id),
    receiverID INTEGER REFERENCES Person(id)
    );




INSERT INTO Location (id,name) VALUES (1,'Porto');
INSERT INTO Location (id,name) VALUES (2,'Lisboa');
INSERT INTO Person (id, userName, profilePicture, password_hash, title, userLocation,userDescription,rating) VALUES (1, 'Joao Rocha',1, 'password1', 'Presidente', 1, 'Etiam massa magna, condimentum eu facilisis sit amet, dictum ac purus. Curabitur semper nisl vel libero pulvinar ultricies. Proin dignissim dolor nec scelerisque bibendum. Maecenas a sem euismod, iaculis erat id, convallis arcu. Ut mollis, justo vitae suscipit imperdiet, eros dui laoreet enim, fermentum posuere felis arcu vel urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Etiam massa magna, condimentum eu facilisis sit amet, dictum ac purus. Curabitur semper nisl vel libero pulvinar ultricies. Proin dignissim dolor nec scelerisque bibendum. Maecenas a sem euismod, iaculis erat id, convallis arcu. Ut mollis, justo vitae suscipit imperdiet, eros dui laoreet enim, fermentum posuere felis arcu vel urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia',4);
INSERT INTO Person (id, userName, profilePicture, password_hash, title, userLocation,userDescription,rating) VALUES (2, 'Tiago Alves',2, '123456789', 'Presidente', 2, 'Etiam massa magna, condimentum eu facilisis sit amet, dictum ac purus. Curabitur semper nisl vel libero pulvinar ultricies. Proin dignissim dolor nec scelerisque bibendum. Maecenas a sem euismod, iaculis erat id, convallis arcu. Ut mollis, justo vitae suscipit imperdiet, eros dui laoreet enim, fermentum posuere felis arcu vel urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia',4);
-- INSERT INTO HOME (id,title,price,description,rating,type,bedrooms,address,location,owner,characteristics) 
--     VALUES (1,'Casa do Restivo',50000,'Etiam massa magna, condimentum eu facilisis sit amet, dictum ac purus. Curabitur semper nisl vel libero pulvinar ultricies. Proin dignissim dolor nec scelerisque bibendum. Maecenas a sem euismod, iaculis erat id, convallis arcu. Ut mollis, justo vitae suscipit imperdiet, eros dui laoreet enim, fermentum posuere felis arcu vel urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin blandit ex sit amet suscipit commodo. Duis molestie ligula eu urna tincidunt tincidunt. Mauris posuere aliquet pellentesque. Fusce molestie libero arcu, ut porta massa iaculis sit amet. Fusce varius nisl vitae fermentum fringilla. Pellentesque a cursus lectus.
--                                         Duis condimentum metus et ex tincidunt, faucibus aliquet ligula porttitor. In vitae posuere massa. Donec fermentum magna sit amet suscipit pulvinar. Cras in elit sapien. Vivamus nunc sem, finibus ac suscipit ullamcorper, hendrerit vitae urna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque eget tincidunt orci. Mauris congue ipsum non purus tristique, at venenatis elit pellentesque. Etiam congue euismod molestie. Mauris ex orci, lobortis a faucibus sed, sagittis eget neque.
--                                         Mauris tincidunt orci congue turpis viverra pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque rhoncus lorem eget.'
--                                         ,5.0,'House','T1','Hogwartz',1,1, 'Bathroom,Cinema,Garage,Air conditioning, Basement to put corpses');
INSERT INTO Reservation(id,start_date,end_date,userID,home) VALUES (1,20190423,20190424,1,1);
INSERT INTO Photo(id,approved,image,uploader_id,home) VALUES (1,1,1,1,1);
INSERT INTO Photo(id,approved,image,uploader_id,home) VALUES (2,1,2,2,1);
INSERT INTO Photo(id,approved,image,uploader_id,home) VALUES (3,1,2,1,2);
INSERT INTO Photo(id,approved,image,uploader_id,home) VALUES (4,1,2,1,3);
INSERT INTO Photo(id,approved,image,uploader_id,home) VALUES (5,1,2,1,4);
INSERT INTO Photo(id,approved,image,uploader_id,home) VALUES (6,1,1,1,5);
INSERT INTO Photo(id,approved,image,uploader_id,home) VALUES (7,1,2,1,5);
INSERT INTO Photo(id,approved,image,uploader_id,home) VALUES (8,1,1,1,5);
INSERT INTO Photo(id,approved,image,uploader_id,home) VALUES (9,2,1,1,6);
INSERT INTO Photo(id,approved,image,uploader_id,home) VALUES (10,1,2,1,6);
INSERT INTO Photo(id,approved,image,uploader_id,home) VALUES (11,1,1,1,6);
INSERT INTO Photo(id,approved,image,uploader_id,home) VALUES (12,1,2,1,6);
INSERT INTO Photo(id,approved,image,uploader_id,home) VALUES (13,1,1,1,6);

INSERT INTO Comment(id,date,hour,content,commenter_id,home_id) VALUES (1,20190423,1200,'Gosto de sopa',1,1);
INSERT INTO Reply(id,date,hour,content,comment,userID) VALUES (1,20190423,1200,'Gosto de sopa',1,1);
INSERT INTO Message(id,date,hour,content,senderID,receiverID) VALUES (1,20190423,1200,'Gosto de sopa',1,2);
INSERT INTO Image(id,path) VALUES (1,'restivo.jpg');
INSERT INTO Image(id,path) VALUES (2,'casa.jpeg');


INSERT INTO HOME (id,title,price,description,rating,type,bedrooms,address,location,owner,characteristics) VALUES (NULL,"House tiles",2000,"xxx",4.8,"House","T2","Rua zas",1,1,"Bathroom,Cinema");
INSERT INTO HOME (id,title,price,description,rating,type,bedrooms,address,location,owner,characteristics) VALUES (NULL,"Apartment",2000,"xxx",4.8,"Apartment","T2","Rua zas",1,2,"Bathroom,Cinema");
INSERT INTO HOME (id,title,price,description,rating,type,bedrooms,address,location,owner,characteristics) VALUES (NULL,"Low Punctuation",2000,"xxx",4.3,"House","T2","Rua zas",2,2,"Bathroom,Cinema");
INSERT INTO HOME (id,title,price,description,rating,type,bedrooms,address,location,owner,characteristics) VALUES (NULL,"Porto",2000,"xxx",4.8,"House","T2",1,2,"Rua zas","Bathroom,Cinema");
INSERT INTO HOME (id,title,price,description,rating,type,bedrooms,address,location,owner,characteristics) VALUES (NULL,"Expensive 3 Photos",5000,"xxx",4.8,"House","T2",1,2,"Rua zas","Bathroom,Cinema");
INSERT INTO HOME (id,title,price,description,rating,type,bedrooms,address,location,owner,characteristics) VALUES (NULL,"High rating",5000,"xxx",5.0,"House","T2",1,2,"Rua zas","Bathroom,Cinema");








