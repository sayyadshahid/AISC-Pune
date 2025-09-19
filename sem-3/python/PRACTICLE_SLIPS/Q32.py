# 1. Create a class Student having members – rollno, name, age, gender accept n numbers 
# of record from user. Create a subclass called―Test with member marks of 3 subjects. 
# Create three objects of the Test class and display all the details of the students with 
# total marks and percentage.


class Student:
    def __init__(self, rno, name, age, gender):
        self.rno = rno
        self.name = name
        self.age = age
        self.gender = gender
        
    def display(self):
        print(f"{self.rno}, {self.name}, {self.gender}, {self.age}")
        
class Test(Student):
    def __init__(self, rno, name, age, gender, m1, m2, m3):
        super().__init__(rno, name, age, gender)
        self.m1 = m1
        self.m2 = m2
        self.m3 = m3
        
    def display(self):
        super().display()
        total = self.m1 + self.m2 + self.m3
        percentage= total / 3
        print(total, percentage)
        
stus = []

for i in range(3):
    rollno = int(input("Enter Roll No: "))
    name = input("Enter Name: ")
    age = int(input("Enter Age: "))
    gender = input("Enter Gender: ")
    m1 = int(input("Enter Marks of Subject 1: "))
    m2 = int(input("Enter Marks of Subject 2: "))
    m3 = int(input("Enter Marks of Subject 3: "))
    
    student = Test(rollno, name, age, gender, m1, m2, m3)
    stus.append(student)
    
for s in stus:
    s.display()