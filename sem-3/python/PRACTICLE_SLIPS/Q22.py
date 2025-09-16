# 13. Write python program to accept and print string in reverse order using function

def reverse_string(s):
    return s[::-1]   


text = input("Enter a string: ")

print("Reversed string:", reverse_string(text))
