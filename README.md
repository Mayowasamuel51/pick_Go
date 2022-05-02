# pick_Go
a delivery order web app

Create a Folder called PickGo in (htdocs xampp)  then put in the  userpage folder  inside in the PickGo 


Create database name called foodorder in phpmyadmin 

CREATE TABLE pick_go(
    customer_id int(11) AUTO_INCREMENT PRIMARY key not null,
    name text NOT null,
    phone text NOT null,
    address text NOT null,
    deliverytype text NOT null,
    price text NOT null,
    deliveryfood text not null,
    date date not null,
    wishes text not null
    
    )
    
