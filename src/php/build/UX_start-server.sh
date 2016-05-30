#!/bin/bash

# (c) 2016 Thomas Roskop, AdDefender

echo ">>> Starting Web-Server for AdDefender..."

echo "Starting Apache Server..."
# Start the current Apache2-Server
sudo /etc/init.d/apache2 start

echo "Opening Browser"
# Open the defaul URL in Browser
# Un-comment if your OS supports this (e.g. ubuntu)
# xdg-open http://localhost/AdDefender/app/


echo "Try it out: http://localhost/AdDefender/src/overview.html"

