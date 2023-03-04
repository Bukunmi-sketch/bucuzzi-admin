
--
-- Database: `bucuzzi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--


CREATE TABLE IF NOT EXISTS `administrator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `LastActivity` int(55) NOT NULL,
  `email` varchar(255) NOT NULL UNIQUE,
  `LastActiveDate` varchar(255) NOT NULL,
  `LastActiveTime` varchar(255) NOT NULL,
  `DateLastActivity` date NOT NULL,
  `Bookmarks` bigint(11) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `themetype` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `ip_address` double(11,2) NOT NULL,
  `browser_type` varchar(255) NOT NULL,
  `forgetid` int(55) NOT NULL,
  `forget_question` varchar(255) NOT NULL,
  `forget_answer` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `reg_date` varchar(255) NOT NULL,
  `Mobile` bigint(15) NOT NULL,
   PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS `anonyusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `interest` varchar(255) NOT NULL,
  `identity` int(55) NOT NULL,
  `LastActivity` int(55) NOT NULL,
  `LastActiveDate` varchar(255) NOT NULL,
  `LastActiveTime` varchar(255) NOT NULL,
  `DateLastActivity` date NOT NULL,
  `Likes` bigint(11) NOT NULL,
  `Bookmarks` bigint(11) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL UNIQUE,
  `themetype` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `ip_address` double(11,2) NOT NULL,
  `browser_type` varchar(255) NOT NULL,
  `forgetid` int(55) NOT NULL,
  `forget_question` varchar(255) NOT NULL,
  `forget_answer` varchar(255) NOT NULL,
  `profileimage`  blob NOT NULL,
  `password` varchar(255) NOT NULL,
  `Bio` text NOT NULL,
  `reg_date` varchar(255) NOT NULL,
  `followers` int(55) NOT NULL,
  `following` int(55) NOT NULL,
  `Mobile` bigint(15) NOT NULL,
  `website` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
   PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE IF NOT EXISTS `profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `verification` varchar(255) NOT NULL,
   PRIMARY KEY (`id`),
  FOREIGN KEY (user_id) REFERENCES anonyusers(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_body` text NOT NULL,
  `post_date` varchar(255) NOT NULL,
  `post_time` varchar(255) NOT NULL,
  `post_pic` blob NOT NULL,
  `post_likes` int(11) NOT NULL,
  `save_no` int(11) NOT NULL,
  `comment_count` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
   PRIMARY KEY (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `follow`
--

CREATE TABLE IF NOT EXISTS `Follow` (
  `F_id` int(11) NOT NULL AUTO_INCREMENT,
  `followerid` int(11) NOT NULL,
  `followingid` int(11) NOT NULL,
  PRIMARY KEY (`F_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `savedpost
--

CREATE TABLE IF NOT EXISTS `savedpost` (
  `saveid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `postid` int(11) NOT NULL,
  PRIMARY KEY (`saveid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS  `Feedbacks` (
  `feedbackid` int(11) NOT NULL AUTO_INCREMENT,
  `users_feedbacks` text NOT NULL,
  `delete_feedbacks` text NOT NULL,
  `userid` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `ip_address` double(11,2) NOT NULL,
  PRIMARY KEY (`feedbackid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS  `messages` (
  `msgid` int(11) NOT NULL AUTO_INCREMENT,
  `senderid` int(11) NOT NULL,
  `receiverid` int(11) NOT NULL,
  `messagebody` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `isdeleted` varchar(255) NOT NULL,
   PRIMARY KEY (`msgid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE IF NOT EXISTS  `notifications` (
  `notificationsid` int(11) NOT NULL AUTO_INCREMENT,
  `senderid` int(11) NOT NULL,
  `receiverid` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `reference` int(11) NOT NULL,
   PRIMARY KEY (`notificationsid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `postcheck`
--

CREATE TABLE IF NOT EXISTS `postcheck` (
  `postcheckid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `postid` int(11) NOT NULL,
  PRIMARY KEY (`postcheckid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




--ALTER TABLE `anonyusers`
--ADD `verification_blue` varchar(255) NOT NULL AFTER `email`;

--ALTER TABLE `feedbacks`
--ADD `notify_status` varchar(255) NOT NULL AFTER `ip_address`;



--
-- Indexes for table `exam_timetable`
--
-- ALTER TABLE `exam_timetable`
--  ADD PRIMARY KEY (`id`);

--


--
-- AUTO_INCREMENT for table `admin`
--
-- ALTER TABLE `admin`
-- MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `chat`
--

-- ALTER TABLE `teacher_salary_history`
-- MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
