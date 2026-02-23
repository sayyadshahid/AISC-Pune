# Q2. Write Python program to implement following operations on singly linked list.   
# [15] 1. Append 2. Display 3. Insert at position 

class Node:
    def __init__(self, data):
        self.data = data
        self.next = None
        
        
class SignlyLinkedList:
    def __init__(self):
        self.head = None
        
    def append(self, item):
        new_node = Node(item)
        if self.head is None:
            self.head = new_node
            return 
        
        temp = self.head
        while temp.next is not None:
            temp = temp.next
            
        temp.next = new_node
    def insert_by_pos(self, item, pos):
        new_node = Node(item)
        if pos == 1:
            self.head = new_node
            new_node.next = self.head
            return
        temp = self.head
        for i in range(pos - 2):
            if temp is None:
                print("out of range")
                return
            temp = temp.next
        
        new_node.next = temp.next
        temp.next = new_node
            
            
        
    def display(self):
        if self.head is None:
            print("List is empty")
            return

        temp = self.head
        while temp is not None:
            print(temp.data, end=" -> ")
            temp = temp.next
        print("NULL")
            
        
c = SignlyLinkedList()

c.append(10)
c.append(15)
c.append(12)
c.insert_by_pos(2,3)
c.display()