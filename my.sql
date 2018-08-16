
CREATE TAABLE blog_users (
	id int not null auto_increment,
	username varchar(64) not null default '',
	password varchar(128) not null default '',
	nickname varchar(64) not null default '',
	into text default null,
	avatar varchar(255) not null default '',
	primary key(id)
) EVGINE innodb CHARSET utf8;


CREATE TAABLE blog_tags (
	id int not null auto_increment,
	name varchar(64) not null default '',
	created_time int not null default 0,
	user_id int not null default 0,
	primary key(id),
	index(user_id)
) EVGINE innodb CHARSET utf8;


CREATE TAABLE blog__categeories (
	id int not null auto_increment,
	name varchar(64) not null default '',
	created_time int not null default 0,
	user_id int not null default 0,
	primary key(id),
	index(user_id)
) EVGINE innodb CHARSET utf8;



CREATE TAABLE blog_articles (
	id int not null auto_increment,
	name varchar(64) not null default '',
	created_time int not null default 0,
	user_id int not null default 0,
	primary key(id),
	index(user_id)
) EVGINE innodb CHARSET utf8;
