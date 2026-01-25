#  Q1. Write recursive python program to search element in an array using linear search algorithm.  [10] 

def recLinearSear(arr, x, i=0):
    if len(arr) == 0:
        print("arr is empty now")
        return
    
    if i == len(arr):
        print("element is not found")
        return

    if arr[i] == x:
        print("found: ", i)
        return
        
    
    recLinearSear(arr, x, i +1)

recLinearSear([1,3,4,5,7,8,4], 9)