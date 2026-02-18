# Q1. Write Python program to sort elements in descending order using bubble sort.       [10]   


def bubble_sort(arr):
    n = len(arr)
    flag = True
    while flag:
        flag = False
        for i in range(1, n):
            if arr[i-1] < arr[i]:
                arr[i-1], arr[i] = arr[i], arr[i-1]
                flag = True
    return arr

a = bubble_sort([1,2,3,4,7,5])
print(a)
