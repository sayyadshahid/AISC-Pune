# Q1. Write a Python program to sort numbers in ascending order using bubble sort.

arr = [5, 3, 8, 4, 2]

n = len(arr)

for i in range(n):
    for j in range(0, n - i - 1):
        if arr[j] > arr[j + 1]:
            # Swap
            arr[j], arr[j + 1] = arr[j + 1], arr[j]

print("Sorted array in ascending order:")
print(arr)
