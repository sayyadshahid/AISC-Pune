# Q2. Write Python program to implement following operations on singly circular linked list. [15]
# 1. Append
# 2. Display
# 3. Insert First



class Node:
    def __init__(self, data):
        self.data =  data
        self.next = None

class signCircularLink:
    def __init__(self):
        self.head = None
    
    def append(self, item):
        new_node = Node(item)
        
        if self.head is None:
            self.head = new_node
            new_node.next = self.head
            return

        temp = self.head
        while temp.next != self.head:
            temp = temp.next

        temp.next = new_node
        new_node.next = self.head
        return 
    
    def insert_begin(self, item):
        new_node = Node(item)

        if self.head is  None:
            self.head = new_node
            new_node.next = self.head
            return

        temp = self.head
        while temp.next != self.head:
            temp = temp.next
        
        new_node.next = self.head
        temp.next = new_node
        self.head = new_node

    def display(self):
        if self.head is None:
            print("List is empty")
            return

        temp = self.head
        while True:
            print(temp.data, end=" -> ")
            temp = temp.next
            if temp == self.head:
                break
        print("(head)")

c = signCircularLink()
c.append(50)
c.append(30)
c.append(20)
c.insert_begin(10)
c.display()