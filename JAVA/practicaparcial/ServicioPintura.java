public class ServicioPintura extends Servicio{
    private double superficie;
    private double precioPintura;
    //CONSTRUCTORES
    public ServicioPintura(){

    }
    public ServicioPintura(Persona trabajador, Fecha fechaInicio, Persona cliente,
    double superficie, double precioPintura){
        super(trabajador, fechaInicio, cliente);
        this.superficie = superficie;
        this.precioPintura = precioPintura;
    }
    //GET SET
    public void setSuperficie(double superficie){
        this.superficie = superficie;
    }
    public double getSuperficie(){
        return this.superficie;
    }
    public void setPrecioPintura(double precioPintura){
        this.precioPintura = precioPintura;
    }
    public double getPrecioPintura(){
        return this.precioPintura;
    }
    //METODOS SOLICITADOS
    @Override
    public double costoMaterial(){
        return (this.superficie/7.8)*this.precioPintura;
    }
    @Override
    public double costoManoDeObra(){
        return (this.superficie/10)*9.5;
    }
    @Override
    public double costoTotal(){
        return this.costoMaterial() + this.costoManoDeObra();
    }
    @Override
    public String toString(){
        return "TRABAJO DE PINTURA Cliente: " + getCliente() + 
        "\nFecha de inicio: " + getFechaInicio() + 
        "\n-------------------------" + 
        "\nPintor: " + getTrabajador() + 
        "\nCosto Material: " + costoMaterial() + 
        "\nCosto Mano Obra: " + costoManoDeObra() + 
        "\nCosto Adicional: " + 0 + 
        "\nTOTAL: " + costoTotal() +
        "\n-------------------------";
    }
}
