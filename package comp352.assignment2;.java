
import java.io.*;

public class StrInSort {

	static int decending4 = 0;
	static int reversals = 0;
	static int structuredCompares = 0;
	static int insertionCompares = 0;
	static int swaps = 0;
	
	public static void main(String[] args) {
		 
		// String fileName = "inputs1.txt"; //args[0];
		// int[] fileNums = readFile(fileName);

        int[] fileNums = {31, 84, 14, 10, 76, 38, 86, 49, 36, 99, 92, 20, 3, 63, 34};

        printArray(fileNums);
        
        structuredPass(fileNums);
        
        System.out.println("We sorted in DECR order");
        System.out.println("We counted " + decending4 + " DECR runs of length 4");
        System.out.println("We performed " + reversals + " reversals of runs in INC order");
        System.out.println("We performed " + structuredCompares + " compares during structuring");
        int[] temp = insertionSort(fileNums);
        System.out.println("We performed " + (insertionCompares + structuredCompares) + " compares overall");
        System.out.println("We performed " + swaps + " swaps overall");
        printArray(reverseArray(temp));
    }
		
	
	
	public static int[] insertionSort(int[] Arr) {
	    for (int i = 1; i < Arr.length; i++) {
	        int temp = Arr[i];
	        int current = i - 1;

	        while (current >= 0 && Arr[current] > temp) {
	            Arr[current + 1] = Arr[current];
	            current--;
	            swaps++;
	            insertionCompares++;
	            
	        }
	       
	        insertionCompares++;
	        Arr[current + 1] = temp;
	    }
	    return Arr;
	}
	
	public static int[] reverseArray(int[] arr) {
	    int start = 0;
	    int end = arr.length - 1;

	    while (start < end) {
	    	
	        int temp = arr[start];
	        arr[start] = arr[end];
	        arr[end] = temp;
	        start++;
	        end--;
	    }
		return arr;
		
	}

	
	public static void structuredPass(int[] arr) {
	    int skip = 0;
	    boolean countedDecreasingRun = false; // Flag to track if a decreasing run of length 4 has been counted

	    for (int i = 0; i < arr.length - 1; i += skip) {
	        int curr = i;
	        int next = i + 1;

	        if (arr[curr] < arr[next]) {
	            while (arr[curr] <= arr[next]) {
	                curr++;
	                next++;
	                structuredCompares++;
	            }

	            reverseRun(arr, i, next);
	        } else {
	            while (arr[curr] > arr[next]) {
	                curr++;
	                next++;
	                structuredCompares++;
	            }

	            if ((next - i == 4) && (arr[i] > arr[curr]) && !countedDecreasingRun) {
	                decending4++;
	                countedDecreasingRun = true; // Mark the decreasing run as counted
	            }

	            skip = next - i;
	        }
	    }
	}


	public static void reverseRun(int[] arr, int start, int end) {
	    reversals++;
	    
	    for (int curr = start, next = end - 1; curr <= next; curr++, next--) {
	        if (arr[curr] < arr[next]) {
	            swaps++;
	            int temp = arr[curr];
	            arr[curr] = arr[next];
	            arr[next] = temp;
	        }
	    }
	}


	
	
	public static int[] readFile(String filename) {
		
		BufferedReader br = null;
		String line;
		
		try {
			
			br = new BufferedReader(new FileReader(filename));
			line = br.readLine();
			String[] numStr = line.split(" ");
			int[] numArr = new int[numStr.length];
			
			for (int i = 0; i < numArr.length; i++) {
				numArr[i] = Integer.parseInt(numStr[i]);
			}
			
			return numArr;
		}
		catch (FileNotFoundException e) {
			System.out.println("File not found");
		}
		catch (IOException e) {
			e.printStackTrace();
		}
		return null;
	}
	
	
	public static void printArray(int[] arr) {
        for (int num : arr) {
            System.out.print(num + " ");
        }
        System.out.println();
    }
}
