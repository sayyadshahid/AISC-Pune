# Q1. Write Python program to search element in an array using linear search algorithm in iterative
# manner.

def linearSearch(arr, x):
    for i in range(len(arr)):
        if arr[i] == x:
            print('element found', i)
            return
    print('element not found')

linearSearch([3,2,1,3,5,6,7,8], 8)