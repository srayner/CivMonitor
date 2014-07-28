CREATE TABLE IF NOT EXISTS `monitor_host` (
  `hostname` varchar(64) NOT NULL,
  `ipv4_address` varchar(15) NOT NULL,
  `monitor_status_id` int(11) NOT NULL,
  PRIMARY KEY (`hostname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `monitor_status` (
  `monitor_status_id` int(11) NOT NULL AUTO_INCREMENT,
  `monitor_status_name` varchar(32) NOT NULL,
  PRIMARY KEY (`monitor_status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `monitor_result` (
  `hostname` varchar(64) NOT NULL,
  `result_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `monitor_status_id` int(11) NOT NULL,
  PRIMARY KEY (`hostname`,`result_time`),
  KEY `monitor_result_status_id` (`monitor_status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

