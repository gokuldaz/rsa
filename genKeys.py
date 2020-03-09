#expects 2 prime numbers
from decimal import Decimal
import csv
import sys



fn, sn = sys.argv[1:3]

p = int(fn)
q = int(sn)


def gcd(a,b): 
	if b==0: 
		return a 
	else: 
		return gcd(b,a%b)

def checkPrime(num):
    if num > 1:  
       for i in range(2,num):  
           if (num % i) == 0:  
               return False  
               break  
       else:  
           return True  
    else:  
       return False

#checking if they are prime or not
pCheck = checkPrime(p)
qCheck = checkPrime(q)



if pCheck and qCheck == True:
    #Both are prime numbers
    n = p*q 
    t = (p-1)*(q-1)
    for e in range(3,t): 
        if gcd(e,t)== 1:
            break
	    
    for i in range(1,10): 
        x = 1 + i*t
        if x % e == 0:
            d = int(x/e)
            break
     
    print(e,",",d,",",n)
    #print("Alert!!! Note down the keys in a safe place...\n")
    #print("Encryption Key is",e)
    #print("Decryption key is",d)
else:
    #Both are not prime
    print("Both numbers are not prime!!! Please try with 2 Prime numbers...")
