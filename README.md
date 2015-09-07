ci_mongodb
==========

connection with mongodb and ci

before starting with this code there are few pre-requisits to be satisfied with the php platform

1. Download http://windows.php.net/downloads/pecl/releases/mongo/1.6.11/php_mongo-1.6.11-5.6-ts-vc11-x86.zip, extract php_mongo.dll and copy it to C:\xampp\php\ext
2. Add to C:\xampp\php\php.ini line extension=php_mongo.dll
4. Copy C:\xampp\php\libsasl.dll to C:\xampp\apache\bin\, restart Apache and enjoy.


ref: http://stackoverflow.com/questions/32134416/adding-mongodb-extention-for-php-5-6-xampp/32339977#32339977
