# Q2. Write Python program to implement dynamic stack using linked list ti implement 
# following operations:                 [15] 
# 1. PUSH 2. POP 3. DISPLAY



class Node:
    def __init__(self, data):
        self.data = data 
        self.next = None 

class StackLinkedList:
    def __init__(self):
        self.top = None

    def push(self, item):
        new_node = Node(item)
        new_node.next = self.top
        self.top = new_node
    def pop(self):
        if self.top is None:
            print("Stack is empty")
            return

        temp = self.top 
        print(temp.data, "pop")
        self.top = self.top.next

    def display(self):
        temp = self.top 
        print("Stack elements are:")
        while temp:
            print(temp.data)
            temp = temp.next
        print()


s = StackLinkedList()
s.push(10)
s.push(20)
s.push(30)
s.push(50)
s.pop()
s.display()