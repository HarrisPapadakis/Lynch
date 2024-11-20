// Title: Count Multiples of 3 from 20 to 250
using System;

class Program
{
    static void Main()
    {
        Console.WriteLine("=== Count Multiples of 3 from 20 to 250 ===");

        // Initialize a counter to keep track of multiples of 3
        int count = 0;

        // Loop through numbers from 20 to 250
        for (int i = 20; i <= 250; i++)
        {
            // Check if the current number is a multiple of 3
            if (i % 3 == 0)
            {
                // Increment the counter
                count++;
            }
        }

        // Display the total count of multiples of 3
        Console.WriteLine($"The total number of multiples of 3 between 20 and 250 is: {count}");

        // End of the program
        Console.WriteLine("=== End of Program ===");
    }
}
