#!/bin/bash

fswebcam -S 30 -r 640x480 /home/catFeeder03/beforeImage.jpg

python /home/icf/catFeeder/sendBeforeEmail.py
