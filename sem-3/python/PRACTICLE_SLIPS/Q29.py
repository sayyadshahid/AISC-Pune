# 4. Define  a  class  Teacher  having  members  –  name,  address.  Create  a  subclass 
# called―Staff with member staffid, salary. Create three objects of the staff class and 
# display all the details of the Staff.


class Teacher:
    def __init__(self, name, addr):
        self.name = name
        self.addr = addr

    def detail(self):
        print(self.name, self.addr)

class Staff(Teacher):
    def __init__(self, name, addr, s_id, salary):
        super().__init__(name, addr)
        self.s_id = s_id
        self.salary = salary

    def display(self):
        print(f"{self.detail()}, {self.s_id} and {self.salary}")


s1 = Staff("Rahul Sharma", "Delhi", 101, 40000)
s2 = Staff("Anita Mehra", "Mumbai", 102, 45000)
s3 = Staff("Vikas Singh", "Kolkata", 103, 42000)

# --- Display details ---
s1.display()
s2.display()
s3.display()