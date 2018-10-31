CREATE TABLE `users` (

`uid` int NOT NULL AUTO_INCREMENT,

`user_name` varchar(50) NULL,

`password` int(32) NULL,

`email` varchar(50) NULL,

`phone` int(20) NULL,

`create_time` int(30) NULL,

`last_login_time` int(30) NOT NULL,

`login_time` int(30) NULL,

`status` tinyint(1) NULL DEFAULT 1,

`gender` tinyint(1) NULL DEFAULT 1,

`thumb` varchar(100) NULL,

PRIMARY KEY (`uid`) ,

INDEX `user_pwd` (`user_name` ASC, `password` ASC) USING BTREE

)

ENGINE = MyISAM

DEFAULT CHARACTER SET = utf8

COLLATE = utf8_general_ci

COMMENT = '用户表';



CREATE TABLE `auth` (

`auth_id` int NOT NULL AUTO_INCREMENT,

`auth_name` varchar(50) NULL,

`controller` varchar(20) NULL,

`method` varchar(20) NULL,

`status` tinyint NULL DEFAULT 1,

`sort` int NULL,

PRIMARY KEY (`auth_id`) 

)

ENGINE = MyISAM

DEFAULT CHARACTER SET = utf8

COLLATE = utf8_general_ci

COMMENT = '权限表';



CREATE TABLE `roles` (

`role_id` int NOT NULL AUTO_INCREMENT,

`role_name` varchar(50) NULL,

`status` tinyint(1) NULL DEFAULT 1,

`sort` int(20) NULL,

PRIMARY KEY (`role_id`) 

)

ENGINE = MyISAM

DEFAULT CHARACTER SET = utf8

COLLATE = utf8_general_ci;



CREATE TABLE `users_roles` (

`uid` int NULL,

`role_id` int NULL

)

ENGINE = MyISAM

DEFAULT CHARACTER SET = utf8

COLLATE = utf8_general_ci;



CREATE TABLE `roles_auth` (

`role_id` int NULL,

`auth_id` int NULL

)

ENGINE = MyISAM

DEFAULT CHARACTER SET = utf8

COLLATE = utf8_general_ci;



CREATE TABLE `articles` (

`aid` int NOT NULL AUTO_INCREMENT,

`cate_id` int NULL,

`uid` int NULL,

`title` varchar(100) NULL,

`keyword` varchar(50) NULL,

`description` varchar(200) NULL,

`create_time` int NULL,

`update_time` int NULL,

`thumb` varchar(200) NULL,

`status` tinyint NULL DEFAULT 0,

PRIMARY KEY (`aid`) 

)

ENGINE = MyISAM

DEFAULT CHARACTER SET = utf8

COLLATE = utf8_general_ci

COMMENT = '文章主表';



CREATE TABLE `articles_data` (

`aid` int NULL,

`content` text NULL,

INDEX `aid` (`aid` ASC) USING BTREE

)

ENGINE = MyISAM

DEFAULT CHARACTER SET = utf8

COLLATE = utf8_general_ci;



CREATE TABLE `categorys` (

`cate_id` int NOT NULL AUTO_INCREMENT,

`cate_name` varchar(50) NULL,

`pid` int NULL,

`path` varchar(50) NULL,

`status` tinyint NULL DEFAULT 1,

`sort` int NULL,

PRIMARY KEY (`cate_id`) 

)

ENGINE = MyISAM

DEFAULT CHARACTER SET = utf8

COLLATE = utf8_general_ci;



CREATE TABLE `tags` (

`tag_id` int NOT NULL AUTO_INCREMENT,

`tag_name` varchar(20) NULL,

`status` tinyint NULL DEFAULT 1,

`sort` int NULL,

PRIMARY KEY (`tag_id`) 

)

ENGINE = MyISAM

DEFAULT CHARACTER SET = utf8

COLLATE = utf8_general_ci;



CREATE TABLE `articles_tags` (

`aid` int NULL,

`tag_id` int NULL

)

ENGINE = MyISAM

DEFAULT CHARACTER SET = utf8

COLLATE = utf8_general_ci;



CREATE TABLE `comments` (

`cid` int NOT NULL,

`aid` int NULL,

`uid` int NULL,

`content` varchar(200) NULL,

`public_time` int NULL,

PRIMARY KEY (`cid`) 

)

ENGINE = MyISAM

DEFAULT CHARACTER SET = utf8

COLLATE = utf8_general_ci;



CREATE TABLE `settings` (

`id` int NOT NULL AUTO_INCREMENT,

`titile` varchar(100) NULL,

`keywords` varchar(50) NULL,

`description` varchar(150) NULL,

`status` tinyint(1) NULL DEFAULT 1,

`email` varchar(20) NULL,

`anounce` varchar(200) NULL,

PRIMARY KEY (`id`) 

)

ENGINE = MyISAM

DEFAULT CHARACTER SET = utf8

COLLATE = utf8_general_ci;



CREATE TABLE `log` (

`id` int NOT NULL,

`uid` int NULL,

`opration` varchar(200) NULL,

`create_time` int NULL,

PRIMARY KEY (`id`) 

)

ENGINE = MyISAM

DEFAULT CHARACTER SET = utf8

COLLATE = utf8_general_ci;



