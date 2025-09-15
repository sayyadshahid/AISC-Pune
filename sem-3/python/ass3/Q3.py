class Shape:
    def Area():
        print("area")
        
    def Volumn():
        print("length")
        
        
class Square(Shape):
    def __init__(self, length):
         self.length = length
         
    def Area(self):
        area = self.length ** 2
        print(f"area of square{area}")
    
    def Volumn(self):
        print("no volumn")


     
class Circle(Shape):
    def __init__(self, r):
         self.r = r
         
    def Area(self):
        area = 3.14 * self.r ** 2
        print(f"area of square{area}")
    
    def Volumn(self):
        print("no volumn")
        
        
sq = Square(9)

sq.Area()