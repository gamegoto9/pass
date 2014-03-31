-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- โฮสต์: localhost
-- เวลาในการสร้าง: 
-- รุ่นของเซิร์ฟเวอร์: 5.0.51
-- รุ่นของ PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- ฐานข้อมูล: `crru`
-- 

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `department`
-- 

CREATE TABLE `department` (
  `D_id` char(2) NOT NULL,
  `D_name` varchar(50) NOT NULL,
  PRIMARY KEY  (`D_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- dump ตาราง `department`
-- 

INSERT INTO `department` VALUES ('01', 'สำนักคอมฯ');
INSERT INTO `department` VALUES ('03', 'คณะครุศาสตร์');
INSERT INTO `department` VALUES ('04', 'คณะวิทยาศาสตร์และเทคโนโลยี');
INSERT INTO `department` VALUES ('05', 'คณะวิทยาการจัดการ');
INSERT INTO `department` VALUES ('06', 'คณะเทคโนโลยีอุตสาหกรรม');
INSERT INTO `department` VALUES ('07', 'คณะมนุษยศาสตร์');
INSERT INTO `department` VALUES ('08', 'วิทยาลัยการแพทย์พื้นบ้านฯ');
INSERT INTO `department` VALUES ('09', 'วิทยาลัยนานาชาติภูมิภาคลุ่มน้ำโขง');
INSERT INTO `department` VALUES ('10', 'สำนักวิชาสังคมศาสตร์');
INSERT INTO `department` VALUES ('11', 'สำนักวิชาบัญชี');
INSERT INTO `department` VALUES ('12', 'สำนักวิชาการท่องเที่ยว');
INSERT INTO `department` VALUES ('13', 'สำนักวิชาวิทยาศาสตร์สุขภาพ');
INSERT INTO `department` VALUES ('14', 'สำนักวิชาบริหารรัฐกิจ');
INSERT INTO `department` VALUES ('15', 'สำนักวิชากฏหมาย ');
INSERT INTO `department` VALUES ('02', 'บัณฑิตวิทยาลัย');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `major`
-- 

CREATE TABLE `major` (
  `M_id` varchar(3) NOT NULL,
  `M_name` varchar(50) NOT NULL,
  `D_id` varchar(2) NOT NULL,
  PRIMARY KEY  (`M_id`),
  KEY `D_id` (`D_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- dump ตาราง `major`
-- 

INSERT INTO `major` VALUES ('001', 'การศึกษาปฐมวัย', '03');
INSERT INTO `major` VALUES ('002', 'การศึกษาพิเศษ', '03');
INSERT INTO `major` VALUES ('003', 'การสอนภาษาจีน', '03');
INSERT INTO `major` VALUES ('004', 'คณิตศาสตร์', '03');
INSERT INTO `major` VALUES ('005', 'คหกรรมศาสตร์', '03');
INSERT INTO `major` VALUES ('006', 'เคมี', '03');
INSERT INTO `major` VALUES ('007', 'ชีววิทยา', '03');
INSERT INTO `major` VALUES ('008', 'ดนตรีศึกษา', '03');
INSERT INTO `major` VALUES ('009', 'พลศึกษา', '03');
INSERT INTO `major` VALUES ('010', 'ฟิสิกส์', '03');
INSERT INTO `major` VALUES ('011', 'ภาษาไทย', '03');
INSERT INTO `major` VALUES ('012', 'ภาษาอังกฤษ', '03');
INSERT INTO `major` VALUES ('013', 'วิทยาศาสตร์', '03');
INSERT INTO `major` VALUES ('014', 'สังคมศึกษา', '03');
INSERT INTO `major` VALUES ('015', 'เทคโนโลยีการศึกษา', '03');
INSERT INTO `major` VALUES ('016', 'วิชาชีพครู', '03');
INSERT INTO `major` VALUES ('017', 'การบริหารการศึกษา', '03');
INSERT INTO `major` VALUES ('018', 'การวิจัยและการประเมินผลการศึกษา', '03');
INSERT INTO `major` VALUES ('019', 'หลักสูตรและการสอน', '03');
INSERT INTO `major` VALUES ('020', 'การบริหารการศึกษา', '03');
INSERT INTO `major` VALUES ('021', 'การศึกษาและการพัฒนาสังคม', '03');
INSERT INTO `major` VALUES ('022', 'วิทยาการคอมพิวเตอร์', '01');
INSERT INTO `major` VALUES ('023', 'เทคโนโลยีสารสนเทศ', '01');
INSERT INTO `major` VALUES ('024', 'วิศวกรรมคอมพิวเตอร์', '01');
INSERT INTO `major` VALUES ('025', 'การบริหารธุรกิจ(คอมพิวเตอร์ธุรกิจ)', '01');
INSERT INTO `major` VALUES ('026', 'กราฟิกดีไซน์', '01');
INSERT INTO `major` VALUES ('027', 'เทคโนโลยีคอมพิวเตอร์อุตสาหกรรม', '01');
INSERT INTO `major` VALUES ('028', 'โปรแกรมวิชาเคมี', '04');
INSERT INTO `major` VALUES ('029', 'โปรแกรมวิชาวิทยาศาสตร์การอาหาร', '04');
INSERT INTO `major` VALUES ('030', 'โปรแกรมวิชาฟิสิกส์', '04');
INSERT INTO `major` VALUES ('031', 'โปรแกรมวิชาเทคโนโลยีการเกษตร', '04');
INSERT INTO `major` VALUES ('032', 'โปรแกรมวิชาคณิตศาสตร์', '04');
INSERT INTO `major` VALUES ('033', 'โปรแกรมวิชาวิทยาศาสตร์สุขภาพสัตว์', '04');
INSERT INTO `major` VALUES ('034', 'โปรแกรมวิชาพลังงานและสิ่งแวดล้อม', '04');
INSERT INTO `major` VALUES ('035', 'ภาควิชาการเงินและการบัญชี', '05');
INSERT INTO `major` VALUES ('036', 'ภาควิชาการตลาด', '05');
INSERT INTO `major` VALUES ('037', 'ภาควิชาการสื่อสารและการประชาสัมพันธ์', '05');
INSERT INTO `major` VALUES ('038', 'การบริหารธุรกิจและสหกรณ์', '05');
INSERT INTO `major` VALUES ('039', 'ภาควิชาเศรษฐศาสตร์', '05');
INSERT INTO `major` VALUES ('040', 'สาขาวิชาวิศวกรรมพลังงาน', '06');
INSERT INTO `major` VALUES ('041', 'สาขาวิชาวิศวกรรมโลจิสติกส์', '06');
INSERT INTO `major` VALUES ('042', 'เทคโนโลยีก่อสร้าง', '06');
INSERT INTO `major` VALUES ('043', 'สาขาวิชาเทคโนโลยีการจัดการอุตสาหกรรม', '06');
INSERT INTO `major` VALUES ('044', 'เทคโนโลยีไฟ้า', '06');
INSERT INTO `major` VALUES ('045', 'สถาปัตยกรรม', '06');
INSERT INTO `major` VALUES ('046', 'สาขาวิชานวัตกรรมการออกแบบ', '06');
INSERT INTO `major` VALUES ('047', 'ต สาขาวิชาวิจัยและพัฒนาเทคโนโลยีอุตสาหกรรม', '06');
INSERT INTO `major` VALUES ('048', 'สาขาวิชานักบินพาณิชย์ตรี (นานาชาติ)', '09');
INSERT INTO `major` VALUES ('049', 'สาขาวิชาการจราจรทางอากาศ', '09');
INSERT INTO `major` VALUES ('050', 'สาขาวิชาการจัดการท่าอากาศยาน', '09');
INSERT INTO `major` VALUES ('051', 'สาขาวิชาการขนส่งสินค้าทางอากาศ', '09');
INSERT INTO `major` VALUES ('052', 'สาขาวิชาการจัดการโครงการ (นานาชาติ)', '09');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `type`
-- 

CREATE TABLE `type` (
  `T_id` char(2) NOT NULL,
  `T_name` varchar(50) NOT NULL,
  PRIMARY KEY  (`T_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- dump ตาราง `type`
-- 

INSERT INTO `type` VALUES ('01', 'นักศึกษา');
INSERT INTO `type` VALUES ('02', 'อาจารย์');
INSERT INTO `type` VALUES ('03', 'พนักงานมหาวิทยาลัย');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `user`
-- 

CREATE TABLE `user` (
  `U_Tname` varchar(50) NOT NULL,
  `U_Ename` varchar(50) NOT NULL,
  `U_id` varchar(13) NOT NULL,
  `U_passport` varchar(20) NOT NULL,
  `U_id_code` varchar(20) NOT NULL,
  `U_Bdate` date NOT NULL,
  `M_id` varchar(3) NOT NULL,
  `T_id` char(2) NOT NULL,
  `tel` varchar(9) NOT NULL,
  `tel2` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `status` char(1) NOT NULL,
  PRIMARY KEY  (`U_id_code`),
  KEY `U_Tname` (`U_Tname`,`U_Ename`,`M_id`,`T_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- dump ตาราง `user`
-- 

INSERT INTO `user` VALUES ('นายลิขิต ยอดยา', 'likit yodya', '1579900360498', '-', '531463133', '1991-05-15', '001', '03', '053154534', '0804423112', 'likityodya@gmail.com', '2014-03-19', '2');
INSERT INTO `user` VALUES ('ภัทรวรรธน์ อัครภาอารีมิตร์', 'bbb', 'bbb', 'bbb', '531463122', '2000-08-03', '008', '01', 'bbbbbbbbb', 'bbbbbbbbbb', 'bbb@gmail.com', '2014-03-24', '1');
INSERT INTO `user` VALUES ('ภัทรวรรธน์ อัครภาอารีมิตร์', 'aaa', 'aaaa', 'aaaa', 'aaaa', '2009-03-03', '003', '02', 'aaaaaaaaa', 'aaaaaaaaaa', 'aa@ggmail.com', '2014-03-24', '1');
INSERT INTO `user` VALUES ('ภัทรวรรธน์ อัครภาอารีมิตร์', 'cccc', 'ccc', 'cc', 'cc', '2014-01-01', '035', '01', 'cc', 'cc', 'cchantawatpaopinta@gmail.com', '2014-03-24', '1');
INSERT INTO `user` VALUES ('ภัทรวรรธน์ อัครภาอารีมิตร์', 'dddd', 'ddd', 'dddsdf', 'ddsf', '2014-01-01', '022', '02', 'dd', 'dd', 'ddfsdfs@gamil.com', '2014-03-24', '1');
INSERT INTO `user` VALUES ('ภัทรวรรธน์ อัครภาอารีมิตร์', 'ee', 'ee', 'ee', 'ee', '2014-05-03', '028', '01', 'ee', 'ee', 'ee@g.com', '2014-03-24', '1');
INSERT INTO `user` VALUES ('ภัทรวรรธน์ อัครภาอารีมิตร์', 'd', 'g', 'g', 'gg', '2014-01-01', '028', '01', 'ggg2gg', 'g', 'g@f.cpn', '2014-03-27', '1');
INSERT INTO `user` VALUES ('ืนานา hotel', 'nan totel', '1234567890111', '', '123456789', '2014-01-01', '023', '01', '111111111', '1111111111', 'dddd@dmu.com', '2014-03-30', '1');
INSERT INTO `user` VALUES ('อิทธิพล ปันต๊ะ', 'ittiphon panta', '1234567890123', '-', '444444444', '1966-07-20', '030', '01', '111111111', '1111111111', 'dddd@dmu.com', '2014-03-31', '1');
