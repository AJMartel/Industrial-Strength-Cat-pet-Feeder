#!/bin/bash

fswebcam -S 30 -r 640x480 /home/icf/beforeImage.jpg

python /home/icf/catFeeder/sendBeforeEmail.py
