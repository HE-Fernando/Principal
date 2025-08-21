///Cuadrilatero.java
/// Modifique la clase Cuadrilátero de la siguiente manera:
//a) Permita calcular el área de un rectángulo. (Agregue un nuevo constructor)
//b) Permita calcular el perímetro de un cuadrado y rectángulo. (Perímetro= 2*(lado1+lado2)

public class Cuadrilatero {
	private double ladoA;
	private double ladoB;

    public Cuadrilatero() {
    	ladoA=0;
    	ladoB=0;
    }
     public Cuadrilatero(double lado){
    	ladoA=lado;
    	ladoB=lado;
    }

    //AGREGADO
    public Cuadrilatero(double ladoA, double ladoB) {
        this.ladoA = ladoA;
        this.ladoB = ladoB;
    }
    //AGREGADO

    public double getLadoA(){
    	return ladoA;
    }
    public void setLadoA(double lado){
    	 ladoA=lado;
    }
    public double getLadoB(){
    	return ladoB;
    }
    public void setLadoB(double lado){
    	 ladoB=lado;
    }
    public double area(){
        return ladoA*ladoB;
    }

    //AGREGADO
    public double calcularArea() {
        double area = ladoA * ladoB;
        return area;
    }
    public double calcularPerimetro() {
        double perimetro = 2 * (ladoA + ladoB);
        return perimetro;
    }
    //AGREGADO
    
}

