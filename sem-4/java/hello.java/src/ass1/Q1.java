class Q1 {
    public static void main(String[] args) {

        int[] arr = {10, 20, 30, 40, 50};

        System.out.println("Array elements are:");
        int max = 0;

        for (int i = 0; i < arr.length; i++) {
            System.out.println(arr[i]);

            if (arr[i] > max) {
                max = arr[i];
            }
        }

        System.out.println("Maximum element is: " + max);
    }
}
