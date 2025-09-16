# 11. Write a program to find the repeated items of a tuple.
 
t = (1, 2, 3, 4, 2, 7, 8, 3, 5, 1, 9, 2)

repeated = []

for item in t:
    if t.count(item) > 1 and item not in repeated:
        repeated.append(item)

print("Tuple:", t)
print("Repeated items:", repeated)
