# 5. Write  a  program  which  accepts  10  integers  and  prints  "DUPLICATES"  if  any  of  the 
# values entered are duplicates otherwise prints "ALL UNIQUE".


nums = []

for i in range(10):
    n = int(input('enter 10 numbers'))
    nums.append(n)

if len(nums) != len(set(nums)):
    print('dupicate')
else:
    print('all uniq')

    