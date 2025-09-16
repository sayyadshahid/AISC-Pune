# 3. Write a Python program to accept string and remove the characters which have odd index 
# values of a given string using a user defined function.

def odd_str(stre):
    result = ""
    for i in range(len(stre)):
        if i % 2 == 0:
            result += stre[i]
    return result

s = input('enter a str   ')

print(odd_str(s))