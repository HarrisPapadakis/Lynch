// Title: Multiplication Table of 4
//Και για εμάς τους villagers ο πολλαπλασιασμός του 4
using System;

class Program
{
    static void Main()
    {
        Console.WriteLine("=== Multiplication Table of 4 ===");

        // Loop through numbers from 1 to 10
        for (int i = 1; i <= 10; i++)
        {
            // Calculate and display the product of 4 and the current number
            Console.WriteLine($"4 x {i} = {4 * i}");
        }

        // End of the program
        Console.WriteLine("=== End of Program ===");
    }
}
