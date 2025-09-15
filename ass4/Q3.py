class Person:
    def __init__(self, name, address):
        self.name = name
        self.address = address

class Employee(Person):
    def __init__(self, name, address, staffid, salary):
        super().__init__(name, address)
        self.staffid = staffid
        self.salary = salary

    def display(self):
        print(f"Staff ID: {self.staffid}")
        print(f"Name: {self.name}")
        print(f"Address: {self.address}")
        print(f"Salary: {self.salary}")
        print("-" * 30)

 
n = int(input("Enter number of employees: "))
employees = []
for i in range(n):
    name = input("Enter name: ")
    address = input("Enter address: ")
    staffid = input("Enter staff ID: ")
    salary = float(input("Enter salary: "))
    employees.append(Employee(name, address, staffid, salary))

print("\nEmployee Details:")
for emp in employees:
    emp.display()
