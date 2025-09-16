# 1. Write a program which finds the sum of digits of a number using function.


def sum_of_digits(num):
    total = 0
    while num > 0:
        digit = num % 10      # get last digit
        total += digit        # add it to total
        num //= 10            # remove last digit
    return total
 
n = int(input("Enter a number: "))
 
print("Sum of digits:", sum_of_digits(n))