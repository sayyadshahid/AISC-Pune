
# 3. Define a class Person having members – name, address.
# Create a subclass called Employee with member staffid,, 
# salary. Create ‘n’ objects of the Employee class and display all the details of the Employee.

class Person:
    def __init__(self, name, address):
        self.name = name
        self.address = address

    def display(self):
        print(f"Name: {self.name}, Address: {self.address}")


class Employee(Person):
    def __init__(self, name, address, staffid, salary):
        super().__init__(name, address)
        self.staffid = staffid
        self.salary = salary

    def display(self):
        super().display()
        print(f"Staff ID: {self.staffid}, Salary: {self.salary}")
        print("-" * 40)


# Main
n = int(input("Enter number of Employees: "))
employees = []

for i in range(n):
    print(f"\nEnter details for Employee {i+1}:")
    name = input("Enter Name: ")
    address = input("Enter Address: ")
    staffid = int(input("Enter Staff ID: "))
    salary = float(input("Enter Salary: "))
    employees.append(Employee(name, address, staffid, salary))

print("\n--- Employee Details ---")
for e in employees:
    e.display()
