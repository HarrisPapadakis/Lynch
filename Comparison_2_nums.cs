using System;

class Program
{
    static void Main()
    {
        // ������ ��� ��� ������ �� ������� ��� ��������
        Console.WriteLine("�������� ��� ����� ������:");
        double firstNumber = Convert.ToDouble(Console.ReadLine());

        Console.WriteLine("�������� ��� ������� ������:");
        double secondNumber = Convert.ToDouble(Console.ReadLine());

        // �������� ��� ������� ��� �������� ��� �����������
        if (firstNumber > secondNumber)
        {
            Console.WriteLine($"� ����������� ������� �����: {firstNumber}");
        }
        else if (secondNumber > firstNumber)
        {
            Console.WriteLine($"� ����������� ������� �����: {secondNumber}");
        }
        else
        {
            Console.WriteLine("�� ��� ������� ����� ����.");
        }
    }
}
