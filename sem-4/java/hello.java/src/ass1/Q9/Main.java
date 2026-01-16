import java.util.Scanner;

class Q9 {
    public static void main(String[] args) {

        Scanner sc = new Scanner(System.in);

        System.out.print("Enter number of family members: ");
        int n = sc.nextInt();

        int[] age = new int[n];

        for (int i = 0; i < n; i++) {
            System.out.print("Enter age of member " + (i + 1) + ": ");
            age[i] = sc.nextInt();
        }

        int eldest = age[0];
        int youngest = age[0];

        for (int i = 1; i < n; i++) {
            if (age[i] > eldest)
                eldest = age[i];
            if (age[i] < youngest)
                youngest = age[i];
        }

        System.out.println("Eldest age: " + eldest);
        System.out.println("Youngest age: " + youngest);
    }
}
