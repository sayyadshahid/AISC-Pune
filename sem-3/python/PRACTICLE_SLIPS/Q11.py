# 2. Write a program to calculate the factorial of a number using function.

def fact_number(n):
    fact = 1
    for i in range(1, n+1):
        fact *= i
    return fact

num= int(input('enter a number'))
print(fact_number(num))