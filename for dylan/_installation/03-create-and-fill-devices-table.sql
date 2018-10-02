CREATE TABLE IF NOT EXISTS `login`.`devices`(
    device_id INT(11) NOT NULL AUTO_INCREMENT,
    device_name VARCHAR(64) COLLATE utf8_unicode_ci NOT NULL,
    device_ip VARCHAR(64) COLLATE utf8_unicode_ci NOT NULL,
    device_status INT(32) NOT NULL,
    PRIMARY KEY(`device_id`),
    UNIQUE KEY `device_name`(`device_name`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_unicode_ci;
