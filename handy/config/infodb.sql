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
  VALUES('admin', '$2y$10$/mAKC8fesgijPeG8juIDre5WDEmvrq6DWCwpfsjeIRZCv.e.1D8zq');
