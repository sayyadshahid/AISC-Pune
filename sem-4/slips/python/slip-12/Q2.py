# Q2. Create Binary Search Tree, display In-order and count leaf nodes

class Node:
    def __init__(self,data):
        self.data = data
        self.right = None 
        self.left = None 



def insert(root, data):
    if root is None:
        return Node(data)
    
    if data <root.data:
        root.left = insert(root.left, data)
    else:
        root.right = insert(root.right, data)

    return root

def inOrder(root):
    if root:
        inOrder(root.left)
        print(root.data, end=" ")
        inOrder(root.right)

def count_root(root):
    if root is None:
        return 0 
    
    if root.left is None and root.left is None:
        return 1
    
    return count_root(root.left) + count_root(root.right)



root = None
arr = int(input("enter number"))


for i in range(arr):
    val = int(input("Enter value: "))
    root = insert(root, val)

inOrder(root)


leaf_count = count_root(root)
print("\nNumber of Leaf Nodes:", leaf_count)