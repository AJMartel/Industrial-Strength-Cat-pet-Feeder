import RPi.GPIO as GPIO
import time
from time import sleep
import sys

DIR = 18
STEP = 16
ENA = 22
CW = 1
CCW = 0
SPR = 1000
RELAY_PIN = 32
i = 0

GPIO.setmode(GPIO.BOARD)
GPIO.setwarnings(False)
GPIO.setup(DIR,GPIO.OUT)
GPIO.setup(STEP,GPIO.OUT)
GPIO.setup(ENA,GPIO.OUT)
GPIO.setup(RELAY_PIN, GPIO.OUT)

delay = 0.01

def relay_off(pin):
  print "Relay OFF"
  GPIO.output(pin, GPIO.HIGH)

def relay_on(pin):
  print "Relay ON"
  GPIO.output(pin, GPIO.LOW)

def motor_on(pulses):
  for _ in range(pulses):
    time.sleep(delay)
    GPIO.output(DIR,CW)
    GPIO.output(ENA,GPIO.HIGH)
    time.sleep(delay)
    GPIO.output(STEP,GPIO.HIGH)
    time.sleep(delay)
    GPIO.output(STEP,GPIO.LOW)
    time.sleep(delay)

def start(pulses):
  relay_on(RELAY_PIN)
  time.sleep(2)
  motor_on ( int ( float ( pulses ) ) )
  time.sleep(2)
  relay_off(RELAY_PIN)
  GPIO.output(ENA,GPIO.LOW)

def cleanup():
  GPIO.cleanup()
