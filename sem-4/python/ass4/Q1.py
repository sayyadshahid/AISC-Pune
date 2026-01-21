# 1) Write python program to implement following operations or functions on stack
# using python list and class.
#  Push
#  Pop
#  Peek
#  Print
#  Isempty()
#  Size of Stack.

class Stacks:
    def __init__(self):
        self.stack = []
    
    def Push(self, item):
        self.stack.append(item)
        print(item, 'pushed')
    
    def Pop(self):
        if len(self.stack) == 0:
            print("Stack is empty")

        else:
            print("last item is removed", self.stack.pop())
    
    def Peek(self):
        print(self.stack[-1], "=========")

    def Len(self):
       return print(len(self.stack))
    
    def Display(self):
       return print(self.stack, "===========display=========")
    
s = Stacks()
s.Push(29)
s.Push(39)
s.Push(59)
s.Push(69)
s.Push(89)

s.Pop()
s.Peek()
s.Display()