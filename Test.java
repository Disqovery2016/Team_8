/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package test;

/**
 *
 * @author ARUN
 */
import java.util.Scanner;
public class Test {
   public static int letter_c=0;
     static final String[] letters = {
            "0", "1", "ABC", "DEF", "GHI", "JKL", "MNO", "PQRS", "TUV", "WXYZ"
    };
     static char getChar(int digit, int count) {
        while (count > letters[digit].length()) {
            count -= letters[digit].length();
        }
        letter_c++;
        return letters[digit].charAt(count - 1);
    }

     static String getString(String input) {
        int lastDigit = 0, count = 1;
        String result = "";
        int currentDigit;
        for (int i = 0; i < input.length(); i++) {
            if((input.charAt(i)!='0')&&(input.charAt(i)!='1'))
            {
            currentDigit = input.charAt(i) - '0';
            if (currentDigit >= 2 && currentDigit <= 9) {
                if (lastDigit == 0) {
                    lastDigit = currentDigit;
                } else if (currentDigit == lastDigit) {
                    count++;
                } else {
                    result += getChar(lastDigit, count);

                    lastDigit = currentDigit;
                    count = 1;
                }
            }
            }
            /*else if(input.charAt(i)=='0')
            {
               result=result.charAt(letter_c)+" ";
            }*/
            else
            {
                    result += getChar(lastDigit, count);
                    lastDigit = 0;
                    count = 1;
            }
        }

        return result + getChar(lastDigit, count);
    }

    public static void main(String[] args) {
        try (Scanner scanner = new Scanner(System.in)) {
            System.out.println("Write something");
            System.out.println(getString(scanner.nextLine()));
        }
    }
}