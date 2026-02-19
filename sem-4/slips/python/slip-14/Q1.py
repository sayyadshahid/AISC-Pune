# Q1. Write Python program to search element in an array using linear search algorithm in 
# iterative manner.


arr = [10, 25, 30, 45, 50]
key = 30    
found = False

for i in range(len(arr)):
    if arr[i] == key:
        print("Element found at index:", i)
        found = True
        break

if not found:
    print("Element not found")
