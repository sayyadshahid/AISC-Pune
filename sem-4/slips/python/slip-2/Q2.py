# Q2. Write Python program to implement following operations on Doubly Circular linked list.  [15] 
# 1. Append 2. Display 3. Delete Last

class Node:
    def __init__(self, data):
        self.data = data
        self.next = None
        self.pre = None
        
class DoublyCircularLinkedList:
    def __init__(self):
        self.head = None
        
    def append(self, item):
        new_node = Node(item)
        
        if self.head is None:
            self.head =new_node
            new_node.next = self.head
            new_node.pre = self.head
            return
        
        temp = self.head
        while temp.next != self.head:
            temp = temp.next
            
        temp.next = new_node
        new_node.next = self.head
        new_node.pre = temp.pre
    
    
    def delete_last(self):
        if self.head is None:
            print('Node is Already None')
            return
        temp = self.head
        while self.head.next != self.head:
            self.head = None
            return
        
        last = self.head.pre
        second_last = last.pre

        second_last.next = self.head
        self.head.pre = second_last
         
        

    def display(self):
        if self.head is None:
            print('The Node Is Empty')
        temp = self.head
        while True:
            print(temp.data, end= '->')
            temp = temp.next
            if temp == self.head:
                break
        print('(head)')
            
c = DoublyCircularLinkedList()
c.append(20)
c.append(40)
c.append(30)
c.delete_last()
c.display()
        