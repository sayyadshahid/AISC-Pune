# 1. Write a program which finds the sum of digits of a number using function.

def sumOfDigits(n):
    total = 0
    while n > 0:
        digit = n % 10       
        total += digit       
        n = n // 10          
    return total
 
number = 1234
print("Sum of digits:", sumOfDigits(number))

# print(2121 // 10)
 