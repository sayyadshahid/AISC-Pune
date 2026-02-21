
// A. Write Java Program to calculate addition of all elements in an array.
 class Main {
    public static void main(String[] args){
        int[] arr = {10,10};
        int sum =0;
        for(int i = 0; i < arr.length; i++){
            sum += arr[i];
        }
        System.out.println(sum);
    }
}
