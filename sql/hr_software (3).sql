CREATE DATABASE hr_software;
CREATE TABLE users(
id int(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
username varchar(200),

password varchar(200),

email varchar(200)
);
CREATE TABLE `emp_general_info` (
  `empId` int(50) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  `empName` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `photoName` varchar(255) DEFAULT NULL,
  `photoPath` varchar(255) DEFAULT NULL,
  `bloodGroup` varchar(50) DEFAULT NULL,
  `emergencyContact` varchar(50) DEFAULT NULL,
  `lastWorkingDate` date DEFAULT NULL,
  `dateOfJoining` date DEFAULT NULL,
  `probationCompletionDate` date DEFAULT NULL,
  `documentName` varchar(255) DEFAULT NULL,
  `documentPath` varchar(255) DEFAULT NULL,
  `sex` varchar(50) DEFAULT NULL,
  `emp_status` varchar(50) DEFAULT NULL,
  `designation` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `designation` (
  `id` int(50) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `designation` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `documentName` varchar(255) DEFAULT NULL,
  `documentPath` varchar(255) DEFAULT NULL,
  `designationStatus` varchar(50) DEFAULT NULL
);


CREATE TABLE `academicdetails` (
  `id` int(50) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `highestQualification` varchar(50) DEFAULT NULL,
  `yearOfPassing` varchar(50) DEFAULT NULL,
  `institution` varchar(50) DEFAULT NULL,
  `documentName` varchar(255) DEFAULT NULL,
  `documentPath` varchar(255) DEFAULT NULL,
  `empId` int(50) DEFAULT NULL,
   FOREIGN KEY (`empId`) REFERENCES `emp_general_info` (`empId`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `departmenttable` (
  `id` int(50) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `department` varchar(50) DEFAULT NULL,
  `designationId` int(50) DEFAULT NULL,
  `documentName` varchar(255) DEFAULT NULL,
  `documentPath` varchar(255) DEFAULT NULL,
  `departmentStatus` varchar(50) DEFAULT NULL,
   FOREIGN KEY (`designationId`) REFERENCES `designation` (`id`) 
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `employeecontact` (
  `cont_id` int(50) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  `mobileId` varchar(50) NOT NULL,
  `officeEmail` varchar(50) DEFAULT NULL,
  `personalEmail` varchar(50) DEFAULT NULL,
  `presentAddress` varchar(50) DEFAULT NULL,
  `permanentAddress` varchar(50) DEFAULT NULL,
  `PFno` varchar(50) DEFAULT NULL,
  `ESICno` varchar(50) DEFAULT NULL,
  `UANno` varchar(50) DEFAULT NULL,
  `aadharNo` varchar(50) DEFAULT NULL,
  `PANno` varchar(50) DEFAULT NULL,
  `documentName` varchar(255) DEFAULT NULL,
  `documentPath` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `empId` int(50) DEFAULT NULL,
  FOREIGN KEY (`empId`) REFERENCES `emp_general_info` (`empId`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE `experiencedetails` (
  `id` int(50) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  `experience` varchar(50) DEFAULT NULL,
  `designation` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `documentName` varchar(255) DEFAULT NULL,
  `documentPath` varchar(255) DEFAULT NULL,
  `empId` int(50) DEFAULT NULL,
  FOREIGN KEY (`empId`) REFERENCES `emp_general_info` (`empId`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `leave_setting` (
  `id` int(50) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY	KEY,
  `financial_year` int(50) DEFAULT NULL,
  `starting_date` date DEFAULT NULL,
  `ending_date` date DEFAULT NULL,
  `holiday_group` varchar(100) DEFAULT NULL,
  `no_of_hours` int(50) DEFAULT NULL,
  `shift` varchar(100) DEFAULT NULL,
  `week_start` varchar(50) DEFAULT NULL,
  `weekly_days_off` varchar(50) DEFAULT NULL,
  `leave_type` varchar(50) DEFAULT NULL,
  `no_of_holiday` int(50) DEFAULT NULL,
  `allow_per_month` int(50) DEFAULT NULL,
  `threshold` int(50) DEFAULT NULL,
  `approved_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `new_leave` (
  `l_id` int(50) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `leave_type` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `non_req_leave` (
  `non_req_id` int(50) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `emp_name` varchar(200) NOT NULL,
  `designationId` int(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `no_of_day` int(50) NOT NULL,
  `leave_type` varchar(200) NOT NULL,
  `balance_leave` int(50) NOT NULL,
  `starting_date` date NOT NULL,
  `ending_date` date DEFAULT NULL,
  `fullday_half` varchar(200) NOT NULL,
  `reason` varchar(200) NOT NULL,
  `inform_status` varchar(100) NOT NULL,
  `inform_medium` varchar(100) NOT NULL,
  `documentName` varchar(255) DEFAULT NULL,
  `documentPath` varchar(255) DEFAULT NULL,
  `empId` int(50) DEFAULT NULL,
   FOREIGN KEY (`empId`) REFERENCES `emp_general_info` (`empId`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `professionalskill` (
  `id` int(50) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `empId` int(50) DEFAULT NULL,
  `skillName` varchar(50) DEFAULT NULL,
  `experience` varchar(50) DEFAULT NULL,
  `documentName` varchar(255) DEFAULT NULL,
  `documentPath` varchar(255) DEFAULT NULL,
  FOREIGN KEY (`empId`) REFERENCES `emp_general_info` (`empId`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `req_leave` (
  `req_id` int(50) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `empId` int(50) DEFAULT NULL,
   FOREIGN KEY (`empId`) REFERENCES `emp_general_info` (`empId`) ON DELETE CASCADE,
  `emp_name` varchar(200) DEFAULT NULL,
  `designationId` int(100) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  `no_of_day_requested` int(50) DEFAULT NULL,
  `leave_type` varchar(200) DEFAULT NULL,
  `balance_leave` int(50) DEFAULT NULL,
  `starting_date` date DEFAULT NULL,
  `ending_date` date DEFAULT NULL,
  `fullday_half` varchar(200) DEFAULT NULL,
  `reason` varchar(200) DEFAULT NULL,
  `supervisor_name` varchar(100) DEFAULT NULL,
  `approval_states` varchar(100) DEFAULT NULL,
  `documentName` varchar(255) DEFAULT NULL,
  `documentPath` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `set_holiday` (
  `holiday_id` int(50) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `leave_year` varchar(100) DEFAULT NULL,
  `group_name` varchar(100) DEFAULT NULL,
  `h_name` varchar(100) DEFAULT NULL,
  `starting_date` date DEFAULT NULL,
  `ending_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `fileuploadrecord` (
  `id` int(11)  NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `month` varchar(255) DEFAULT NULL,
  `record_Year` int(255) DEFAULT NULL,
  `att_sheetName` varchar(255) DEFAULT NULL,
  `att_sheetPath` varchar(255) DEFAULT NULL,
  `dtOfUpload` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `attendancerecord` (
  `id` int(50) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `empId` varchar(50) DEFAULT NULL,
  `empName` varchar(50) DEFAULT NULL,
  `Att_Date` date DEFAULT NULL,
  `InTime` time DEFAULT NULL,
  `OutTime` time DEFAULT NULL,
  `Shift` varchar(50) DEFAULT NULL,
  `S_InTime` time DEFAULT NULL,
  `S_OutTime` time DEFAULT NULL,
  `WorkDurr` time DEFAULT NULL,
  `OT` time DEFAULT NULL,
  `TotDurr` time DEFAULT NULL,
  `LateBy` time DEFAULT NULL,
  `EarlyGoingBy` time DEFAULT NULL,
  `Att_Status` varchar(50) DEFAULT NULL,
  `Punch_Records` varchar(50) DEFAULT NULL,
  `id_fileuploadrecord` int(11) NOT NULL,
 FOREIGN KEY (`id_fileuploadrecord`) REFERENCES `fileuploadrecord` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;