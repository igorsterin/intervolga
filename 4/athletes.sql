CREATE TABLE `athletes`
(
    `ID`                 int(11)      NOT NULL AUTO_INCREMENT,
    `FULL_NAME`          varchar(100) NOT NULL,
    `E-MAIL`             varchar(50)  NOT NULL,
    `PHONE_NUMBER`       varchar(20)  NOT NULL,
    `BIRTHDATE`          date         NOT NULL,
    `AGE`                int(1)       NOT NULL,
    `DATE_CREATE`        datetime     NOT NULL DEFAULT current_timestamp(),
    `PASSPORT_ID`        varchar(20)  NOT NULL,
    `AVERAGE_POSITION`   int(4)       NOT NULL,
    `BIOGRAPHY`          text         NOT NULL,
    `VIDEO_PRESENTATION` varchar(100) NOT NULL,
    PRIMARY KEY (`ID`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

CREATE TABLE `results`
(
    `COMPETITION_ID` int(11)     DEFAULT NULL,
    `ATHLET_ID`      int(11)     DEFAULT NULL,
    `RESULT`         varchar(25) DEFAULT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

--
-- Выборка данных
--

SELECT FULL_NAME
FROM athletes
         JOIN results ON ATHLET_ID = ID
GROUP BY FULL_NAME
ORDER BY COUNT(COMPETITION_ID) DESC
LIMIT 5