import time
import motorTest as feederMotor
import subprocess
import datetime
import os

def updateFdrDispensedQty(amt):
  fileName = os.path.abspath('/var/www/html/fdrCount.txt')
  f= open(fileName, 'r+')
  qty = float(f.readline())
  qty = qty + amt
  f.truncate()
  f.seek(0)
  f.write(str(qty))
  f.close()

def feedAndPhoto(amount):
  subprocess.call("sh /home/icf/catFeeder/emailBeforeImage.sh", shell=True)
  feederMotor.start(str(amount))
  subprocess.call("sh /home/icf/catFeeder/emailAfterImage.sh", shell=True)


#1600 revolutions = 1 cup of food
#cfMotor.py 1600
amount1 = float(0.25)

adjAmt1 = 1600 * amount1

x = datetime.datetime.now()
print(x)

print "First feeding commencing"
feedAndPhoto(adjAmt1)
updateFdrDispensedQty(amount1)

feederMotor.cleanup()
