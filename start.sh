#!/bin/bash


# HTTPD_DOCKER=$(docker ps -ql --filter ancestor=httpd:2.4.25)
mkdir data

git clone https://github.com/TheUniproGroup/ss_dds_drupal.git ./data
cd data/docroot/themes
git clone https://github.com/TheUniproGroup/ss_dds_theme.git
cd ss_dds_theme
git clone https://github.com/TheUniproGroup/ss_dds.git
cd ss_dds
git clone https://github.com/twbs/bootstrap.git
cd bootstrap
git checkout v3.3.7
cd ../../
pwd



# Create the containers
docker-compose up -d