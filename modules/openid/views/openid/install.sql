CREATE TABLE IF NOT EXISTS `users` (
	`id` int(11) unsigned NOT NULL auto_increment,
	`username` varchar(50) NOT NULL,
	`created` int(10) unsigned NOT NULL,
	`logins` int(10) unsigned NOT NULL default '0',
	`last_login` int(10) unsigned NULL,
	PRIMARY KEY  (`id`),
	UNIQUE KEY `uniq_username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `user_identities` (
	`id` int(11) unsigned NOT NULL auto_increment,
	`user_id` int(11) unsigned NOT NULL,
	`display_id` varchar(255) NOT NULL,
	`claimed_id` varchar(255) NOT NULL,
	`email` varchar(127) NULL,
	`updated` timestamp NOT NULL,
	PRIMARY KEY  (`id`),
	KEY `fk_user_id` (`user_id`),
	UNIQUE KEY `uniq_claimed_id` (`claimed_id`)
 ) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `user_tokens` (
	`id` int(11) unsigned NOT NULL auto_increment,
	`user_id` int(11) unsigned NOT NULL,
	`user_agent` varchar(40) NOT NULL,
	`token` varchar(32) NOT NULL,
	`created` int(10) unsigned NOT NULL,
	`expires` int(10) unsigned NOT NULL,
	PRIMARY KEY  (`id`),
	KEY `fk_user_id` (`user_id`),
	UNIQUE KEY `uniq_token` (`token`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

ALTER TABLE `user_identities`
  ADD CONSTRAINT `user_identities_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

ALTER TABLE `user_tokens`
  ADD CONSTRAINT `user_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

-- it's highly recommended that you store session data in the database when using the openid module

CREATE TABLE IF NOT EXISTS `sessions` (
	`session_id` varchar(40) NOT NULL,
	`last_activity` int(10) UNSIGNED NOT NULL,
	`data` text NOT NULL,
	PRIMARY KEY (`session_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;