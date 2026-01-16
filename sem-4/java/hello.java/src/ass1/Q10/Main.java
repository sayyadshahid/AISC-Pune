class Q10 {
    public static void main(String[] args) {

        System.out.println("Command line arguments in reverse order:");

        for (int i = args.length - 1; i >= 0; i--) {
            System.out.println(args[i]);
        }
    }
}
