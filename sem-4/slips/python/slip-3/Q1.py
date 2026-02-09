# Q1. Write Python program to search element in an array using binary search algorithm in iterative 
# manner. 


def binary_serach(arr, x):
    low = 0
    high = len(arr)
    
    while low <= high:
        mid = (low + high) // 2
        if arr[mid] == x:
            return mid
        elif x < arr[mid]:
            high = mid -1
            
        else:
            low = mid + 1
            
    return -1

arr = [1,3,5,6,8,5,3,21]
x = 21
print(binary_serach(arr, x))
