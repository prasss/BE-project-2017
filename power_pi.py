#!/usr/bin/python
# -*- coding: utf-8 -*-

import RPi.GPIO as IO        # calling for header file which helps us use GPIO’$
import time
import MySQLdb
import serial
                          # calling for time to provide delays in program
IO.setwarnings(False)         # do not show any warnings

def insert(val):
    v=val


    db=MySQLdb.connect("localhost","pika","2736008","yooo")
    cursor=db.cursor()


    sql="""INSERT INTO t3 VALUE (NULL,%s,NOW())"""
    cursor.execute(sql,v)

    db.commit()
    db.close

ser = serial.Serial('/dev/ttyACM0',9600)

while 1: 
        x=ser.readline()
        x = str(ser.readline())
         
        print x
        insert(x)
        time.sleep(1)

