# 7. Write a program to accept a number and display its first ten multiples.
n = int(input("Enter a number: "))
 
for i in range(1, 11):
    print(f"{n} x {i} = {n * i}")
