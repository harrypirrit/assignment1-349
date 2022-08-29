# COSC349 Assignment 1

Matt Dixon (5305245)
Harry Pirrit (?)

Our application is a simple currency converter to go from NZD to multiple different currencies. 
We have have three different VMs:
- The user web server which 'normal' users use is to access and convert $1.00 New Zealand Dollar to multiple different currencies, AUD, USD, GBP, and KRW.
- The admin web server is for admin to use to have access to the amount of time each currency has been converted.
- The database server is used for storing the user ID and the default currency. 


To run our applcation:
- Clone the repo into a local directory
- Then type 'vagrant up'
- Once the build has finished, go to http://localhost:8080 to access the converter.


To access the admin view, go to http://localhost:8081

