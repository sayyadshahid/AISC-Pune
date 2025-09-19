# 5. Write a python program to create class family. Also perform subclass using
#  multilevelinheritance. Accept and display the details of class.

class Family:
    def __init__(self):
        self.family_name = ""

    def accept(self):
        self.family_name = input("Enter Family Name: ")

    def display(self):
        print("Family Name:", self.family_name)


class Parent(Family):
    def __init__(self):
        super().__init__()
        self.parent_name = ""

    def accept(self):
        super().accept()
        self.parent_name = input("Enter Parent Name: ")

    def display(self):
        super().display()
        print("Parent Name:", self.parent_name)


class Child(Parent):
    def __init__(self):
        super().__init__()
        self.child_name = ""

    def accept(self):
        super().accept()
        self.child_name = input("Enter Child Name: ")

    def display(self):
        super().display()
        print("Child Name:", self.child_name)


# --- Example usage ---
c = Child()
c.accept()
print("\n--- Family Details ---")
c.display()
