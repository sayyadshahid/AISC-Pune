# Q2. Write Python program to create binary search tree and display it in in-order and post-
# order fashion.
class Node:
    def __init__(self, data):
        self.data = data
        self.left = None
        self.right = None


def insert(root, data):
    if root is None:
        return Node(data)
    
    if data < root.data:
        root.left = insert(root.left, data)
    else:
        root.right = insert(root.right, data)
    
    return root


# In-order Traversal (Left → Root → Right)
def inorder(root):
    if root:
        inorder(root.left)
        print(root.data, end=" ")
        inorder(root.right)


# Post-order Traversal (Left → Right → Root)
def postorder(root):
    if root:
        postorder(root.left)
        postorder(root.right)
        print(root.data, end=" ")


# -------- MAIN PROGRAM --------

arr = [50, 30, 70, 20, 40, 60, 80]   # Static values

root = None

for value in arr:
    root = insert(root, value)

print("In-order Traversal:")
inorder(root)

print("\nPost-order Traversal:")
postorder(root)
