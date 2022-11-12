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
VALUES(1,'./imgs/category/suit01.jpg','スーツテスト','商品説明です','黒',10000,FALSE,8000,'2022-11-1');

