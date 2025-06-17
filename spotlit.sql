CREATE TABLE Users (
    userID INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'talent', 'customer') NOT NULL
);

CREATE TABLE TalentProfile (
    talentID INT AUTO_INCREMENT PRIMARY KEY,
    userID INT NOT NULL,
    nickname VARCHAR(100),
    education VARCHAR(255),
    talent ENUM('music', 'arts', 'theater', 'coding', 'robotics', 'graphic', 'animation', 'photography', 'others'),
    resume_file_path VARCHAR(255),
    phone VARCHAR(20),
    gender ENUM('male', 'female'),
    profile_pic VARCHAR(255),
    FOREIGN KEY (userID) REFERENCES Users(userID)
);

CREATE TABLE CustomerProfile (
    customerID INT AUTO_INCREMENT PRIMARY KEY,
    userID INT NOT NULL,
    phone VARCHAR(20),
    profile_pic VARCHAR(255),
    FOREIGN KEY (userID) REFERENCES Users(userID)
);

CREATE TABLE AdminProfile (
    adminID INT AUTO_INCREMENT PRIMARY KEY,
    userID INT NOT NULL,
    responseID INT,
    profile_pic VARCHAR(255),
    phone VARCHAR(20),
    FOREIGN KEY (userID) REFERENCES Users(userID)
);

CREATE TABLE Announcement (
    announcementID INT AUTO_INCREMENT PRIMARY KEY,
    adminID INT NOT NULL,
    ann_title VARCHAR(200),
    ann_description VARCHAR(500),
    event_date DATE,
    FOREIGN KEY (adminID) REFERENCES AdminProfile(adminID)
);

CREATE TABLE Event (
    eventID INT AUTO_INCREMENT PRIMARY KEY,
    adminID INT NOT NULL,
    event_title VARCHAR(200),
    event_desc VARCHAR(500),
    event_date DATE,
    FOREIGN KEY (adminID) REFERENCES AdminProfile(adminID)
);

CREATE TABLE Community (
    communityID INT AUTO_INCREMENT PRIMARY KEY,
    userID INT NOT NULL,
    community_title VARCHAR(200),
    community_content VARCHAR(500),
    community_date DATE,
    comment_text VARCHAR(255),
    comment_date DATE,
    FOREIGN KEY (userID) REFERENCES Users(userID)
);

CREATE TABLE Feedback (
    feedbackID INT AUTO_INCREMENT PRIMARY KEY,
    responseID INT,
    feedback_desc VARCHAR(500),
    target_talent VARCHAR(100),
    feedback_date DATE
);

CREATE TABLE FAQ (
    faqID INT AUTO_INCREMENT PRIMARY KEY,
    adminID INT NOT NULL,
    question VARCHAR(255),
    answer VARCHAR(500),
    FOREIGN KEY (adminID) REFERENCES AdminProfile(adminID)
);

CREATE TABLE Report (
    reportID INT AUTO_INCREMENT PRIMARY KEY,
    userID INT NOT NULL,
    report_desc VARCHAR(500),
    target_talent VARCHAR(100),
    report_date DATE,
    FOREIGN KEY (userID) REFERENCES Users(userID)
);

CREATE TABLE Gallery (
    galleryID INT AUTO_INCREMENT PRIMARY KEY,
    media_title VARCHAR(200),
    media_desc VARCHAR(500),
    media_type VARCHAR(100),
    media_date DATE
);

CREATE TABLE AdminResponse (
    responseID INT AUTO_INCREMENT PRIMARY KEY,
    feedbackID INT,
    adminID INT NOT NULL,
    response_content VARCHAR(500),
    response_date DATE,
    FOREIGN KEY (adminID) REFERENCES AdminProfile(adminID)
);