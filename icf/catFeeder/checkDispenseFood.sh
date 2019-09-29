#!/bin/sh
# feedNow.sh
# navigate to home directory, then to this directory, then execute python script, then back home

cd /
cd home/icf/catFeeder
sudo python checkDispenseFood.py
cd /
