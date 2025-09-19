# 6. Define a class Employee having members – id, name, department, salary. Create a 
# subclass called ―Managerǁ with member bonus. Define methods accept and display 
# in both the classes


class Employee:
    def __init__(self):
        self.emp_id = 0
        self.name = ""
        self.department = ""
        self.salary = 0.0

    def accept(self):
        self.emp_id = int(input("Enter Employee ID: "))
        self.name = input("Enter Employee Name: ")
        self.department = input("Enter Department: ")
        self.salary = float(input("Enter Salary: "))

    def display(self):
        print(f"ID: {self.emp_id}, Name: {self.name}, Department: {self.department}, Salary: {self.salary}")


class Manager(Employee):
    def __init__(self):
        super().__init__()
        self.bonus = 0.0

    def accept(self):
        super().accept()
        self.bonus = float(input("Enter Bonus: "))

    def display(self):
        super().display()
        print(f"Bonus: {self.bonus}")


# --- Example usage ---
m = Manager()
m.accept()
print("\n--- Manager Details ---")
m.display()
