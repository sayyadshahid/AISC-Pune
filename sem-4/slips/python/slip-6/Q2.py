# Q2. Write python program to implement static queue with following operations  [15]      
#   1. ENQUEUE 2. DEQUEUE 3. DISPLAY

MAX = 5
queue = [0] * MAX
front = -1
rear = -1

def enqueue():
    global front, rear
    if rear == MAX -1:
        print("queue over flow")

    else:
        value = int(input("enter a number "))

        if front == -1:
            front = 0

        rear = rear + 1
        queue[rear] = value
        print(value)

def dequeue():
    global front, rear
    if front == -1 or front > rear:
        print("stack under flow")

    else:
        print(queue[rear])
        front = front + 1

def display():
    if front == -1 or front > rear:
        print("Queue is empty.")
    else:
        print("Queue elements are:")
        for i in range(front, rear + 1):
            print(queue[i], end=" ")
        print()
while True:
    print("\n1.ENQUEUE  2.DEQUEUE  3.DISPLAY  4.EXIT")
    choice = int(input("Enter choice: "))

    if choice == 1:
        enqueue()

    elif choice == 2:
        dequeue()

    elif choice == 3:
        display()

    elif choice == 4:
        print("Exiting...")
        break

    else:
        print("Invalid choice!")
