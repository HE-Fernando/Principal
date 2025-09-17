public class RegistrosAlquiler {
    private Cliente cliente;
    private Pelicula pelicula;
    private Videojuego videojuego;
    private Fecha fechaAlquiler;
    private Fecha fechaDevolucion;

    public RegistrosAlquiler(Cliente cliente, Pelicula pelicula, Fecha fechaAlquiler,
    Fecha fechaDevolucion){
        this.cliente = cliente;
        this.pelicula = pelicula;
        this.fechaAlquiler = fechaAlquiler;
        this.fechaDevolucion = fechaDevolucion;
    }
    public RegistrosAlquiler(Cliente cliente, Videojuego videojuego, Fecha fechaAlquiler,
    Fecha fechaDevolucion){
        this.cliente = cliente;
        this.videojuego = videojuego;
        this.fechaAlquiler = fechaAlquiler;
        this.fechaDevolucion = fechaDevolucion;
    }
    public void setCliente(Cliente cliente){
        this.cliente = cliente;
    }
    public Cliente getCliente(){
        return this.cliente;
    }
    public void setPelicula(Pelicula pelicula){
        this.pelicula = pelicula;
    }
    public Pelicula getPelicula(){
        return this.pelicula;
    }
    public void setVideojuego(Videojuego videojuego){
        this.videojuego = videojuego;
    }
    public Videojuego getVideojuego(){
        return this.videojuego;
    }
    public void setFechaAlquiler(Fecha fechaAlquiler){
        this.fechaAlquiler = fechaAlquiler;
    }
    public Fecha getFechaAlquiler(){
        return this.fechaAlquiler;
    }
    public void setFechaDevolucion(Fecha fechaDevolucion){
        this.fechaDevolucion = fechaDevolucion;
    }
    public Fecha getFechaDevolucion(){
        return this.fechaDevolucion;
    }
    @Override
    public String toString(){
        return "Cliente: " + cliente.getNombre() + "\n" +
        "Pelicula: " + (pelicula != null ? pelicula.getTitulo() : "N/A") + "\n" +
        "Videojuego: " + (videojuego != null ? videojuego.getTitulo() : "N/A") + "\n" +
        "Fecha de Alquiler: " + fechaAlquiler + "\n" +
        "Fecha de Devolucion: " + fechaDevolucion;
    }
}
