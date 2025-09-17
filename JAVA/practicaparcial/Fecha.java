public class Fecha {
    private int mes;
    private int dia;
    private int año;

    public Fecha(){

    }
    public Fecha(int dia, int mes, int año) {
        this.mes = mes;
        this.dia = dia;
        this.año = año;
    }
    public void setMes(int mes) {
        this.mes = mes;
    }
    public int getMes() {
        return this.mes;
    }
    public void setDia(int dia) {
        this.dia = dia;
    }
    public int getDia() {
        return this.dia;
    }
    public void setAño(int año) {
        this.año = año;
    }
    public int getAño() {
        return this.año;
    }
    public void mostrarFecha() {
        System.out.println("La fecha es: " + getDia() + "/" + getMes() + "/" + getAño());
    }
    public String toString(){
        return getDia() + "/" + getMes() + "/" + getAño();
    }
}