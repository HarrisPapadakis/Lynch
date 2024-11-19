// Πρόγραμμα ελέγχου αν ο χρήστης μπορεί να ψηφίσει
// Έλεγχος Δικαίωματος Ψήφου
using System;

class Program
{
    static void Main()
    {
        Console.WriteLine("=== Έλεγχος Δικαίωματος Ψήφου ===");

        // Ο χρήστης  εισάγει την ηλικία του
        Console.WriteLine("Παρακαλώ εισάγετε την ηλικία σας:");


        int age = Convert.ToInt32(Console.ReadLine());

        // Check αν ο χρήστης έχει δικαίωμα ψήφου
        if (age >= 18)
        {
            Console.WriteLine("Μπορείτε να ψηφίσετε.");
        }
        else
        {
            Console.WriteLine("Δεν μπορείτε να ψηφίσετε.");
        }

        // Τέλος προγράμματος
        Console.WriteLine("=== Τέλος προγράμματος ===");
    }
}
