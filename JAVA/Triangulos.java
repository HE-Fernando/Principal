public class Triangulos {
    private int lado1;
    private int lado2;
    private int lado3;
    private int tipo; //1: Equilátero, 2: Isósceles, 3: Escaleno

    public Triangulos(int lado1, int lado2, int lado3) {
        this.lado1 = lado1;
        this.lado2 = lado2;
        this.lado3 = lado3;
    }
    //SETTERS
    public void setTipo(int tipo) {
        this.tipo = tipo;
    }
    //SETTERS
    //GETTERS
    public int getLado1() {
        return lado1;
    }
    public int getLado2()
    {
        return lado2;
    }
    public int getLado3() {
        return lado3;
    }
    public int getTipo() {
        return tipo;
    }
    //GETTERS
    //FUNCIONES
    public void determinarTipo() {
        int tipo = 0;
        int auxLado1 = getLado1();
        int auxLado2 = getLado2();
        int auxLado3 = getLado3();
        if (auxLado1 == auxLado2 && auxLado2 == auxLado3) {
            tipo = 1; //EQUILATERO
        }else if ((auxLado1 == auxLado2 && auxLado1 != auxLado3)
        || (auxLado1 == auxLado3 && auxLado3 != auxLado2)
        || (auxLado2 == auxLado3) && auxLado2 != auxLado1) {
            tipo = 2; //ISOSCELES
        }else {
            tipo = 3; //ESCALENO
        }
        setTipo(tipo);
    }
    //FUNCIONES

}

//2._ Escriba un programa que permita ingresar los 3 lados de 10 triángulos, indiqué si 
//el triángulo es equilátero, isósceles o escaleno, y la cantidad ingresada de cada uno.