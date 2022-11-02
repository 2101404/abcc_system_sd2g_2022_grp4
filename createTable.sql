CREATE TABLE member (
    member_id INT AUTO_INCREMENT NOT NULL,
    mail VARCHAR(191) NOT NULL,
    pass VARCHAR(191) NOT NULL,
    sei VARCHAR(50) NOT NULL,
    mei VARCHAR(50) NOT NULL,
    hurigana_sei VARCHAR(50) NOT NULL,
    hurigana_mei VARCHAR(50) NOT NULL,
    seibetsu VARCHAR(50) NOT NULL,
    birth DATE NOT NULL,
    phone_num VARCHAR(11) NOT NULL,
    jusho VARCHAR(50) NOT NULL,
    PRIMARY KEY(member_id)
);

CREATE TABLE category(
    category_id INT AUTO_INCREMENT NOT NULL,
    category_name VARCHAR(50) NOT NULL,
    PRIMARY KEY(category_id)
);

CREATE TABLE item (
    item_id INT AUTO_INCREMENT NOT NULL,
    category_id INT NOT NULL,
    item_image VARCHAR(50) NOT NULL,
    item_name VARCHAR(50) NOT NULL,
    item_description VARCHAR(300) NOT NULL,
    item_color VARCHAR(10) NOT NULL,
    item_price INT NOT NULL,
    is_sale BOOLEAN NOT NULL,
    item_sale_price INT NOT NULL,
    item_registration_date DATE DEFAULT CURRENT_DATE NOT NULL,
    PRIMARY KEY(item_id),
    FOREIGN KEY(category_id) REFERENCES category(category_id)

);

CREATE TABLE cart (
    member_id INT NOT NULL,
    item_id INT NOT NULL,
    suryo_data INT NOT NULL,
    touroku_data DATE DEFAULT CURRENT_DATE NOT NULL,
    item_size VARCHAR(3) NOT NULL,
    PRIMARY KEY(member_id,item_id),
    FOREIGN KEY(member_id) REFERENCES member(member_id),
    FOREIGN KEY(item_id) REFERENCES item(item_id)
);

CREATE TABLE orders(
    order_id INT NOT NULL,
    member_id INT NOT NULL,
    order_date DATE DEFAULT CURRENT_DATE NOT NULL,
    PRIMARY KEY(order_id)
);

CREATE TABLE order_details(
    order_id INT NOT NULL,
    item_id INT NOT NULL,
    suryo_data INT NOT NULL,
    item_size VARCHAR(3) NOT NULL,
    item_price INT NOT NULL,
    PRIMARY KEY(order_id,item_id),
    FOREIGN KEY(order_id) REFERENCES orders(order_id),
    FOREIGN KEY(item_id) REFERENCES item(item_id)
);