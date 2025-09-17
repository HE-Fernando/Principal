public class Servicio {
    private Persona trabajador;
    private Fecha fechaInicio;
    private Persona cliente;
    //CONSTRUCTORES
    public Servicio(){

    }
    public Servicio(Persona trabajador,Fecha fechaInicio,Persona cliente){
        this.trabajador = trabajador;
        this.fechaInicio = fechaInicio;
        this.cliente = cliente;
    }
    //GET SET
    public void setTrabajador(Persona trabajador){
        this.trabajador = trabajador;
    }
    public Persona getTrabajador(){
        return this.trabajador;
    }
    public void setFechaInicio(Fecha fechaInicio){
        this.fechaInicio = fechaInicio;
    }
    public Fecha getFechaInicio(){
        return this.fechaInicio;
    }
    public void setCliente(Persona cliente){
        this.cliente = cliente;
    }
    public Persona getCliente(){
        return this.cliente;
    }
    //METODOS SOLICITADOS
    public double costoMaterial(){
        return 0;
    }
    public double costoManoDeObra(){
        return 0;
    }
    public double costoTotal(){
        return 0;
    }
    public String toString(){
        return "Costo del material: " + "\nCosto mano de obra: " + "\nCosto total: "; 
    }
}
