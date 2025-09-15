class Student:
    def __init__(self, rollno, name, age, gender):
        self.rollno = rollno
        self.name = name
        self.age = age
        self.gender = gender

class Test(Student):
    def __init__(self, rollno, name, age, gender, marks):
        super().__init__(rollno, name, age, gender)
        self.marks = marks

    def total_marks(self):
        return sum(self.marks)

    def percentage(self):
        return self.total_marks() / len(self.marks)

    def display(self):
        print(f"Roll No: {self.rollno}")
        print(f"Name: {self.name}")
        print(f"Age: {self.age}")
        print(f"Gender: {self.gender}")
        print(f"Marks: {self.marks}")
        print(f"Total Marks: {self.total_marks()}")
        print(f"Percentage: {self.percentage():.2f}%")
        print("-" * 30)

 
students = []
for i in range(3):
    rollno = input("Enter Roll No: ")
    name = input("Enter Name: ")
    age = int(input("Enter Age: "))
    gender = input("Enter Gender: ")
    marks = [int(input(f"Enter marks for subject {j+1}: ")) for j in range(3)]
    students.append(Test(rollno, name, age, gender, marks))

print("\nStudent Details:")
for s in students:
    s.display()
