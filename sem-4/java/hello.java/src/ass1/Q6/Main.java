// 6. Write Java program to Find Factorial of a Given Number.
import java.util.Scanner;

class Main {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
            System.out.println("Enter a nu");
            
        int num = sc.nextInt();

        if (num < 0) {
            System.out.println("Negative number is not allowed");
            return;
        }

        int fact = 1;
        for (int i = 1; i <= num; i++) {
            fact = fact * i;
        }

        System.out.println(fact);
    }
}