# Q1. Write Python program to sort numbers in ascending order using insertion sort [10]


def insertion_sort(arr):
    n = len(arr)
    for i in range(1, n):
        for j in range(i, 0, -1):
            if arr[j - 1] > arr[j]:
                arr[j -1], arr[j] = arr[j], arr[j-1]
            else:
                break

A = [1,2,3,6,4,3,8,9,0]
insertion_sort(A)
print(A)