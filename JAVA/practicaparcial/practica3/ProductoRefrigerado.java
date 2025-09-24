public class ProductoRefrigerado extends Producto{
    private String organismoSupervisor;
    //CONSTRUCTORES
    public ProductoRefrigerado(){

    }
    public ProductoRefrigerado(Fecha fechaCaducidad, int numeroLote, Fecha fechaEnvasado, String organismoSupervisor){
        super(fechaCaducidad, numeroLote, fechaEnvasado);
        this.organismoSupervisor = organismoSupervisor;
    }
    //GET SET
    public void setOrganismoSupervisor(String organismoSupervisor){
        this.organismoSupervisor = organismoSupervisor;
    }
    public String getOrganismoSupervisor(){
        return this.organismoSupervisor;
    }
    //METODOS
    @Override
    public String toString(){
        return "-------------------------------------------" + 
        "\nPRODUCTO REFRIGERADO" +
        "\nNúmero de lote: " + getNumeroLote() +
        "\nFecha de Envasado: " + getFechaEnvasado() +
        "\nFecha de Caducidad: " + getFechaCaducidad() +
        "\nOrganismo de Supervición Alimentaria: " + getOrganismoSupervisor() +
        "\n-------------------------------------------";
    }
}
