# Q1. Write Python program to create singly linked list and display it.   [10]

class Node:
    def __init__(self, data):
        self.data =  data
        self.next = None

class SinglyLinkedList:
    def __init__(self):
        self.head = None

    def insert(self, item):
        new_node = Node(item)

        new_node.next = self.head
        self.head = new_node

    def display(self):
        temp = self.head
        while temp:
            print(temp.data, end="-> ")
            temp = temp.next
        print("(None)")


s = SinglyLinkedList()
s.insert(1)
s.insert(2)
s.insert(3)

s.display()