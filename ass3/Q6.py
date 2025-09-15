class Employee:
    def __init__(self):
        self.id = None
        self.name = None
        self.department = None
        self.salary = None

    def accept(self):
        self.id = input("Enter Employee ID: ")
        self.name = input("Enter Employee Name: ")
        self.department = input("Enter Department: ")
        self.salary = float(input("Enter Salary: "))

    def display(self):
        print(f"\nEmployee ID: {self.id}")
        print(f"Employee Name: {self.name}")
        print(f"Department: {self.department}")
        print(f"Salary: {self.salary}")

class Manager(Employee):
    def __init__(self):
        super().__init__()
        self.bonus = None

    def accept(self):
        super().accept()   
        self.bonus = float(input("Enter Bonus: "))

    def display(self):
       
        super().display() 
        print(f"Bonus: {self.bonus}")

# Create an Employee object
employee = Employee()
employee.accept()  # Accepting employee details
employee.display()  # Displaying employee details

# Create a Manager object
manager = Manager()
manager.accept()  # Accepting manager details
manager.display()  # Displaying manager details
