#expects encryption key and filename
import sys
from decimal import Decimal
import os.path

d = int(sys.argv[1])
n = int(sys.argv[2])
fileName = sys.argv[3:]

#creating alphabet list
alpha_list = []
alpha = 'a'
for i in range(0, 26):
    alpha_list.append(alpha)
    alpha = chr(ord(alpha) + 1)



dir = "encFiles/"
file = dir+fileName[0]

with open(file,"r") as f:
    res = f.read()

#converting ascii to numbers
list = res.split (",")
li = []
for i in list:
    li.append(int(i))

characters = [chr(ascii) for ascii in li]
con = ''.join(characters)
	

con = con.split(",")

content = []
for i in con:
	content.append(int(i))

decDir = "decFiles/"
name = fileName[0]+"_decrypted"
fileNum = 1

while os.path.isfile(decDir+name+str(fileNum)+".txt"):
	fileNum = fileNum + 1
	
fileName = decDir+name+str(fileNum)+".txt"

write_content = []


for i in range(0,len(content)):
	c = content[i]
	p = (pow(c,d) % n) % 26
	a = alpha_list[p]
	write_content.append(a)

with open(fileName,"w") as f:
    f.write("".join(str(x) for x in write_content))

print("<script>window.location.href='index.php'\nalert('Decrypted!!!')</script>")	

