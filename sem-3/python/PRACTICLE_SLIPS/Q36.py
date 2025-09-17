# 5. Create a class Student having members – rollno, name, age, gender accept n
# numbers of record from user. Create a subclass called―Test with member marks of 3 subjects. 
# Create three objects of
# the Test class and display all the details of the students with total marks

class Student:
    def __init__(self, rollno, name, age, gender):
        self.rollno = rollno
        self.name = name
        self.age = age
        self.gender = gender

    def display(self):
        print(f"Roll No: {self.rollno}, Name: {self.name}, Age: {self.age}, Gender: {self.gender}")


class Test(Student):
    def __init__(self, rollno, name, age, gender, m1, m2, m3):
        super().__init__(rollno, name, age, gender)
        self.m1 = m1
        self.m2 = m2
        self.m3 = m3

    def display(self):
        super().display()
        total = self.m1 + self.m2 + self.m3
        percentage = total / 3
        print(f"Marks: {self.m1}, {self.m2}, {self.m3}")
        print(f"Total: {total}, Percentage: {percentage:.2f}%")
        print("-" * 40)


# Main
students = []
for i in range(3):
    print(f"\nEnter details for Student {i+1}:")
    rollno = int(input("Enter Roll No: "))
    name = input("Enter Name: ")
    age = int(input("Enter Age: "))
    gender = input("Enter Gender: ")
    m1 = int(input("Enter Marks of Subject 1: "))
    m2 = int(input("Enter Marks of Subject 2: "))
    m3 = int(input("Enter Marks of Subject 3: "))
    students.append(Test(rollno, name, age, gender, m1, m2, m3))

print("\n--- Student Details ---")
for s in students:
    s.display()
