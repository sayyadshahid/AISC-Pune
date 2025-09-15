class Employee:
    def __init__(self, emp_id, name, department, salary):
        self.emp_id = emp_id
        self.name = name
        self.department = department
        self.salary = salary

    def display(self):
        print(f"Employee ID: {self.emp_id}")
        print(f"Name: {self.name}")
        print(f"Department: {self.department}")
        print(f"Salary: {self.salary}")


class Manager(Employee):
    def __init__(self, emp_id, name, department, salary, bonus):
        super().__init__(emp_id, name, department, salary)
        self.bonus = bonus
        self.total_salary = salary + bonus

    def display(self):
        super().display()
        print(f"Bonus: {self.bonus}")
        print(f"Total Salary: {self.total_salary}")
        print("-" * 40)

 
n = int(input("Enter number of Managers: "))
managers = []

for i in range(n):
    print(f"\nEnter details for Manager {i+1}")
    emp_id = int(input("Enter Employee ID: "))
    name = input("Enter Name: ")
    dept = input("Enter Department: ")
    salary = float(input("Enter Salary: "))
    bonus = float(input("Enter Bonus: "))

    managers.append(Manager(emp_id, name, dept, salary, bonus))
 
  
max_manager = managers[0]

for m in managers:
    if m.total_salary > max_manager.total_salary:
        max_manager = m



print("\n=== Details of All Managers ===")
for m in managers:
    m.display()

print("\n=== Manager with Maximum Total Salary ===")
max_manager.display()
