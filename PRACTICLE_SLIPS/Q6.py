# 6. Write a program to accept a number n , and display the following pattern (Floyd's triangle)n=3

# 1
# 2 3
# 4 5 6


n = int(input('inter a num'))
y = 1
for i in range(1, n+1):
    for j in range(i):
        print(y ,end=" ")
        y +=1
    print()