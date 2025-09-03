/*Para todas las clases recuerde tener en cuenta constructores, los métodos get y set.
Una editorial de libros y discos desea crear una ficha con: Título, Año de Publicación  y Precio de cada Publicación
para ello debe crear una Clase Base llamada Pública. A partir de esta clase debe diseñar dos Subclases: Libros
que contendrá Nro. de Página y Editorial; y Disco que tendrá Duración y cantidad de temas.
Cada una de las Clases deberá tener métodos, que permitan establecer los datos necesarios, y  visualizar los resultados.*/

public class Publica {
    protected String titulo;
    protected String anioPublicacion;
    protected double precio;
    public Publica(){
    }
    public Publica(String titulo, String anioPublicacion, double precio) {
        this.titulo = titulo;
        this.anioPublicacion = anioPublicacion;
        this.precio = precio;
    }
    public void setTitulo(String titulo) {
        this.titulo = titulo;
    }
    public String getTitulo() {
        return this.titulo;
    }
    public void setAnioPublicacion(String anioPublicacion) {
        this.anioPublicacion = anioPublicacion;
    }
    public String getAnioPublicacion() {
        return this.anioPublicacion;
    }
    public void setPrecio(double precio) {
        this.precio = precio;
    }
    public double getPrecio() {
        return this.precio;
    }
    
    public void mostrarDatos() {
        System.out.println("Titulo: " + this.titulo);
        System.out.println("Año de Publicacion: " + this.anioPublicacion);
        System.out.println("Precio: " + this.precio);
    }
}
