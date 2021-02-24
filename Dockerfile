FROM debian:latest

EXPOSE 80 3303

RUN apt update && apt -y upgrade
RUN apt install -y tar unzip wget git lsb-release apt-transport-https ca-certificates
RUN wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg && echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" | tee /etc/apt/sources.list.d/php.list
RUN apt update && apt -y upgrade
RUN apt -y install php7.4 php7.4-zip php7.4-xml php7.4-dev php7.4-curl php7.4-pgsql php-pear php7.4-mysql mariadb-server apache2
RUN wget https://es-mx.wordpress.org/latest-es_MX.tar.gz
RUN tar -xzvf latest-es_MX.tar.gz
RUN rm latest-es_MX.tar.gz
RUN rm -rf /var/www/html
RUN mv wordpress /var/www/html
RUN chown -R www-data:www-data /var/www/html

#########################################################
#                       MANUALLY!                       #
#########################################################
# service apache2 restart                               #
# servidce mysql restart                                #
# mysql -u root                                         #
# CREATE USER "wpuser" IDENTIFIED BY "GenericPassword"; #
# CREATE DATABASE wordpress;                            #
# GRANT ALL privileges ON "wdbtest".* TO 'wpuser';      #
#########################################################
