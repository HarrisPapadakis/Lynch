// ��������� ������� �� � ������� ������ �� �������
// ������� ����������� �����
using System;

class Program
{
    static void Main()
    {
        Console.WriteLine("=== ������� ����������� ����� ===");

        // � �������  ������� ��� ������ ���
        Console.WriteLine("�������� �������� ��� ������ ���:");


        int age = Convert.ToInt32(Console.ReadLine());

        // Check �� � ������� ���� �������� �����
        if (age >= 18)
        {
            Console.WriteLine("�������� �� ��������.");
        }
        else
        {
            Console.WriteLine("��� �������� �� ��������.");
        }

        // ����� ������������
        Console.WriteLine("=== ����� ������������ ===");
    }
}
