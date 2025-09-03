import java.time.LocalDateTime;
import java.time.format.DateTimeFormatter;
public class BancarioMain {
    public static void main(String[] args) {
        LocalDateTime ahora = LocalDateTime.now();
        DateTimeFormatter formato = DateTimeFormatter.ofPattern("dd/MM/yyyy HH:mm:ss");
        String ahoraFormateada = ahora.format(formato);
        CajaAhorro caja1 = new CajaAhorro(50000, "42002193", ahoraFormateada, 100000);
        System.out.println(caja1);
        caja1.consulta();
        caja1.deposito(50000);
        caja1.extraccion(150000);
        CuentaBancaria cuenta1 = new CuentaBancaria(50000, "42002193", ahoraFormateada);
        System.out.println(cuenta1);
        cuenta1.consulta();
        cuenta1.deposito(50000);
        cuenta1.extraccion(100000);
    }
}
    
        