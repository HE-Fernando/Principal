public class CajaAhorro extends CuentaBancaria {
       double limiteExtraccion;
       public CajaAhorro(){
       }
       public CajaAhorro(double saldo, String dni, String fecha, double limiteExtraccion){
       super(saldo, dni, fecha);
       this.limiteExtraccion = limiteExtraccion;  
       }
       public void setLimiteExtraccion(double limite){
              this.limiteExtraccion = limite;
       }
       public double getLimiteExtraccion(){
              return this.limiteExtraccion;
       }
       @Override
       public void extraccion(double monto){
              System.out.print("\033[H\033[2J");
              System.out.flush();
              System.out.println("Saldo actual: " + getSaldo());
              System.out.println("Límite de extracción: " + this.limiteExtraccion);
              System.out.println("");
              System.out.println("Monto a extraer: " + monto);
              if (monto > this.limiteExtraccion * 2){
                     System.out.println("El monto supera el límite de la cuenta");
              }else{
                     setSaldo(getSaldo() - monto);
                     System.out.println("Nuevo saldo: " + getSaldo());
              }
       }
       @Override
       public String toString(){
              System.out.print("\033[H\033[2J");
              return "DNI: " + getDni() + "\nSaldo: " + getSaldo() + "\nLimite: " + getLimiteExtraccion() + "\nFecha creaccion: " + getFecha();
       }
}
