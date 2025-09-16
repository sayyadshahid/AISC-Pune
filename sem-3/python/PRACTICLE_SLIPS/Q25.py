# 16. Accept 10 numbers, display sum of odd and even numbers
nums = []

print("Enter 10 numbers:")
for i in range(10):
    num = int(input(f"Number {i+1}: "))
    nums.append(num)

sum_even = 0
sum_odd = 0

for n in nums:
    if n % 2 == 0:
        sum_even += n
    else:
        sum_odd += n

print("Sum of even numbers:", sum_even)
print("Sum of odd numbers:", sum_odd)