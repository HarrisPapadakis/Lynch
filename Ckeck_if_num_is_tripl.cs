//Eλέγχος αριθμούαν  είναι τριψήφιος


using System;

class Program
{
    static void Main()
    {
        Console.WriteLine("=== Έλεγχος Τριψήφιου Αριθμού ===");

        // Ο χρήστης εισάγει έναν αριθμό
        Console.WriteLine("Παρακαλώ εισάγετε έναν αριθμό:");
        int number = Convert.ToInt32(Console.ReadLine());

        // Check αν ο αριθμός είναι τριψήφιος
        if (number >= 100 && number <= 999 || number <= -100 && number >= -999)
        {
            Console.WriteLine("Ο αριθμός είναι τριψήφιος.");
        }
        else
        {
            Console.WriteLine("Ο αριθμός δεν είναι τριψήφιος.");
        }

        // Τέλος προγράμματος
        Console.WriteLine("=== Τέλος προγράμματος ===");
    }
}
