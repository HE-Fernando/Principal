public class EmpleadoHora extends Persona{
    private double sueldoHora;
    private double horasTrabajadas;
    private String fechaIngreso;
    public EmpleadoHora(){

    }
    public EmpleadoHora(String nombre, String apellido, String dni, double sueldoHora, double horasTrabajadas, String fechaIngreso){
        super(nombre, apellido, dni);
        this.sueldoHora = sueldoHora;
        this.horasTrabajadas = horasTrabajadas;
        this.fechaIngreso = fechaIngreso;
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
    public void setFechaIngreso(String fechaIngreso){
        this.fechaIngreso = fechaIngreso;
    }
    public String getFechaIngreso(){
        return this.fechaIngreso;
    }
    public String toString(){
        return "Nombre: " + getNombre() + "\nApellido: " + getApellido() + "\nDNI: " + getDni() +
        "\nFecha de Ingreso: " + getFechaIngreso() + "\nSueldo por hora: " + getSueldoHora() +
        "\nHoras trabajadas: " + getHorasTrabajadas() + "\nMonto a cobrar: " + getHorasTrabajadas() * getSueldoHora() + 
        "\nAntiguedad: ";
    }
}
