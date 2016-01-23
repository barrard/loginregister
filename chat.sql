CREATE TABLE chat{
	message_id int(11) NOT NULL auto_increment,
	posted_on timestamp NOT NULL,
	username varchar(255) NOT NULL,
	message text NOT NULL,
	coler char(7) default '#000000',
	PRIMARY KEY (message_id)
};