class Queue:
    def __init__(self):
        self.queue = []

    def enqueue(self, item):
        self.queue.append(item)
        print(item, "inserted")

    def dequeue(self):
        if self.isempty():
            print("Queue is empty")
        else:
            print("Deleted:", self.queue.pop(0))

    def peek(self):
        if self.isempty():
            print("Queue is empty")
        else:
            print("Front:", self.queue[0])

    def print_queue(self):
        print("Queue:", self.queue)

    def isempty(self):
        return len(self.queue) == 0

    def size(self):
        print("Size:", len(self.queue))


q = Queue()
q.enqueue(10)
q.enqueue(20)
q.print_queue()
q.dequeue()
q.peek()
q.size()
