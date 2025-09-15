# 2. Write a program to accept 5 numbers and calculate its Mean value

number = []

for i in range(5):
    num = float(input('enter 5 numbers'))
    number.append(num)
    
mean = sum(number) / len(number)

print(mean, '===============')
    