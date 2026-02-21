// B. Write a program which defines class Product with data member as id, name and price.
// Store the information of 5 products and Display the name of product having minimum price
// (Use array of object).

class Product{
int id, price;
String name;

Product(int i, String n, int p){
id = i;
price = p;
name = n;
}

}

class Main{
    public static void main(String[] args){
        Product p[] = new Product[3];
        p[0] = new Product(1, "Pen", 10);
        p[1] = new Product(2, "Book", 50);
        p[2] = new Product(3, "Bag", 500);


        Product min = p[0];

        for(int i = 1; i < p.length; i++) {
            if(p[i].price < min.price) {
                min = p[i];
            }
        }

        System.out.println("Product with Minimum Price: " + min.name);
        System.out.println("Price: " + min.price);
    }

    
}