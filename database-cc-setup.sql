CREATE TABLE currencies (
    userID varchar(10),
    defaultCurrency varchar(3)
);

CREATE TABLE counters (
    id varchar2(10),
    tally int(255),
);


INSERT INTO currencies VALUES ('User', 'NZD')