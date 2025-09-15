class Teacher:
    def __init__(self, name, addr):
        self.name = name
        self.addr = addr
        
    def teacherDetails(self):
        print(f"name is {self.name} and address is {self.addr}")
        
class Staf(Teacher):
    def __init__(self, name, addr, sid, salary):
        super().__init__(name, addr)
        
        self.sid = sid
        self.salary = salary
        
    def stafDetail(self):
        print(f"name{self.name}, addr {self.addr}, staf id is {self.sid} and salary is {self.salary}")
        
s1 = Staf("shahid", "kond", "1", "50000")


st1 = s1.stafDetail()
td = s1.teacherDetails()
