#!/bin/bash

fswebcam -S 30 -r 640x480 /home/icf/afterImage.jpg

python /home/icf/catFeeder/sendAfterEmail.py
