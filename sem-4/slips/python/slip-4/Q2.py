# Q2. Write Python program to implement following operations on doubly linked list.   
# [15] 1. Append 2. Display 3. Insert at position 

class Node:
    def __init__(self, data):
        self.data = data
        self.next = None
        self.prev = None

class DoublyLinkedList:
    def __init__(self):
        self.head = None

    def append(self, item):
        new_node = Node(item)
        if self.head is None:
            self.head = new_node
            return

        temp = self.head
        while temp.next:
            temp = temp.next

        temp.next = new_node
        temp.prev = temp


    def insert_at_position(self, item, position):
        new_node = Node(item)

        if position == 1:
            new_node.next = self.head
            if self.head is not None:
                self.head.prev = new_node
            self.head = new_node
            return

        temp = self.head
        count = 1

        while temp is not None and count < position - 1:
            temp = temp.next
            count += 1

        if temp is None:
            print("Position out of range")
            return

        new_node.next = temp.next    
        new_node.prev = temp        

        if temp.next is not None:
            temp.next.prev = new_node

        temp.next = new_node


    def display(self):
        temp = self.head
        while temp:
            print(temp.data, end="=>")
            temp = temp.next
        print("None")    



c = DoublyLinkedList()
c.append(40)
c.append(20)
c.append(10)
c.display()