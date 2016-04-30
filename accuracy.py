import csv
with open("test2/test_o.csv") as csv_file:
	ec=0
	tc=-1
	for row in csv.reader(csv_file, delimiter=','):
		if(tc==-1):
			tc=0
			continue
		#put column no of actual and pred pixel values as indices	
		if(int(row[12])!=int(row[13])):
			ec+=1
				
		tc+=1
		
MAE=ec*1.0/tc
MAEP=(ec*1.0/tc)*100
MAS=1.0-MAE
MASP=100.0-MAEP
print ec
print tc
print('Mean absolute error '+ str(MAE))
print('Mean absolute error percentage '+str(MAEP))
print('Mean absolute Match '+str(MAS))
print('Mean absolute Match percentage '+str(MASP))