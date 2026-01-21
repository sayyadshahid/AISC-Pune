// 3. Write Java program to accept a number from user and calculate sum of
// digits.

        // 4. Write Java program to calculate reverse of a number (Accept a number
// from user).
import java.util.Scanner;

class Main{
    public static void main(String[] args){
      
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