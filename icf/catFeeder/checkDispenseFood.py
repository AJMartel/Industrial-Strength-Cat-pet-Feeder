import time
import motorTest as feederMotor
import subprocess
import datetime
import os

# read the file and assign variables
f = open('/var/www/html/configuration.txt', 'r')
firstFeedTime = f.readline()
print (firstFeedTime)
firstFeedAMPM = f.readline()
firstFeedAmmount = f.readline()
secondFeedTime = f.readline()
secondFeedAMPM = f.readline()
secondFeedAmmount = f.readline()
thirdFeedTime = f.readline()
thirdFeedAMPM = f.readline()
thirdFeedAmmount = f.readline()
f.close()

def updateFdrDispensedQty(amt):
  fileName = os.path.abspath('/var/www/html/fdrCount.txt')
  f= open(fileName, 'r+')
  qty = float(f.readline())
  qty = qty + amt
  f.seek(0)
  f.truncate()
  f.write(str(qty))
  f.close()

def feedAndPhoto():
  subprocess.call("sh /home/icf/catFeeder/emailBeforeImage.sh", shell=True)
  feederMotor.start(str(adjAmt1))
  subprocess.call("sh /home/icf/catFeeder/emailAfterImage.sh", shell=True)

def convertTo24Hour( inputTime, AMPM ):
  if AMPM.strip() == "am":
    returnValue = inputTime.strip()
    if returnValue != 'off':
      return int(returnValue)
    else:
      return returnValue
  else:
    return int(inputTime) + 12

t = time.localtime() # gives you an actual struct_time object
h = t.tm_hour # gives you the hour part as an integer


#compare the local time to each of the feed times
# the feed time could be "off" or a integer value
time1 = convertTo24Hour(firstFeedTime, firstFeedAMPM)
time2 = convertTo24Hour(secondFeedTime, secondFeedAMPM)
time3 = convertTo24Hour(thirdFeedTime, thirdFeedAMPM)


#1072 revolutions = 1 cup of food
#cfMotor.py 
amount1 = float(firstFeedAmmount)
amount2 = float(secondFeedAmmount)
amount3 = float(thirdFeedAmmount)

adjAmt1 = 1072 * amount1
adjAmt2 = 1072 * amount2
adjAmt3 = 1072 * amount3

x = datetime.datetime.now()
print(x)

if firstFeedTime.strip() != 'off' and time1 == h:
  print "First feeding commencing"
  feedAndPhoto()
  updateFdrDispensedQty(amount1)
else:
  print "Not time to feed first"
if secondFeedTime.strip() != 'off' and time2 == h:
  print "Second feeding commencing"
  feedAndPhoto()
  updateFdrDispensedQty(amount2)
else:
  print "Not time to feed second"
if thirdFeedTime.strip() != 'off' and time3 == h:
  print "Third feeding commencing"
  feedAndPhoto()
  updateFdrDispensedQty(amount3)
else:
  print "Not time to feed third"

feederMotor.cleanup()
