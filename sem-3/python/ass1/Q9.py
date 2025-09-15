# 9. Write python program draw the following patterns:
# *
# ***
# *****
# *******
# *********


n = int(input("enter a number"))
 
for i in range(1, n+1):
    for j in range(i):
        print('*', end=" ")
       
    print()