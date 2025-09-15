# 1. Write python program draw the following pattern:
# 1
# 2 3
# 4 5 6
# 7 8 9 10
# 11 12 13 14 15


n = 0
for i in range(1, 6):   
    for j in range(1, i + 1):   
        n += 1
        print(n, end=" ")
    print()   
