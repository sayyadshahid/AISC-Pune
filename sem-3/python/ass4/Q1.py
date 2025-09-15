class Student:
    def __init__(self, rollno, name, age, gender):
        self.rollno = rollno
        self.name = name
        self.age = age
        self.gender = gender

    def display(self):
        print(f"Roll No: {self.rollno}")
        print(f"Name: {self.name}")
        print(f"Age: {self.age}")
        print(f"Gender: {self.gender}")


class Test(Student):
    def __init__(self, rollno, name, age, gender, m1, m2, m3):
        super().__init__(rollno, name, age, gender)
        self.m1 = m1
        self.m2 = m2
        self.m3 = m3
        self.total = m1 + m2 + m3
        self.percentage = self.total / 3

    def display(self):
        super().display()
        print(f"Marks: {self.m1}, {self.m2}, {self.m3}")
        print(f"Total Marks: {self.total}")
        print(f"Percentage: {self.percentage:.2f}%")
        print("------------------------------------------" )

 
students = []
for i in range(int(input("Enter number of students: "))):
    print(f"\nEnter details for Student {i+1}")
    rollno = int(input("Enter Roll No: "))
    name = input("Enter Name: ")
    age = int(input("Enter Age: "))
    gender = input("Enter Gender: ")
    m1 = int(input("Enter Marks of Subject 1: "))
    m2 = int(input("Enter Marks of Subject 2: "))
    m3 = int(input("Enter Marks of Subject 3: "))

    students.append(Test(rollno, name, age, gender, m1, m2, m3))
 
print("\n=== Student Details with Marks ===")
for s in students:
    s.display()
