public class CuentaBancaria {
    protected double saldo;
    protected String dni;
    protected String fecha;

    public CuentaBancaria(){

    }
    public CuentaBancaria(double saldo, String dni, String fecha) {
        this.saldo = saldo;
        this.dni = dni;
        this.fecha = fecha;
    }
    public void setSaldo(double saldo) {
        this.saldo = saldo;
    }
    public double getSaldo(){
        return this.saldo;
    }
    public void setDni(String dni){
        this.dni = dni;
    }
    public String getDni(){
        return this.dni;
    }
    public void setFecha(String fecha){
        this.fecha = fecha;
    }
    public String getFecha(){
        return this.fecha;
    }
    public void deposito(double monto){
        System.out.print("\033[H\033[2J");
        System.out.flush();
        System.out.println("Saldo: " + this.saldo);
        System.out.println("Monto a depositar: " + monto);
        setSaldo(this.saldo + monto);
        System.out.println("Nuevo saldo: " + this.saldo);
    }
    public void consulta(){
        System.out.print("\033[H\033[2J");
        System.out.flush();
        System.out.println("Saldo: " + this.saldo);
    }
    public void extraccion(double monto){
        System.out.print("\033[H\033[2J");
        System.out.flush();
        System.out.println("Saldo: " + this.saldo);
        System.out.println("Monto a extraer: " + monto);
        if (monto > getSaldo()){
            System.out.println("El monto supera el saldo de la cuenta.");
        }else{
            setSaldo(getSaldo() - monto);
            System.out.println("Nuevo saldo: " + getSaldo());
        }
    }
    public String toString(){
        System.out.print("\033[H\033[2J");
        return "DNI: " + getDni() + "\nSaldo: " + getSaldo() + "\nFecha creaccion: " + getFecha();
    }
}
