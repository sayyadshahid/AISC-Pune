# 15. Program using anonymous function (lambda) for area & circumference of circle
import math
 
area = lambda r: 3.14 * r * r
circumference = lambda r: 2 * math.pi * r

r = float(input("Enter radius of circle: "))

print("Area of circle:", area(r))
print("Circumference of circle:", circumference(r))