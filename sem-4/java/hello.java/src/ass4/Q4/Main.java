// 4. Create an abstract class “order” having members id, description. Create a subclass
// “Purchase Order” having member as customer name. Define methods accept and
// display. Create 3 objects each of Purchase Order. Accept and display the details.

import java.util.Scanner;

abstract class Order {
    int id;
    String description;

    abstract void accept();

    abstract void display();
}

class PurchaseOrder extends Order {
    String customerName;
    Scanner sc = new Scanner(System.in);

    void accept() {
        System.out.println("enter Order id");
        id = sc.nextInt();
        sc.nextLine();

        System.out.println("enter Description");
        description = sc.nextLine();

        System.out.println("enter customer name");
        customerName = sc.nextLine();
    }

    void display() {
        System.out.println("\nOrder ID: " + id);
        System.out.println("Description: " + description);
        System.out.println("Customer Name: " + customerName);
    }
}

public class Main{
    public static void main(String[] arg){
        PurchaseOrder[] po = new PurchaseOrder[3];

        for (int i = 0; i<3; i++){
            po[i]= new PurchaseOrder();
            po[i].accept();
        }

        for (int i=0; i<3; i++){
            po[i].display();
        }
    }
}