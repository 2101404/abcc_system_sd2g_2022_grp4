-- 会員テーブル
INSERT INTO member(mail,pass,sei,mei,hurigana_sei,hurigana_mei,seibetsu,birth,phone_num,jusho)
VALUES('abc@example.com',12345,'山田','太郎','ヤマダ','タロウ','男','2022-1-1','08012345678','福岡県福岡市');

-- カテゴリーテーブル
INSERT INTO `category` (`category_id`, `category_name`) VALUES (NULL, 'スーツ');

-- 商品テーブル
INSERT INTO item(category_id, item_image, item_name, item_description, item_color, item_price, is_sale, item_sale_price, item_registration_date)
VALUES(1,'./imgs/suit1.jpg','スーツテスト','商品説明です','黒',10000,FALSE,8000,'2022-11-1');

