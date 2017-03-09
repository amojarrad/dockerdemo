FROM drupal:8.2-apache

USER root
RUN apt-get update
RUN apt-get install curl php5-fpm libapache2-mod-php5 python -y
#apache2-mpm-event -y

RUN apt-get -y install nodejs
RUN apt-get -y install npm

RUN echo "Installing Drush"
RUN php -r "readfile('https://s3.amazonaws.com/files.drush.org/drush.phar');" > /opt/drush
# Or use our upcoming release: php -r "readfile('https://s3.amazonaws.com/files.drush.org/drush-unstable.phar');" > drush
# Test your install.
RUN php /opt/drush core-status
# Make `drush` executable as a command from anywhere. Destination can be anywhere on $PATH.
RUN chmod +x /opt/drush
RUN mv /opt/drush /usr/local/bin

RUN echo "Installing Drupal Console"
RUN curl https://drupalconsole.com/installer -L -o /opt/drupal.phar
RUN mv /opt/drupal.phar /usr/local/bin/drupal
RUN chmod +x /usr/local/bin/drupal






