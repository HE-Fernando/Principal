/*Cree una clase llamada Fecha, que incluya tres variables de instancia: mes,  día y año.
su clase debe tener 2 constructores que inicialicen las tres variables de instancia,
uno con valores 0 y otro con los valores recibidos desde otra clase, se asume que los valores son correctos.
Proporcione un método get y un método set  para cada variable de instancia.
Proporcione un método mostrarFecha, que muestre el mes, día y año, separados por barras diagonales (/).
O use toString()
Escriba una aplicación de prueba llamada PruebaFecha, que demuestre las capacidades.
Modifique el programa para que sea capaz de verificar si los datos ingresados son correctos.*/
public class Fecha {
    private int mes;
    private int dia;
    private int año;

    public Fecha() {
        this.mes = 0;
        this.dia = 0;
        this.año = 0;
    }
    public Fecha(int dia, int mes, int año) {
        this.mes = mes;
        this.dia = dia;
        this.año = año;
    }
    public void setMes(int mes) {
        this.mes = mes;
    }
    public int getMes() {
        return this.mes;
    }
    public void setDia(int dia) {
        this.dia = dia;
    }
    public int getDia() {
        return this.dia;
    }
    public void setAño(int año) {
        this.año = año;
    }
    public int getAño() {
        return this.año;
    }
    public void mostrarFecha() {
        System.out.println("La fecha es: " + getDia() + "/" + getMes() + "/" + getAño());
    }
    public String toString() {
        return "La fecha es: " + getDia() + "/" + getMes() + "/" + getAño();
    }
}
