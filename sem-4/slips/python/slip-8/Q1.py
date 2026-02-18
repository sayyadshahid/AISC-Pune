# Q1. Write a Python program to sort numbers in descending order using insertion sort.  [10] 

def insertion_desc(arr):
    n = len(arr)

    for i in range(1, n):
        key = arr[i]
        j = i - 1

        while j>= 0 and  arr[j] < key:
            arr[j + 1] =  arr[j]
            j = j -1

        arr[j + 1] = key

a = [1,3,4,5,6,100,2,2,1]
insertion_desc(a)
print(a)