//E������ ���������  ����� ���������


using System;

class Program
{
    static void Main()
    {
        Console.WriteLine("=== ������� ��������� ������� ===");

        // � ������� ������� ���� ������
        Console.WriteLine("�������� �������� ���� ������:");
        int number = Convert.ToInt32(Console.ReadLine());

        // Check �� � ������� ����� ���������
        if (number >= 100 && number <= 999 || number <= -100 && number >= -999)
        {
            Console.WriteLine("� ������� ����� ���������.");
        }
        else
        {
            Console.WriteLine("� ������� ��� ����� ���������.");
        }

        // ����� ������������
        Console.WriteLine("=== ����� ������������ ===");
    }
}
