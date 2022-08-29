CREATE TABLE currencies (
    userID varchar(10),
    defaultCurrency varchar(3)
);

CREATE TABLE counters (
    id varchar2(10),
    tally int(255),
);


INSERT INTO currencies VALUES ('User', 'NZD')

INSERT INTO counters VALUES ('NZD', 0)
INSERT INTO counters VALUES ('AUD', 0)
INSERT INTO counters VALUES ('USD', 0)
INSERT INTO counters VALUES ('GBP', 0)
INSERT INTO counters VALUES ('KRW', 0)