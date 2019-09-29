import time
import urllib2
import shutil

from subprocess import call
# replace name@provider.com with your email address
call(["mpack", "-s", "Before Feed", "/home/icf/beforeImage.jpg", "name@provider.com"])
