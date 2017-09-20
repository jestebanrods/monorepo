#!/bin/bash

ember build --env production
sudo rm -rf /var/www/html/
sudo mkdir /var/www/html/
sudo scp -r dist/* /var/www/html/