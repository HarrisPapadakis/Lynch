using System;

class Program
{
    static void Main()
    {
        // Ζητάμε από τον χρήστη να εισάγει δύο αριθμούς
        Console.WriteLine("Εισάγετε τον πρώτο αριθμό:");
        double firstNumber = Convert.ToDouble(Console.ReadLine());

        Console.WriteLine("Εισάγετε τον δεύτερο αριθμό:");
        double secondNumber = Convert.ToDouble(Console.ReadLine());

        // Σύγκριση των αριθμών και εμφάνιση του μεγαλύτερου
        if (firstNumber > secondNumber)
        {
            Console.WriteLine($"Ο μεγαλύτερος αριθμός είναι: {firstNumber}");
        }
        else if (secondNumber > firstNumber)
        {
            Console.WriteLine($"Ο μεγαλύτερος αριθμός είναι: {secondNumber}");
        }
        else
        {
            Console.WriteLine("Οι δύο αριθμοί είναι ίσοι.");
        }
    }
}
