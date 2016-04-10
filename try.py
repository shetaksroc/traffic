import csv
import datetime
import os
import sys, json
with open('test/12.csv','r') as csv1:
	
	
	
	
		spamreader = csv.reader(csv1, delimiter=';', quotechar='|')
		
		a=[]
		for row in spamreader:
			l=row[0].strip("''").split(',')
			a.append(l)
		#print(a)	
			#print(l)
			#dt=row[9].strip('""')
			
with open('test/12.csv','w') as csv2:
		spamwriter = csv.writer(csv2, delimiter=';', quotechar='|')
		for i in a:
				
		#print(l[5],l[6],l[7],wk,week_number)
			spamwriter.writerow([l[0],l[1],l[2],l[3],1])