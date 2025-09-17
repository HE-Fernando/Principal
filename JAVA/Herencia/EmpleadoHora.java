public class EmpleadoHora extends Persona{
    private double sueldoHora;
    private double horasTrabajadas;
    private Fecha fechaIngreso;
    private int antiguedadDias;
    private int antiguedadMeses;
    private int antiguedadAños;
    public EmpleadoHora(){

    }
    public EmpleadoHora(String nombre, String apellido, String dni, double sueldoHora, double horasTrabajadas, Fecha fechaIngreso, 
    int antiguedadDias, int antiguedadMeses, int antiguedadAños){
        super(nombre, apellido, dni);
        this.sueldoHora = sueldoHora;
        this.horasTrabajadas = horasTrabajadas;
        this.fechaIngreso = fechaIngreso;
        this.antiguedadDias = antiguedadDias;
        this.antiguedadMeses = antiguedadMeses;
        this.antiguedadAños = antiguedadAños;
    }
    public void setSueldoHora(double sueldoHora){
        this.sueldoHora = sueldoHora;
    }
    public double getSueldoHora(){
        return this.sueldoHora;
    }
    public void setHorasTrabajadas(double horasTrabajadas){
        this.horasTrabajadas = horasTrabajadas;
    }
    public double getHorasTrabajadas(){
        return this.horasTrabajadas;
    }
    public void setFechaIngreso(Fecha fechaIngreso){
        this.fechaIngreso = fechaIngreso;
    }
    public Fecha getFechaIngreso(){
        return this.fechaIngreso;
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
    "\nFecha de Ingreso: " + fechaIngreso.toString() + "\nHoras Trabajadas: " + getHorasTrabajadas() +
    "\nMonto por Hora: " + getSueldoHora() + "\nA cobrar: " + getHorasTrabajadas()*getSueldoHora() +
    "\nAntiguedad:\nDias: " + getAntiguedadDias() + "\nMeses: " + getAntiguedadMeses() + "\nAños: " + getAntiguedadAños();
    }
}
