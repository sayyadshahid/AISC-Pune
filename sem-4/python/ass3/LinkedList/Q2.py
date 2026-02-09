# 2) Write menu driven program for singly circular list using python which contains option
# 1)append 2)insert first 3)insert last 4)insert at given position 5)display 6)search by value 7)delete
# first 8)delete last 9)delete by searching specific value


class Node:
    def __init__(self, data):
        self.data = data 
        self.next = None 

class SinglyCircular:
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

    def insert_first(self, item):
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
        self.head = new_node
    def insert_last(self, item):
        self.append(item)

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
        
        temp.next = self.head.next
        self.head = self.head.next

    def delete_last(self):
        if self.head is None: 
            print("node is empty")
            return
        if self.head.next == self.head:
            self.head = None
            return
        temp = self.head
        while temp.next.next != self.head:
            temp = temp.next
        
        temp.next = self.head
    def delete_by_val(self, val):
        if self.head is None:
            print("this list is empty")
            return
        
        if self.head.next == self.head and self.head.data == val:
            self.head = None
            return
        
        if self.head.data == val:
            temp = self.head
            while temp.next != self.head:
                temp = temp.next

            temp.next = self.head.next
            self.head = self.head.next
            return
        
        prev = self.head
        cur = self.head.next

        while cur != self.head:
            if cur.data == val:
                prev.next = cur.next
                return
            prev = cur
            cur = cur.next
        
        print("Vslue is Not Found")

        
    def display(self):
        temp = self.head
        while True:
            print(temp.data, end="=>")
            temp = temp.next
            if temp == self.head:
                break
        
s = SinglyCircular()
s = SinglyCircular()

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
        s.append(int(input("Enter value: ")))
    elif ch == 2:
        s.insert_first(int(input("Enter value: ")))
    elif ch == 3:
        s.insert_last(int(input("Enter value: ")))
    elif ch == 4:
        s.display()
    elif ch == 5:
        val = int(input("Enter value: "))
        print("Found" if s.search(val) else "Not Found")
    elif ch == 6:
        s.delete_first()
    elif ch == 7:
        s.delete_last()
    elif ch == 8:
        s.delete_by_val(int(input("Enter value: ")))
    elif ch == 9:
        break
    else:
        print("Invalid choice")
