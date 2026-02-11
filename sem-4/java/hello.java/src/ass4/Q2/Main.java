// 2. Define an interface “Operation” which has methods area(),volume(). Define a
// constant PI having value 3.142. Create a class circle (member – radius) which
// implements this interface. Calculate and display the area and volume.

interface Operatios {
    double PI = 3.142;

    void area();

    void volume();
}

class Circle implements Operatios {
    double radius;

    Circle(double r) {
        radius = r;
    }

    public void area() {
        double area = PI * radius * radius;
        System.out.println(area);
    }

    public void volume() {
        System.out.println("errrrrrrrrrrr");
    }

}

public class Main{
    public static void main(String[] args){
        Circle c = new Circle(5);
        c.area();
        c.volume();
    }
}