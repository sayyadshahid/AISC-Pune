# 7) Write python program to implement following operations or functions on queue
# using singly linked list.
#  Insert (Enqueue)
#  Delete (Dequeue)
#  Peek
#  Print
#  Isempty()
#  Size of queue

class Node:
    def __init__(self, data):
        self.data = data
        self.next = None

class Queue:
    def __init__(self):
        self.front = None
        self.rear = None
        self.count = 0
    
    def enqueue(self, item):
        new_node = Node(item)
        if self.rear is None:
            self.front = self.rear = new_node

        else:
            self.rear.next = new_node
            self.rear = new_node
        self.count += 1

    def dequeue(self):
        if self.isempty():
            print("queue is empty")

        else:
            print("deleted: ", self.front.data)
            self.front = self.front.next
            if self.front is None:
                self.rear = None
            self.count -= 1

    def peek(self):
        if self.isempty():
            print("queue is empty")
        
        else:
            print("Front element:", self.front.data)
            
    def print_queue(self):
        temp = self.front
        while temp:
            print(temp.data, end=" ")
            temp = temp.next
        print( )

    def isempty(self):
        return self.front is None

    def size(self):
        print("Size:", self.count)


q = Queue()
q.enqueue(1)
q.enqueue(2)
q.print_queue()
q.dequeue()
q.peek()
q.size()