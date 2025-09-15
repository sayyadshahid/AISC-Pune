# 5. Write a program to count frequency of characters in a string.


string= input('enter a string ')

frq = {}

for i in string:
    if i in frq:
        frq[i] += 1
        
    else:
        frq[i] =1
        
for k, v in frq.items():
    print(k, v)