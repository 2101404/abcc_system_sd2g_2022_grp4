-- 会員テーブル
INSERT INTO member(mail,pass,sei,mei,hurigana_sei,hurigana_mei,seibetsu,birth,phone_num,jusho)
VALUES('abc@example.com',12345,'山田','太郎','ヤマダ','タロウ','男','2022-1-1','08012345678','福岡県福岡市');
INSERT INTO member(mail,pass,sei,mei,hurigana_sei,hurigana_mei,seibetsu,birth,phone_num,jusho)
VALUES('def@example.com',67890,'山田','花子','ヤマダ','ハナコ','女','2022-10-3','09012345678','佐賀県佐賀市');

-- カテゴリーテーブル
INSERT INTO category(category_name) VALUES('スーツ');
INSERT INTO category(category_name) VALUES('バッグ');
INSERT INTO category(category_name) VALUES('ベルト');
INSERT INTO category(category_name) VALUES('コート');
INSERT INTO category(category_name) VALUES('ジャケット');
INSERT INTO category(category_name) VALUES('パンツ');
INSERT INTO category(category_name) VALUES('セットアップ');
INSERT INTO category(category_name) VALUES('靴');
INSERT INTO category(category_name) VALUES('スカート');
INSERT INTO category(category_name) VALUES('靴下');
INSERT INTO category(category_name) VALUES('ネクタイ');

-- 商品テーブル
INSERT INTO item(category_id, item_image, item_name, item_description, item_color, item_price, is_sale, item_sale_price, item_registration_date)
VALUES((SELECT category_id FROM category WHERE category_name = 'スーツ'),'./imgs/category/suit01.jpg','スーツテスト','商品説明です','黒',10000,FALSE,8000,'2022-11-1');
INSERT INTO item(category_id, item_image, item_name, item_description, item_color, item_price, is_sale, item_sale_price, item_registration_date)
VALUES(1,'./imgs/category/bag01.jpg','バッグ','バッグです','黒',10000,FALSE,8000,'2022-11-1');
INSERT INTO item(category_id, item_image, item_name, item_description, item_color, item_price, is_sale, item_sale_price, item_registration_date)
VALUES(1,'./imgs/category/belt03.png','ベルト','ベルトです','茶',3000,FALSE,2500,'2022-11-1');
INSERT INTO item(category_id, item_image, item_name, item_description, item_color, item_price, is_sale, item_sale_price, item_registration_date)
VALUES(1,'./imgs/category/shoes01.jpg','靴','靴です','黒',5000,FALSE,2500,CURRENT_DATE());
INSERT INTO item(category_id, item_image, item_name, item_description, item_color, item_price, is_sale, item_sale_price, item_registration_date)
VALUES(1,'./imgs/sample/ikeoji.png','イケオジになっちゃうスタイリッシュスーツ！！','大人の雰囲気を醸し出す、スタイリッシュなスーツです。 これを着ればあなたもきっとイケオジに。','黒',750000,FALSE,600000,CURRENT_DATE());

