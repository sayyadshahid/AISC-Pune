// Implement Stack push and pop operations using interface

interface Stack{
    void push(int item);
    void pop();
}

class Operation implements Stack{
    int[] stack = new int [5];
    int top = -1;
    public void push(int item){
        if(top == stack.length -1){
            System.out.println("stack overflow");
        }else{
            stack[++top] = item;
            System.out.println(item);

        }
    }

    public void pop(){
        if(top == -1){
            System.out.println("stack under flow");

        }
        else{
            System.out.println(stack[--top]+"has been removed");
        }
    }
}


public class Main{
    public static void main(String[] args){
        Stack s = new Operation();
        s.push(50);
        s.push(40);
        s.push(30);
        s.push(20);
        s.push(10);
        s.pop();
        s.pop();
        s.pop();
    }
}