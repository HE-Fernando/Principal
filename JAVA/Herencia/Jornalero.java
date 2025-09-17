public class Jornalero extends Persona {
    private double sueldoJornada;
    private Fecha fechaIngreso;
    private int jornada;
    private int antiguedadDias;
    private int antiguedadMeses;
    private int antiguedadAños;
public Jornalero(){

}
public Jornalero(String nombre, String apellido, String dni, double sueldoJornada, Fecha fechaIngreso, int jornada, 
int antiguedadDias, int antiguedadMeses, int antiguedadAños){
    super(nombre, apellido, dni);
    this.sueldoJornada = sueldoJornada;
    this.fechaIngreso = fechaIngreso;
    this.jornada = jornada;
    this.antiguedadDias = antiguedadDias;
    this.antiguedadMeses = antiguedadMeses;
    this.antiguedadAños = antiguedadAños;
}
public void setSueldoJornada(double sueldoJornada){
    this.sueldoJornada = sueldoJornada;
}
public double getSueldoJornada(){
    return this.sueldoJornada;
}
public void setFechaIngreso(Fecha fechaIngreso){
    this.fechaIngreso = fechaIngreso;
}
public Fecha getFechaIngreso(){
    return this.fechaIngreso;
}
public void setJornada(int jornada){
    this.jornada = jornada;
}
public int getJornada(){
    return this.jornada;
}
public void setAntiguedadDias(int antiguedadDias){
        this.antiguedadDias = antiguedadDias;
}
public int getAntiguedadDias(){
    return this.antiguedadDias;
}
public void setAntiguedadMeses(int antiguedadMeses){
    this.antiguedadMeses = antiguedadMeses;
}
public int getAntiguedadMeses(){
    return this.antiguedadMeses;
}
public void setAntiguedadAños(int antiguedadAños){
    this.antiguedadAños = antiguedadAños;
}
public int getAntiguedadAños(){
    return this.antiguedadAños;
}
@Override
public String toString(){
    return "\nNombre: " + getNombre() + "\nApellido: " + getApellido() + "\nDNI: " + getDni() + 
    "\nFecha de Ingreso: " + fechaIngreso.toString() + "\nJornadas: " + getJornada() + "\nMonto por Jornada: " +
    getSueldoJornada() + "\nA cobrar: " + getJornada()*getSueldoJornada() + "\n\nAntiguedad:\nDias: " + getAntiguedadDias() 
    + "\nMeses: " + getAntiguedadMeses() + "\nAños: " + getAntiguedadAños();
}
}
