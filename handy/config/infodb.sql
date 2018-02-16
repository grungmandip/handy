-- ユーザー用テーブル
DROP TABLE IF EXISTS users;
CREATE TABLE users (
  user_id varbinary(64) NOT NULL COMMENT 'ユーザーのID',
  password varbinary(255) NOT NULL COMMENT 'ユーザーのパスワード',
  PRIMARY KEY (`user_id`)
)CHARACTER SET 'utf8mb4'
, ENGINE=InnoDB
, COMMENT='１レコードが１ユーザーを意味するテーブル';
-- ダミーのユーザー
INSERT INTO users(user_id, password)
  VALUES('user', '$2y$10$/mAKC8fesgijPeG8juIDre5WDEmvrq6DWCwpfsjeIRZCv.e.1D8zq');

-- 客のテーブル
DROP TABLE IF EXISTS customers;
CREATE TABLE customers (
  customer_id int UNSIGNED NOT NULL AUTO_INCREMENT,
  table_name varbinary(200) NOT NULL COMMENT '客の使用テーブル',
  count int(11) NOT NULL COMMENT '客の数',
  PRIMARY KEY (`customer_id`)
)CHARACTER SET 'utf8mb4'
, ENGINE=InnoDB
, COMMENT='１レコードが客の一組を意味するテーブル';
--削除用テーブル
DELETE FROM customers WHERE customer_id=?;
--DROP TABLE IF EXISTS 