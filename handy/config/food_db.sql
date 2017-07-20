-- 問い合わせテーブル

CREATE TABLE foods (
  food_id INT UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'uniqueID',
  name VARCHAR(620) NOT NULL COMMENT 'food_name,
  PRIMARY KEY (`food_id`)
)CHARACTER SET 'utf8mb4', ENGINE=InnoDB, COMMENT='１レコードが「1 フード」を意味するテーブル';