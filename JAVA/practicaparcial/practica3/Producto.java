/*PRODUCTOS COMPARTEN:
 FECHA DE CADUCIDAD
 NUMERO DE LOTE
 FECHA DE ENVASADO
 */
public class Producto {
    private Fecha fechaCaducidad;
    private int numeroLote;
    private Fecha fechaEnvasado;
    //CONSTRUCTORES
    public Producto(){

    }
    public Producto(Fecha fechaCaducidad, int numeroLote, Fecha fechaEnvasado){
        this.fechaCaducidad = fechaCaducidad;
        this.numeroLote = numeroLote;
        this.fechaEnvasado = fechaEnvasado;
    }
    //GET SET
    public void setFechaCaducidad(Fecha fechaCaducidad){
        this.fechaCaducidad = fechaCaducidad;
    }
    public Fecha getFechaCaducidad(){
        return this.fechaCaducidad;
    }
    public void setNumeroLote(int numeroLote){
        this.numeroLote = numeroLote;
    }
    public int getNumeroLote(){
        return this.numeroLote;
    }
    public void setFechaEnvasado(Fecha fechaEnvasado){
        this.fechaEnvasado = fechaEnvasado;
    }
    public Fecha getFechaEnvasado(){
        return this.fechaEnvasado;
    }
    //METODOS
    public String toString(){
        return "-------------------------------------------" + 
        "\nPRODUCTO (NO ESPECIFICA TIPO)" +
        "\nNúmero de lote: " + getNumeroLote() +
        "\nFecha de Envasado: " + getFechaEnvasado() +
        "\nFecha de Caducidad: " + getFechaCaducidad() +
        "\n-------------------------------------------";
    }

}
