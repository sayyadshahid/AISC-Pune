class Manager:
    def __init__(self, name, staffid, salary, bonus):
        self.name = name
        self.staffid = staffid
        self.salary = salary
        self.bonus = bonus

    def total_salary(self):
        return self.salary + self.bonus

    def display(self):
        print(f"Staff ID: {self.staffid}")
        print(f"Name: {self.name}")
        print(f"Salary: {self.salary}")
        print(f"Bonus: {self.bonus}")
        print(f"Total Salary: {self.total_salary()}")
        print("-" * 30)

 
n = int(input("Enter number of managers: "))
managers = []
for i in range(n):
    name = input("Enter name: ")
    staffid = input("Enter staff ID: ")
    salary = float(input("Enter salary: "))
    bonus = float(input("Enter bonus: "))
    managers.append(Manager(name, staffid, salary, bonus))

for m in managers:
    if m.total_salary > max_manager.total_salary:
        max_manager = m


print("\nManager with Maximum Total Salary:")
max_manager.display()
