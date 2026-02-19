# Q1. Write Python program to reverse sentence using stack 

def rev_sen(sen):
    stack = []

    words = sen.split()

    for w in words:
        stack.append(w)

    rev_sen = ""
    while stack:
        rev_sen += stack.pop() + " "

    return rev_sen.strip()

sentence = input("Enter a sentence: ")

result = rev_sen(sentence)

print("Reversed Sentence:", result)