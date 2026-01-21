# 5) Write Python Program to reverse each word of sentence using stack.

def reverse_sentence(sen):
    stack = []
    result = ""

    for ch in sen:
        if ch != " ":
            stack.append(ch)
        else:
            while stack:
                result += stack.pop()
            result += ' '

    while stack:
        result += stack.pop()
    
    return  result



a = reverse_sentence("Hello World")

print(a)