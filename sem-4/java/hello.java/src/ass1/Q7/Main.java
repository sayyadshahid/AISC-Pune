// 7. Write Java Program to print sum of first n numbers
import java.util.Scanner;
class Main{
    public static void main(String[] args){
        Scanner sc = new Scanner(System.in);
        System.out.println("enter a number");
        int num = sc.nextInt();
        int sum = 0;
        int digit = 0;
    
        while(num != 0){
            digit = num % 10;
            sum = num + digit;
            num = num / 10;
        }
        System.out.println(sum);
    }
}