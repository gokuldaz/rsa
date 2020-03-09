#expects encryption key and filename
import sys
from decimal import Decimal
import os.path

e = int(sys.argv[1])
n = int(sys.argv[2])
word_list = sys.argv[3:]

#print(word_list)


#fetching each character and storing in a list
char_list = []
for w in word_list:
    for i in range(len(w)):
        char_list.append(w[i])
#print("Making into characters", char_list)

alpha_list = []
alpha = 'a'
for i in range(0, 26):
    alpha_list.append(alpha)
    alpha = chr(ord(alpha) + 1)
#print("\nList of alphabets", alpha_list)

#function to convert character to its coressponding value in 26 range
char_value = []
for c in char_list:
        new_c = c.lower()
        char_value.append(alpha_list.index(new_c))
#print("\nValue of each plain character", char_value)


#encryption
cipher_val = []

for x in char_value:
    enc = Decimal(0)
    enc = pow(x,e) % n
    cipher_val.append(enc)


write_content = "".join(str(x) for x in cipher_val)
#print("\nValue of each cipher character", cipher_val)

encDir = "encFiles/"
name = "enc"
fileNum = 1
while os.path.isfile(encDir+name+str(fileNum)+".txt"):
	fileNum = fileNum + 1

fileName = encDir+name+str(fileNum)+".txt"
with open(fileName,"w") as f:
	#f.write(",".join( repr(e) for e in cipher_val ))
	
	#converting into ascii values
	number = ",".join( repr(e) for e in cipher_val )
	asciiList = [ord(c) for c in number]
	res = str(asciiList)[1:-1]
	f.write(res)

	print("<script>window.location.href='index.php'\nalert('Encrypted!!!')</script>")




