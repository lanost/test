


CREATE TABLE city (
    id int(11),
    title varchar(45),
    post_code varchar(45),
    PRIMARY KEY (id)
);



CREATE TABLE client_info (
    id int(11),
    name varchar(45),
    surname varchar(45),
    email varchar(45),
    telephone varchar(45),
    pk varchar(45),
    address varchar(45),
    registered varchar(45),
    city_id int(11),
    PRIMARY KEY (id),
    FOREIGN KEY (city_id) REFERENCES city(id)
);

CREATE TABLE connection_type (
    id int(11),
    bw_up int(11),
    bw_down int(11),
    description varchar(45),
    price decimal(10,0),
    PRIMARY KEY (id)
);


CREATE TABLE client (
    id int(11),
    type enum("f","j"),
    suspended tinyint(1),
    level varchar(45),
    connection_type_id int(11),
    client_info_id int(11),
    PRIMARY KEY (id),
    FOREIGN KEY (connection_type_id) REFERENCES connection_type(id),FOREIGN KEY (client_info_id) REFERENCES client_info(id)
);


CREATE TABLE web_history (
    id int(11),
    client_id int(11),
    url int(11),
    time_visited varchar(45),
    PRIMARY KEY (id),
    FOREIGN KEY (client_id) REFERENCES client(id)
);





CREATE TABLE bill (
    id int(11),
    client_id int(11),
    period_from int(11),
    period_to varchar(45),
    is_paid tinyint(1),
    PRIMARY KEY (id),
    FOREIGN KEY (client_id) REFERENCES client(id)
);








