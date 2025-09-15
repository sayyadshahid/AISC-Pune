# 2. Write a program to accept 5 numbers and calculate its Mean value

numbers = []
 
for i in range(5):
    num = float(input(f"Enter number "))
    numbers.append(num)

 
mean = sum(numbers) / len(numbers)

print("Mean value =", mean)

 