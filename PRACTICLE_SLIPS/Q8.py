# 8. Write a program to accept a number n, and display the following pattern:
# 1
# 123
# 1234
# 12345
 
 
n = int(input('enter a number '))

for i in range(1, n +1):
    for j in range(1, i+1):
        print(j, end=" ")
        
    print()