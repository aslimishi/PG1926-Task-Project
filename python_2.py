#*************** Problem Seti 2 ***************#
print("bu program email kontrol eder")
import re 
 
regex = '^[a-z0-9]+[\._]?[a-z0-9]+[@]\w+[.]\w{2,3}$'

def check(email):  

    if(re.search(regex,email)):  
        print(bool(email))  
          
    else:  
        print(bool(email))  
      
  
if __name__ == '__main__' :  
      
  
    email = input("E-mail adresinizi girin:")
    check(email) 
