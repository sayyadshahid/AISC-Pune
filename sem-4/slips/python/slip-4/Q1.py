# Q1. Write recursive python program to search element in an array using binary search algorithm.
def rec_binary(arr, x, high, low):
        mid = (low + high) // 2

        if arr[mid] == x:
            return mid
        elif arr[mid] > x:
            return rec_binary(arr, x, mid-1, low)
        else:
            return rec_binary(arr, x, high, mid +1)
    
arr = [1,23,4,5,6]
print(rec_binary(arr, 5, len(arr)-1, 0))

