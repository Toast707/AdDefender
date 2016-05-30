#!/bin/bash

echo "Starting Apache Server..."
# Start the current Apache2-Server
sudo /etc/init.d/apache2 start

echo "Opening Browser"
#Open the defaul URL in Browser
xdg-open http://localhost/AdDefender/app/


echo "All done!"

