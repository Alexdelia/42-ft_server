service mysql start

# wordpress
mkdir /var/www/localhost
wget http://wordpress.org/latest.tar.gz
tar -zvxf latest.tar.gz && rm latest.tar.gz
mv wordpress/ var/www/localhost/.
mv wp-config.php /var/www/localhost/wordpress/.

echo "CREATE DATABASE wordpress DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;" | mysql -u root --skip-password
echo "GRANT ALL PRIVILEGES ON wordpress.* TO 'root'@'localhost' WITH GRANT OPTION;" | mysql -u root --skip-password
echo "UPDATE mysql.user set plugin='mysql_native_password' WHERE user='root';" | mysql -u root --skip-password
echo "FLUSH PRIVILEGES;" | mysql -u root --skip-password
