// 5. Write Java program to accept a number from the command prompt and
// generate multiplication table of a number.
import java.util.Scanner;

class Main{
    public static void main(String[] args){
        Scanner sc = new Scanner(System.in);
        System.out.println("enter a number");
        int num = sc.nextInt();
       for(int i = 1; i<= 10; i++){
           int table = i * num;
           System.out.println(table);
       }
    }
}