// 4. Write Java program to calculate reverse of a number (Accept a number
// from user).
import java.util.Scanner;

class Main{
    public static void main(String[] args){
        Scanner sc = new Scanner(System.in);
        System.out.println("enter a number");
        int num = sc.nextInt();
        int rev = 0;
        int digit = 0;
        while(num != 0 ){
            digit = num % 10;
            rev = rev * 10 + digit;
            num = num / 10;
        }
        System.out.println(rev);
    }
}