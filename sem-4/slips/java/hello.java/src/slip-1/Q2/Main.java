// B. Define a class MyNumber having one private integer data member. Write a default
// constructor initialize it to 0 and another constructor to initialize it to a value. Write methods
// isNegative, isPositive, isOdd, iseven. Use command line argument to pass a value to the
// object and perform the above operations.


class MyNumber{
    private int num;

    MyNumber(){
        num = 0;
    }

    MyNumber(int n){
        num = n;
    }


     void isPositive() {
        if(num > 0)
            System.out.println("Number is Positive");
        else
            System.out.println("Number is not Positive");
    }

    void isNegative() {
        if(num < 0)
            System.out.println("Number is Negative");
        else
            System.out.println("Number is not Negative");
    }

    void isEven() {
        if(num % 2 == 0)
            System.out.println("Number is Even");
        else
            System.out.println("Number is not Even");
    }

    void isOdd() {
        if(num % 2 != 0)
            System.out.println("Number is Odd");
        else
            System.out.println("Number is not Odd");
    }
}

class Main {
    public static void main(String[] args) {

        if(args.length == 0) {
            System.out.println("Please provide a number.");
            return;
        }

        int value = Integer.parseInt(args[0]);

        MyNumber m = new MyNumber(value);

        m.isPositive();
        m.isNegative();
        m.isEven();
        m.isOdd();
    }
}