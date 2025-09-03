public class Libro extends Publica {
    private int numPaginas;
    private String editorial;

    public Libro() {

    }
    public Libro(String titulo, String anioPublicacion, double precio, int numPaginas, String editorial) {
        super(titulo, anioPublicacion, precio);
        this.numPaginas = numPaginas;
        this.editorial = editorial;
    }
    public void setNumPaginas(int numPaginas) {
        this.numPaginas = numPaginas;
    }
    public int getNumPaginas() {
        return this.numPaginas;
    }
    public void setEditorial(String editorial) {
        this.editorial = editorial;
    }
    public String getEditorial() {
        return this.editorial;
    }
    @Override
    public void mostrarDatos() {
        System.out.println("Titulo: " + titulo);
        System.out.println("Año de Publicacion: " + anioPublicacion);
        System.out.println("Precio: " + precio);
        System.out.println("Editorial: " + editorial);
        System.out.println("Numero de Paginas: " + numPaginas);
    }
}
