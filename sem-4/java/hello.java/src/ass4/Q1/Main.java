// # 1. Create an abstract class Shape with methods area and volume. Derive a class Sphere
// # (radius).Calculate and display area and volume.

abstract class Shape {
    abstract void area();

    abstract void display();
}

class Sphere extends Shape {
    double radius;

    Sphere(double r) {
        radius = r;
    }

    void area() {
        double area = 4 * Math.PI * radius * radius;
        System.out.println(area);
    }

    void volume() {
        double volume = (4.0 / 3) * Math.PI * radius * radius * radius;
        System.out.println(volume);
    }

    void display() {
        System.out.println("Sphere with radius: " + radius);
    }

}

public class Main {
    public static void main(String[] args) {
 Sphere s = new Sphere(5);
 s.display();
 s.area();
 s.volume();
    }
}