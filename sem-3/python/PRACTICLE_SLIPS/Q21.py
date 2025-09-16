# 12. Write a program which checks whether an element exists within a tuple
 
t = (10, 20, 30, 40, 50, 60)
 
element = int(input("Enter element to search: "))

if element in t:
    print("exists in the tuple.")
else:
    print("does not exist in the tuple.")
