<?php

//Crear array de estudiantes
$estudiantes= [
    "est001" =>["nombre" => "Ana Garcia",
    "edad" => 20,
    "carrera" => "Ingeniería",
    "notas" => [8.5, 9.0, 7.5, 8.0]
    ],
    "est002" => ["nombre" => "Carlos López",
    "edad" => 22,
    "carrera" => "Medicina",
    "notas" => [7.0, 8.0, 7.5, 8.5]
    ],
    "est003" => ["nombre" => "María Rodríguez",
    "edad" => 21,
    "carrera" => "Arte",
    "notas" => [7.0, 8.0, 7.5, 8.5]
    ]
];

//Funcion para calcular promedio
function calcularPromedio($notas)
{
    $aux = 0;
    for ($i=0;$i<count($notas);$i++)
    {
        $aux = $aux + $notas[$i];
    }
    $prom = $aux / count($notas);
    return $prom;
}

echo "El promedio es de: " . calcularPromedio($estudiantes["est001"]["notas"]);
echo "<br><br>";

//Reporte de cada estudiante
echo "Reporte de estudiantes <br>";
foreach($estudiantes as $id => $estudiante)
{
    echo "Nombre: " . $estudiante["nombre"] . "<br>";
    echo "Edad: " . $estudiante["edad"] . "<br>";
    echo "Carrera: " . $estudiante["carrera"] . "<br>";
    echo "Notas: ";
    for ($i=0;$i<count($estudiante["notas"]);$i++)
    {
        echo $estudiante["notas"][$i] . " ";
    }
    echo "<br>";
    echo "Promedio: " . calcularPromedio($estudiante["notas"]);
}
echo "<br><br><br>";

//Encontrar mejor estudiante
$mejorPromedio = 0;
$mejorEstudiante = "";
foreach($estudiantes as $id => $estudiante)
{
    if (calcularPromedio($estudiante["notas"]) > $mejorPromedio)
    {
        $mejorPromedio = calcularPromedio($estudiante["notas"]);
        $mejorEstudiante = $estudiante["nombre"];
    };
}
echo "El mejor estudiante es: " . $mejorEstudiante . "<br>";
echo "Con un promedio de: " . $mejorPromedio . "<br>";

?>