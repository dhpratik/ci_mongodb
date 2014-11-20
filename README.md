ci_mongodb
==========

connection with mongodb and ci

before starting with this code there are few pre-requisits to be satisfied with the php platform

1. download the latest zip file from 'https://s3.amazonaws.com/drivers.mongodb.org/php/index.html' 
2. based on the version of php you are having copy the .dll file from the zip file downloaded to 'php/ext' folder of your php installation
3. copy the name of the .dll file and include it into php.ini file as 
    'extension=php_mongo-1.5.7-5.5-vc11.dll'  (latest and matching my php API)
4. restart the server. If it doesnot give any error then you have used correct .dll file else try another from the zip folder. this is a bit of tiering and you have to use trial and error method.
5. after this is setup use the given project for working with mongodb in CI

ref: http://www.phpgainers.com/content/mongodb-php-beginners
