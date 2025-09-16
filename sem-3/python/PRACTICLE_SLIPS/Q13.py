# 4. Write a program to create tuple of n numbers, print the first half values of tuple in one line 
# and the last half values of tuple on next line(without Slicing)

n =int(input('enter numbers'))

nums = []

for i in range(n):
    num = int(input('enter numbers'))
    nums.append(num)

touple = tuple(nums)

mid = len(touple) // 2

for i in range (mid):
    print(touple[i], end=' ')

print()

for i in range(mid, len(touple)):
    print(touple[i],  end=' ')

    