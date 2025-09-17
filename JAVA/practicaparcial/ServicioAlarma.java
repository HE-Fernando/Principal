public class ServicioAlarma extends Servicio{
    private int numAlarma;
    //CONSTRUCTOR
    public ServicioAlarma(){

    }
    public ServicioAlarma(Persona trabajador, Fecha fechaInicio, Persona cliente, int numAlarma){
        super(trabajador, fechaInicio, cliente);
        this.numAlarma = numAlarma;
    }
    //GET SET
    public void setNumAlarma(int numAlarma){
        this.numAlarma = numAlarma;
    }
    public int getNumAlarma(){
        return this.numAlarma;
    }
    //METODOS SOLICITADOS
    @Override
    public double costoMaterial(){
        return 0;
    }
    @Override
    public double costoManoDeObra(){
        return (this.numAlarma/3)*40;
    }
    @Override
    public double costoTotal(){
        return costoManoDeObra();
    }
    @Override
    public String toString(){
        return "REVISIÓN PERIÓDICA ALARMAS" +
        "\nCliente: " + getCliente() + 
        "\nFecha revisión: " + getFechaInicio() +
        "\n-------------------------" +
        "\nTOTAL: " + costoTotal() +
        "\n-------------------------";
    }
}
