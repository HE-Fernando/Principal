/*Cree una clase llamada Empleado, que incluya tres atributos: un nombre, un apellido  y un salario mensual.
Su clase debe tener 2 constructores que inicialicen las tres variables de instancia
,uno con valores vacíos y otro con los valores recibidos desde otra clase.
Proporcione un método set y un método get para cada atributo.
Si el salario mensual no es positivo, establézcalo a 0.0.
 */
public class Empleado {
    private String nombre;
    private String apellido;
    private double salarioMensual;

    //CONSTRUCTORES
    public Empleado() {
        this.nombre = "";
        this.apellido = "";
        this.salarioMensual = 0;
    }
    public Empleado(String nombre, String apellido, double salarioMensual) {
        this.nombre = nombre;
        this.apellido = apellido;
        if (salarioMensual < 0) {
            this.salarioMensual = 0.0;
        }else {
            this.salarioMensual = salarioMensual;
        }
    }
    //SETTERS 
    public void setNombre(String nombre) {
        this.nombre = nombre;
    }
    public void setApellido(String apellido) {
        this.apellido = apellido;
    }
    public void setSalarioMensual(double salarioMensual) {
        if (salarioMensual < 0) {
            this.salarioMensual = 0.0;
        }else {
            this.salarioMensual = salarioMensual;
        }
    }
    //GETTERS
    public String getNombre() {
        return nombre;
    }
    public String getApellido() {
        return apellido;
    }
    public double getSalarioMensual() {
        return salarioMensual;
    }

}
