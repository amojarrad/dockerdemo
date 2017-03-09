#!/bin/bash

mysql -u root -proot -e "CREATE DATABASE light"
mysql -u root -proot light < light.sql