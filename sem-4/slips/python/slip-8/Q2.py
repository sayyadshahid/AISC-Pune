# Q2. Write Python program to implement dynamic queue using linked list and 
# implement following operations:               
# 1. ENQUEUE 2. DEQUEUE 3. DISPLAY


class Node:
    def __init__(self, data):
        self.data = data
        self.next = None

class QueueLinkedList:
    def __init__(self):
        self.front = None
        self.rear = None
    
    def enqueue(self, item):
        new_node = Node(item)
        if self.rear is None:
            self.front = new_node
            self.rear = new_node
        else:
            self.rear.next = new_node
            self.rear = new_node
    
    def dequeue(self):
        if self.front is None:
            print("queue under flow")
            return
        
        temp = self.front
        print(temp.data, "is deleted")
        self.front = self.front.next

        if self.front is None:
            self.rear = None

    def display(self):
        temp = self.front

        while temp:
            print(temp.data, end=" ")
            temp = temp.next
        print()
    

s = QueueLinkedList()
s.enqueue(10)
s.enqueue(20)
s.enqueue(30)

s.dequeue()
s.display()