# 2) Write python program to implement following operations or functions on stack
# using singly linked list.
#  Push
#  Pop
#  Peek
#  Print
#  Isempty()
#  Size of Stack.
# Driver code



class Node:
    def __init__(self, data):
        self.data = data
        self.next = None


class Stack:
    def __init__(self):
        self.top = None
        self.count = 0

    def Push(self, item):
        new_node = Node(item)
        new_node.next = self.top
        self.top = new_node
        self.count += 1

    def Pop(self):
        if self.isempty():
            print("Stack is empty")
        else:
            print("Popped:", self.top.data)
            self.top = self.top.next
            self.count -= 1

    def Peek(self):
        if self.isempty():
            print("Stack is empty")
        else:
            print("Top element:", self.top.data)

    def print_stack(self):
        if self.isempty():
            print("Stack is empty")
        else:
            temp = self.top
            print("Stack elements:")
            while temp:
                print(temp.data, end=" ")
                temp = temp.next
            print()

    def isempty(self):
        return self.top is None

    def size(self):
        print("Size of stack:", self.count)


s = Stack()
s.Push(5)
s.Push(15)
s.print_stack()
s.Pop()
s.Peek()
s.size()
