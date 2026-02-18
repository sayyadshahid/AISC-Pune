# Q2. Write python program to evaluate postfix expression using stack. 

def postfix(expression):
    stack = []
    for ch in expression:
        if ch.isdigit():
            stack.append(int(ch))

        else:
            op2 = stack.pop()
            op1 = stack.pop()

            if ch == "+":
                result = op1 + op2
            elif ch == "-":
                result = op1 - op2
            elif ch == "*":
                result = op1 * op2
            elif ch == "/":
                result = op1 / op2

            stack.append(result)
    return stack.pop()

pos = input("Enter postfix expression: ")

answer = postfix(pos)

print("Result =", answer)