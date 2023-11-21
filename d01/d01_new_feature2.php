<?php

echo "Example constructor Property Promotion \n\n";

class Student
{
    public string $id, $name;
    public float $mark;

    public function __construct($ma = 's01', $ten = 'danh', $diem = '100')
    {
        $this->id = $ma;
        $this->name = $ten;
        $this->mark = $diem;
    }

    public function __toString()
    {
        return "id : $this->id, ten : $this->name, diem : $this->mark ";
    }
}


$sv1 = new Student;
echo "sinh vien 1 : $sv1 \n";
$sv2 = new Student('s02', 'anh tuan', 98.00);
echo "sinh vien 2 : $sv2 \n";
$sv3 = new Student(ma: 's03', diem: 99.99, ten: 'anh danh');
echo "sinh vien 3 : $sv3 \n";
