
-- アドミン用テーブル
DROP TABLE IF EXISTS admin_users;
CREATE TABLE admin_users (
  admin_user_id varbinary(64) NOT NULL COMMENT 'adminのID',
  password varbinary(255) NOT NULL COMMENT 'adminのパスワード',
  PRIMARY KEY (`admin_user_id`)
)CHARACTER SET 'utf8mb4'
, ENGINE=InnoDB
, COMMENT='１レコードが１adminを意味するテーブル';
-- ダミーのadmin
INSERT INTO admin_users(admin_user_id, password)
  VALUES('admin', '$2y$10$/mAKC8fesgijPeG8juIDre5WDEmvrq6DWCwpfsjeIRZCv.e.1D8zq');

