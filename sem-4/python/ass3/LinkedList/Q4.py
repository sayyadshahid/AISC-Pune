# 4) Write menu driven program for doubly circular linked list using python which contains option
# 1)append 2)insert first 3)insert last 4)insert at given position 5)display 6)search by value 7)delete
# first 8)delete last 9)delete by searching specific value


class Node:
    def __init__(self, data):
        self.data = data
        self.next = None
        self.prev = None


class DoublyCirculrLinkedList:
    def __init__(self):
        self.head = None 

    def append(self, item):
        new_node = Node(item)
        if self.head is None:
            self.head = new_node
            new_node.next = self.head
            new_node.prev = self.head
            return
        
        last = self.head.prev
        last.next = new_node
        new_node.prev = last

        new_node.next = self.head
        self.head.prev = new_node   

    def insert_first(self, item):
        new_node = Node(item)

        if self.head is None:
            self.head = new_node
            new_node.next = self.head
            new_node.prev = self.head
            return

        last = self.head.prev

        last.next = new_node
        new_node.prev = last
        new_node.next = self.head
        self.head.prev = new_node 
        self.head = new_node

    def search_val(self, val):
        if self.head is None:
            print("Node is empty")
            return
        
        temp = self.head
        pos = 1

        if self.head.data == val:
            print(f"Value {val} found at position {pos}")
            return
        
        
        pos += 1
        while temp.next != self.head:
            temp = temp.next
            if temp.data == val:
                print(f"Value {val} found at position {pos}")
                return
            pos += 1
        
        print("NOT FOUND")

    def delete_first(self):
        if self.head is None:
            print("node is empty")
            return
        
        if self.head.next == self.head:
            self.head = None
            return
        
        temp = self.head
        while temp.next != self.head:
            temp = temp.next

        last = self.head.prev
        new_head = self.head.next

        last.next = new_head
        new_head.prev = last
        self.head = new_head


    def delete_last(self):
        if self.head is None:
            print("node is empty")
            return
        
        if self.head.next == self.head:
            self.head = None
            return
        
        last = self.head.prev
        second_last = last.prev

        second_last.next = self.head
        self.head.prev = second_last

         
    def delete_by_val(self, val):
        if self.head is None:
            print("List is empty")
            return

        if self.head.next == self.head and self.head.data == val:
            self.head = None
            return

        if self.head.data == val:
            last = self.head.prev
            new_head = self.head.next

            last.next = new_head
            new_head.prev = last
            self.head = new_head
            return

        cur = self.head.next

        while cur != self.head:
            if cur.data == val:
                cur.prev.next = cur.next
                cur.next.prev = cur.prev
                return
            cur = cur.next

        print("Value not found")


    def display(self):
        if self.head is None:
            print("List is empty")
            return

        temp = self.head
        while True:
            print(temp.data, end=" <=> ")
            temp = temp.next
            if temp == self.head:
                break





c = DoublyCirculrLinkedList()

while True:
    print("\n1.Append")
    print("2.Insert First")
    print("3.Insert Last")
    print("4.Display")
    print("5.Search by Value")
    print("6.Delete First")
    print("7.Delete Last")
    print("8.Delete by Value")
    print("9.Exit")

    ch = int(input("Enter choice: "))

    if ch == 1:
        c.append(int(input("Enter value: ")))
    elif ch == 2:
        c.insert_first(int(input("Enter value: ")))
    elif ch == 3:
        c.append(int(input("Enter value: ")))
    elif ch == 4:
        c.display()
    elif ch == 5:
        c.search_val(int(input("Enter value: ")))
    elif ch == 6:
        c.delete_first()
    elif ch == 7:
        c.delete_last()
    elif ch == 8:
        c.delete_by_val(int(input("Enter value: ")))
    elif ch == 9:
        break
    else:
        print("Invalid choice")
