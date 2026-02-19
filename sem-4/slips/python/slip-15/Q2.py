# Q2. Write Python program to implement following operations on doubly linked list  
# 1. Append 2. Display 3. Search element 

 

class Node:
    def __init__(self, data):
        self.data = data
        self.prev = None
        self.next = None


class DoublyLinkedList:
    def __init__(self):
        self.head = None


    # 1. Append
    def append(self, data):
        new_node = Node(data)

        if self.head is None:
            self.head = new_node
            return

        temp = self.head
        while temp.next:
            temp = temp.next

        temp.next = new_node
        new_node.prev = temp


    # 2. Display
    def display(self):
        temp = self.head
        while temp:
            print(temp.data, end=" <-> ")
            temp = temp.next
        print("None")


    # 3. Search
    def search(self, key):
        temp = self.head
        position = 1

        while temp:
            if temp.data == key:
                print("Element found at position:", position)
                return
            temp = temp.next
            position += 1

        print("Element not found")



dll = DoublyLinkedList()

dll.append(10)
dll.append(20)
dll.append(30)
dll.append(40)

print("Doubly Linked List:")
dll.display()

dll.search(30)
