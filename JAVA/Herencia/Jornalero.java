public class Jornalero extends Persona {
    private double sueldoJornada;
    private String fechaIngreso;
public Jornalero(){

}
public Jornalero(String nombre, String apellido, String dni, double sueldoJornada, String fechaIngreso){
    super(nombre, apellido, dni);
    this.sueldoJornada = sueldoJornada;
    this.fechaIngreso = fechaIngreso;
}
public void setSueldoJornada(double sueldoJornada){
    this.sueldoJornada = sueldoJornada;
}
public double getSueldoJornada(){
    return this.sueldoJornada;
}
public void setFechaIngreso(String fechaIngreso){
    this.fechaIngreso = fechaIngreso;
}
public String getFechaIngreso(){
    return this.fechaIngreso;
}
public String toString(){
    return "Nombre: " + getNombre() + "\nApellido: " + getApellido() + "\nDNI: " + getDni() + "\nFecha de Ingreso: " + getFechaIngreso() + "\nSueldoJornada: " + getSueldoJornada();
}
}
