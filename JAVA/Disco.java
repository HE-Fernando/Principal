public class Disco extends Publica {
    private String duracion;
    private int cantidadTemas;

    public Disco() {
    }
    public Disco(String titulo, String anioPublicacion, double precio, String duracion, int cantidadTemas) {
        super(titulo, anioPublicacion, precio);
        this.duracion = duracion;
        this.cantidadTemas = cantidadTemas;
    }
    public void setDuracion(String duracion) {
        this.duracion = duracion;
    }
    public String getDuracion() {
        return this.duracion;
    }
    public void setCantidadTemas(int cantidadTemas) {
        this.cantidadTemas = cantidadTemas;
    }
    public int getCantidadTemas() {
        return this.cantidadTemas;
    }
    @Override
    public void mostrarDatos() {
        System.out.println("Titulo: " + titulo);
        System.out.println("Año de Publicacion: " + anioPublicacion);
        System.out.println("Precio: " + precio);
        System.out.println("Editorial: " + duracion);
        System.out.println("Numero de Paginas: " + cantidadTemas);
    }
}
