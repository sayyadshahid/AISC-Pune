# 6. Write a Python program to accept two lists and merge the two lists into list of tuple

list1 = []

list2 = []

for i in range(5):
    ln = int(input('enter nums '))
    list1.append(ln)


for i in range(5):
    ln = int(input('enter nums '))
    list2.append(ln)

merged = list(zip(list1, list2))


print("List of tuples:", merged)