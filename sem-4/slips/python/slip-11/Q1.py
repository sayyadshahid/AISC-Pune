# Q1. Write Python program to create doubly circular linked list and display it.   [10]

class Node:
    def __init__(self, data):
        self.data =  data
        self.next = None
        self.prev = None 

class DoublyCircuar:
    def __init__(self):
        self.head = None

    def insert(self, item):
        new_node = Node(item)
        
        if self.head is None:
            new_node.next = new_node
            new_node.prev = new_node
            self.head = new_node

            return

        last = self.head.prev

        new_node.next = self.head
        new_node.prev = last

        last.next = new_node
        self.head.prev = new_node
        self.head = new_node

    def display(self):
        temp = self.head
        while True:
            print(temp.data, end="<=> ")
            temp = temp.next
            if temp == self.head:
                break
        print("(head)")


s = DoublyCircuar()
s.insert(10)
s.insert(10)
s.insert(10)
s.insert(10)
s.display()
    