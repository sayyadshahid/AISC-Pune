// 3. Write Java program to accept a number from user and calculate sum of
// digits.


import java.util.Scanner;

class Main{
    public static void main(String[] args){
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
}System.out.println("===========================");
        Scanner sc = new Scanner(System.in);
        int num = sc.nextInt();
        int sum = 0;
        int digit = 0;
        while (num != 0) {
            digit = num %  10;
            sum = sum + digit;
            num = num / 10;
            
        }
        System.out.println(sum + "===============");
    }
}