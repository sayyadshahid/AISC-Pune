# Q1. Write Python program to search element in an array using binary search algorithm in 
# iterative manner. 



def binary_search(arr, x):
    low = 0
    high = len(arr) - 1

    while low <= high:
        mid = (low + high) // 2

        if arr[mid] == x:
            print("Element found at index:", mid)
            return
        elif arr[mid] < x:
            low = mid + 1
        else:
            high = mid - 1

    print("Element not found")



arr = [10, 20, 30, 40, 50, 60, 70]    
x = 40

result = binary_search(arr, x)

