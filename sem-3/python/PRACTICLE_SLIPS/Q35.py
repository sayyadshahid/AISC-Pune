#  4. Define  a  class  Employee  having  members  –  id,  name,  department,  salary.  Create  a 
# subclass called ―Manager with member bonus. Define methods accept and display in 
# both the classes. Create n objects of the Manager class and display the details of the 
# manager having the maximum total salary (salary + bonus). 



class Employee:
    def __init__(self):
        self.id = 0
        self.name = ""
        self.department = ""
        self.salary = 0.0

    def accept(self):
        self.id = int(input("Enter Employee ID: "))
        self.name = input("Enter Name: ")
        self.department = input("Enter Department: ")
        self.salary = float(input("Enter Salary: "))

    def display(self):
        print(f"ID: {self.id}, Name: {self.name}, Department: {self.department}, Salary: {self.salary}")


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
        total = self.salary + self.bonus
        print(f"Total Salary (Salary + Bonus): {total}")
        print("-" * 40)
        return total  

# Main program
n = int(input("Enter number of managers: "))
managers = []

for i in range(n):
    print(f"\nEnter details for Manager {i+1}:")
    m = Manager()
    m.accept()
    managers.append(m)

max_manager = managers[0]
max_total = managers[0].salary + managers[0].bonus

for m in managers[1:]:
    total = m.salary + m.bonus
    if total > max_total:
        max_total = total
        max_manager = m

print("\n--- Manager with Maximum Total Salary ---")
max_manager.display()
# ??//
