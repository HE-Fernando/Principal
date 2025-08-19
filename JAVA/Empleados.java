public class Empleados {
    private String nombre;
    private String apellido;
    private int edad;
    private String numeroDocumento;
    private String lugarDeTrabajo;
    private double sueldo;
    private boolean tieneSeguroDeVida;

    public Empleados(String nombre, String apellido, int edad,
    String numeroDocumento, String lugarDeTrabajo,
    double sueldo, boolean tieneSeguroDeVida) 
    {
        this.nombre = nombre;
        this.apellido = apellido;
        this.edad = edad;
        this.numeroDocumento = numeroDocumento;
        this.lugarDeTrabajo = lugarDeTrabajo;
        this.sueldo = sueldo;
        this.tieneSeguroDeVida = tieneSeguroDeVida;
    }
    //SETTERS
    public void setNombre(String nombre) 
    {
        this.nombre = nombre;
    }
    public void setApellido(String apellido)
    {
        this.apellido = apellido;
    }
    public void setEdad(int edad)
    {
        this.edad = edad;
    }
    public void setDocumento(String numeroDocumento)
    {
        this.numeroDocumento = numeroDocumento;
    }
    public void setLugarDeTrabajo(String lugarDeTrabajo)
    {
        this.lugarDeTrabajo = lugarDeTrabajo;
    }
    public void tieneSeguroDeVida(boolean tieneSeguroDeVida)
    {
        this.tieneSeguroDeVida = tieneSeguroDeVida;
    }
    //SETTERS
    //GETTERS
    public String getNombre() 
    {
        return nombre;
    }
    public String getApellido() 
    {
        return apellido;
    }
    public int getEdad() 
    {
        return edad;
    }
    public String getNumeroDocumento() 
    {
        return numeroDocumento;
    }
    public String getLugarDeTrabajo() 
    {
        return lugarDeTrabajo;
    }
    public double getSueldo() 
    {
        return sueldo;
    }
    public boolean tieneSeguroDeVida() 
    {
        return tieneSeguroDeVida;
    }
    //GETTERS
    //FUNCIONES
    public void mostrarDatosEmpleado()
    {
        System.out.println("Nombre: " + getNombre());
        System.out.println("Apellido: " + getApellido());
        System.out.println("Edad: " + getEdad());
        System.out.println("Numero de Documento: " + getNumeroDocumento());
        System.out.println("Lugar de Trabajo: " + getLugarDeTrabajo());
        System.out.println("Sueldo: " + getSueldo());
        if (tieneSeguroDeVida() == true)
        {
            System.out.println("Tiene Seguro de Vida: Si");
        }
        else 
        {
            System.out.println("Tiene Seguro de Vida: No");
        }
    }
    //FUNCIONES
}

//1._ Escriba un programa en Java que permita ingresar los siguientes datos de un
//empleado: nombre, apellido, edad, número de documento, lugar de trabajo, sueldo y si 
//tiene seguro de vida.  Visualizar, de forma ordenada, todos los datos del empleado.
