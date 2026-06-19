// B. Write a program to accept the user name and greet the user in uppercase.

import java.util.Scanner;

class Greeting
{
    public static void main(String args[])
    {
        Scanner sc = new Scanner(System.in);

        String name;

        System.out.print("Enter your name: ");
        name = sc.nextLine();

        name = name.toUpperCase();   // Convert to uppercase

        System.out.println("Hello, " + name + ", nice to meet you!");
    }
}