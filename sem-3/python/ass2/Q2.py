# 2. Write a program to calculate the factorial of a number using function.
def FactorialOfNumber(n):
    fact = 1
    for i in range(1, n + 1):
        fact *= i  # same as fact = fact * i
    return fact

# Example usage
number = 10
print("Factorial of", number, "is", FactorialOfNumber(number))
