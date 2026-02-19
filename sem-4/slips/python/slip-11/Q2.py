# Merge Sort in Ascending Order

def merge_sort(arr):
    n = len(arr)

    if n <= 1:
        return arr

    m = n // 2
    L = arr[:m]      
    R = arr[m:]     

    L = merge_sort(L)
    R = merge_sort(R)

    l, r = 0, 0
    sorted_arr = []

    while l < len(L) and r < len(R):
        if L[l] < R[r]:
            sorted_arr.append(L[l])
            l += 1
        else:
            sorted_arr.append(R[r])
            r += 1

    sorted_arr.extend(L[l:])
    sorted_arr.extend(R[r:])

    return sorted_arr


A = [-1, 2, 3, 4, 5, -9, 4, -2]
result = merge_sort(A)

print("Original:", A)
print("Sorted:", result)
