// A. Write Java Program find maximum element of an array.
// (Take Input as Command line argument)

public class Main {
    public static void main(String[] args) {

        if(args.length == 0){
            System.out.println("Please provide numbers.");
            return;
        }

        int max = Integer.parseInt(args[0]);

        for(int i = 1; i < args.length; i++){
            int num = Integer.parseInt(args[i]);

            if(num > max){
                max = num;
            }
        }

        System.out.println("Maximum element = " + max);
    }
}