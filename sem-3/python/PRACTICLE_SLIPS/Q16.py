# 7. Write a Python program to accept n numbers in list and remove duplicates from a list.

n = int(input('enter a  number'))

list1 = []

for i in range(n):
    ln = int(input('enter nums '))
    list1.append(ln)

print('og: ', list1)

dupli = list(set(list1))
print(dupli)