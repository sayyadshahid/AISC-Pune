# 8. Write a python program to find palindrome number using function

n = input('enter a number')

revn = n[::-1]

if n == revn:
    print('pali')

else:
    print('not palidrome')