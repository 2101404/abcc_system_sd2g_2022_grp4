-- 会員テーブル
-- pass=12345
INSERT INTO member(mail,pass,sei,mei,hurigana_sei,hurigana_mei,seibetsu,birth,phone_num,jusho)
VALUES('abc@example.com','$2y$10$wiImLEqiHoGkCH5r7LSSjOkGbQu.hCqPrmXaw/1IDlTXjdLYOV2T6','山田','太郎','ヤマダ','タロウ','男','2022-1-1','08012345678','福岡県福岡市');
-- pass=67890
INSERT INTO member(mail,pass,sei,mei,hurigana_sei,hurigana_mei,seibetsu,birth,phone_num,jusho)
VALUES('def@example.com','$2y$10$EJOpLUSIvDnibG/GwbMRP.HSVyO/t5X/aZhoYMhDDK2zNDNO6aujS','山田','花子','ヤマダ','ハナコ','女','2022-10-3','09012345678','佐賀県佐賀市');

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
INSERT INTO item(category_id, item_image, item_name, item_description, item_color, item_price, item_size, is_sale, item_sale_price, item_registration_date)
VALUES((SELECT category_id FROM category WHERE category_name = 'スーツ'),'./imgs/category/suit01.jpg','スーツテスト','商品説明です','黒',10000,'S,M,L,XL',FALSE,8000,'2021-11-1');
INSERT INTO item(category_id, item_image, item_name, item_description, item_color, item_price, item_size, is_sale, item_sale_price, item_registration_date)
VALUES((SELECT category_id FROM category WHERE category_name = 'バッグ'),'./imgs/category/bag01.jpg','バッグ','バッグです','黒',10000,'S', FALSE,8000,'2022-10-1');
INSERT INTO item(category_id, item_image, item_name, item_description, item_color, item_price, item_size, is_sale, item_sale_price, item_registration_date)
VALUES((SELECT category_id FROM category WHERE category_name = 'ベルト'),'./imgs/category/belt03.png','ベルト','ベルトです','茶',3000,'XS,S,M,L', FALSE,2500,'2022-11-1');
INSERT INTO item(category_id, item_image, item_name, item_description, item_color, item_price, item_size, is_sale, item_sale_price, item_registration_date)
VALUES((SELECT category_id FROM category WHERE category_name = '靴'),'./imgs/category/shoes01.jpg','靴','靴です','黒',5000,'S,M,L', FALSE,2500,CURRENT_DATE());
INSERT INTO item(category_id, item_image, item_name, item_description, item_color, item_price, item_size, is_sale, item_sale_price, item_registration_date)
VALUES((SELECT category_id FROM category WHERE category_name = 'スーツ'),'./imgs/sample/ikeoji.png','イケオジになっちゃうスタイリッシュスーツ！！','大人の雰囲気を醸し出す、スタイリッシュなスーツです。 これを着ればあなたもきっとイケオジに。','黒',750000,'S,M,L',FALSE,600000,CURRENT_DATE());

-- 注文テーブル
INSERT INTO `orders` (`order_id`, `member_id`, `order_date`) VALUES
(1, 1, '2022-11-18'),
(2, 1, '2022-11-19');

-- 注文詳細テーブル
INSERT INTO `order_details` (`order_id`, `item_id`, `od_suryo`, `od_size`, `od_price`) VALUES
(1, 2, 1, 'M', 7000),
(1, 5, 1, 'S', 7500000),
(2, 3, 2, 'S', 2000),
(2, 4, 1, '26c', 9000);

-- 買い物かごテーブル
INSERT INTO `cart` (`member_id`, `item_id`, `cart_suryo`, `cart_tourokubi`, `cart_size`) VALUES
(1, 2, 3, '2022-11-18', 'S'),
(1, 3, 1, '2022-11-18', 'S'),
(1, 5, 1, '2022-11-18', 'S');