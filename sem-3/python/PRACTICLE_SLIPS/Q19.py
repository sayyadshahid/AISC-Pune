# 10. Write a Python program to accept n numbers in a list and find maximum and minimum 
# from list.

n = int(input('enter a number'))

list1 = []

for i in range(n):
    num = int(input('enter a number'))
    list1.append(num)

min = list1[0]
max = list1[0]


for n in list1:
    if n < min:
         min = num
    if n > max:
        max = num

print("List:", list1)
print("Minimum number:", min)
print("Maximum number:", max)