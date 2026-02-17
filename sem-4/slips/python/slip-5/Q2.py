# Q2. Write python program to implement static stack with following operations           [15]
# 1. PUSH 2. POP 3. DISPLAY


MAX = 5
stack = [0] * MAX
top = -1

def push():
    global top 
    if top == MAX -1:
        print("stack overflow")
    else:
        item = int(input("Enter element to push: "))
        top = top + 1
        stack[top] = item
        print(item)

def pop():
    if top == -1:
        print("stack under flow")
    else:
        print(stack[top], "poped")
        top = top - 1

def display():
    if top == -1:
        print("Stack is empty.")
    else:
        print("Stack elements are:")
        for i in range(top, -1, -1):
            print(stack[i])


while True:
    print("\n1. PUSH")
    print("2. POP")
    print("3. DISPLAY")
    print("4. EXIT")
    
    choice = int(input("Enter your choice: "))
    
    if choice == 1:
        push()
    elif choice == 2:
        pop()
    elif choice == 3:
        display()
    elif choice == 4:
        break
    else:
        print("Invalid choice!")