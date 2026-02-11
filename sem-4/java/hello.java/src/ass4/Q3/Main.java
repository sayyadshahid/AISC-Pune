// 3. Write a program to create a super class Employee (members – name, salary). Derive a
// sub- class as Developer (member – projectname). Create object of Developer and
// display the detail accordingly. (Use Concept of runtime polymorphism).

class Employee {
    String name;
    double salary;

    Employee(String n, double s) {
        name = n;
        salary = s;
    }

    void display() {
        System.out.println("name: " + name);
        System.out.println("salary: " + salary);
    }
}

class Developer extends Employee {
    String projectname;

    Developer(String n, double s, String p) {
        super(n, s);
        projectname = p;
    }

    void display(){
        super.display();
        System.out.println(projectname);
    }
}

public class Main{
    public static void main(String[] args){
        Employee e = new Developer("shahid", 2000, "panasonic");
        e.display();
    }
}