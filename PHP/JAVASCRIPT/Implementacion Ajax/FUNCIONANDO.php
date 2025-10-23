<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestión de Productos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 900px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f4f4f4;
        }
        
        h2 {
            color: #333;
            text-align: center;
        }
        
        .stats {
            background-color: #e3f2fd;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            text-align: center;
        }
        
        .stats span {
            font-weight: bold;
            color: #1976d2;
        }
        
        .filtros {
            background-color: #f5f5f5;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        
        .filtro-grupo {
            margin: 10px 0;
        }
        
        label {
            display: inline-block;
            width: 120px;
            font-weight: bold;
        }
        
        input, select {
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            width: 250px;
        }
        
        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin: 5px;
        }
        
        button:hover {
            background-color: #45a049;
        }
        
        .btn-limpiar {
            background-color: #f44336;
        }
        
        .btn-limpiar:hover {
            background-color: #da190b;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: white;
        }
        
        th {
            background-color: #4CAF50;
            color: white;
            padding: 12px;
            text-align: left;
        }
        
        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        
        tr:hover {
            background-color: #f5f5f5;
        }
        
        .sin-resultados {
            text-align: center;
            padding: 20px;
            color: #999;
        }
    </style>
</head>
<body>
    <h2>Sistema de Gestión de Productos</h2>
    <div id="mensaje" style="text-align:center; margin-top:10px; font-weight:bold;"></div>

    <div class="stats">
        Total de productos: <span id="totalProductos"></span> | 
        Productos filtrados: <span id="productosFiltrados"></span> | 
        Valor total stock: $<span id="valorTotal"></span>
    </div>
    
    <div class="filtros">
        <h3>Filtros y Búsqueda</h3>
        
        <div class="filtro-grupo">
            <label>Buscar:</label>
            <input type="text" id="buscar" placeholder="Buscar por nombre...">
        </div>
        
        <div class="filtro-grupo">
            <label>Categoría:</label>
            <select id="categoria">
                <option value="todas">Todas las categorías</option>
                <option value="Electrónica">Electrónica</option>
                <option value="Ropa">Ropa</option>
                <option value="Alimentos">Alimentos</option>
                <option value="Hogar">Hogar</option>
            </select>
        </div>
        
        <div class="filtro-grupo">
            <label>Stock mínimo:</label>
            <input type="number" id="stockMinimo" value="0" min="0">
        </div>
        
        <div class="filtro-grupo">
            <label>Ordenar por:</label>
            <select id="ordenar">
                <option value="nombre_asc">Nombre (A-Z)</option>
                <option value="nombre_desc">Nombre (Z-A)</option>
                <option value="precio_asc">Precio (Menor a Mayor)</option>
                <option value="precio_desc">Precio (Mayor a Menor)</option>
                <option value="stock_asc">Stock (Menor a Mayor)</option>
                <option value="stock_desc">Stock (Mayor a Menor)</option>
            </select>
        </div>
        
        <button id="aplicarFiltros">Aplicar Filtros</button>
        <button id="limpiarFiltros" class="btn-limpiar">Limpiar Filtros</button>
    </div>
    <div class="filtros" style="margin-top:20px;">
        <h3>Agregar Nuevo Producto</h3>
        <label>Nombre:</label>
        <input type="text" id="nuevoNombre" placeholder="Nombre del producto"><br><br>

        <label>Categoría:</label>
        <select id="nuevaCategoria">
            <option value="Electrónica">Electrónica</option>
            <option value="Ropa">Ropa</option>
            <option value="Alimentos">Alimentos</option>
            <option value="Hogar">Hogar</option>
        </select><br><br>

        <label>Precio:</label>
        <input type="number" id="nuevoPrecio" placeholder="Precio" step="0.01"><br><br>

        <label>Stock:</label>
        <input type="number" id="nuevoStock" placeholder="Stock"><br><br>

        <button id="btnAgregarProducto">Agregar Producto</button>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Categoría</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Valor Total</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody id="cuerpoTabla">
        </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        let productosOriginales = [];
        let productosFiltrados = [];
        document.addEventListener("DOMContentLoaded", async () => {
            try {
                const respuesta = await fetch("procesar.php", {
                    method: "POST",
                    body: new URLSearchParams({accion: "listar"})
                });
                const data = await respuesta.json();

                if (data.exito){
                    productosOriginales = data.productos.map(p => ({
                        ...p,
                        precio: parseFloat(p.precio),
                        stock: parseInt(p.stock)
                    }));
                    productosFiltrados = [...productosOriginales];
                    mostrarProductos();
                    actualizarEstadisticas();

                } else {
                    mostrarMensaje("Error al obtener productos: " + data.error, "error");
                }
            } catch (error){
                console.error(error);
                mostrarMensaje("Error al conectar con el servidor", "error");
            }
        });

        // FUNCIÓN 1: Mostrar productos en la tabla
        function mostrarProductos(){
            const tbody = document.getElementById("cuerpoTabla");
            tbody.innerHTML = "";
            if (productosFiltrados.length === 0){
                tbody.innerHTML = `<tr>
                <td colspan="7" class="sin-resultados">No hay productos que mostrar</td>
                </tr>`;
                return;
            }
            productosFiltrados.forEach(p => {
                const tr = document.createElement("tr");
                tr.setAttribute("data-id", p.id);
                tr.innerHTML = `
                <td>${p.id}</td>
                <td>${p.nombre}</td>
                <td>${p.categoria}</td>
                <td>${p.precio}</td>
                <td>${p.stock}</td>
                <td>${p.precio * p.stock}</td>
                <td>
                    <button onclick="editarProducto(${p.id})">Editar</button>
                    <button onclick="eliminarProducto(${p.id})">Eliminar</button>
                </td>
                `;
                tbody.appendChild(tr);
            });
        }
        // FUNCIÓN 2: Actualizar estadísticas
        function actualizarEstadisticas() {
            const totalProductos = document.getElementById("totalProductos");
            const productosFiltradosElem = document.getElementById("productosFiltrados");
            const valorTotal = document.getElementById("valorTotal");
            if (productosFiltrados.length === 0){
                totalProductos.innerText = "0";
                productosFiltradosElem.innerText = "0";
                valorTotal.innerText = "0";
                return;
            }
            let contadorProductos = 0;
            let contadorFiltrados = 0;
            let contadorValorTotal;
            productosFiltrados.forEach(producto => {
                contadorProductos = contadorProductos + producto.stock;
                contadorFiltrados = contadorFiltrados + 1;
            });
            contadorValorTotal = productosFiltrados.reduce((acumulador, producto) =>{
                return acumulador + (producto.precio * producto.stock);
            }, 0);
            console.log(contadorProductos);
            console.log(contadorValorTotal);
            console.log(contadorFiltrados);
            totalProductos.innerText = contadorProductos.toLocaleString();
            productosFiltradosElem.innerText = contadorFiltrados.toLocaleString();
            valorTotal.innerText = contadorValorTotal.toLocaleString();
        }
        // FUNCIÓN 3: Aplicar filtros
        function aplicarFiltros() {
            const textoBusqueda = document.getElementById("buscar").value.toLowerCase();
            const categoria = document.getElementById("categoria").value;
            const stockMinimo = parseInt(document.getElementById("stockMinimo").value) || 0;

            productosFiltrados = productosOriginales.filter(p =>{
                const coincideNombre = p.nombre.toLowerCase().includes(textoBusqueda);
                const coincideCategoria = categoria === "todas" || p.categoria === categoria;
                const coincideStock = p.stock >= stockMinimo;
                return coincideNombre && coincideCategoria && coincideStock;
            });
            ordenarProductos();
            mostrarProductos();
            actualizarEstadisticas();
        }
        // FUNCIÓN 4: Ordenar productos
        function ordenarProductos() {
            const criterio = document.getElementById("ordenar").value;

            productosFiltrados.sort((a, b) => {
                switch (criterio) {
                    case "nombre_asc":
                        return a.nombre.localeCompare(b.nombre);
                    case "nombre_desc":
                        return b.nombre.localeCompare(a.nombre);
                    case "precio_asc":
                        return a.precio - b.precio;
                    case "precio_desc":
                        return b.precio - a.precio;
                    case "stock_asc": 
                        return a.stock - b.stock;
                    case "stock_desc": 
                        return b.stock - a.stock;
                    default:
                        return 0;
                }
            });
            mostrarProductos();
            actualizarEstadisticas();
        }
        // FUNCIÓN 5: Limpiar filtros
        function limpiarFiltros() {
            document.getElementById("buscar").value = "";
            document.getElementById("categoria").value = "todas";
            document.getElementById("stockMinimo").value = 0;
            document.getElementById("ordenar").value = "nombre_asc";

            productosFiltrados = [...productosOriginales];
            mostrarProductos();
            actualizarEstadisticas();
        }
        // FUNCIÓN 6: Agregar producto
        document.getElementById("btnAgregarProducto").addEventListener("click", async (e) => {
            e.preventDefault();
            const nombre = document.getElementById("nuevoNombre").value.trim();
            const categoria = document.getElementById("nuevaCategoria").value;
            const precio = parseFloat(document.getElementById("nuevoPrecio").value);
            const stock = parseInt(document.getElementById("nuevoStock").value);
            if (!nombre || !categoria || isNaN(precio) || isNaN(stock)){
                mostrarMensaje("Todos los campos son obligatorios y deben ser validos", "error");
                return;
            }
            //Reviso si es edicion o creacion
            const id = parseInt(e.target.dataset.editId) || 0;
            try {
                const formData = new URLSearchParams();
                formData.append("nombre", nombre);
                formData.append("categoria", categoria);
                formData.append("precio", precio);
                formData.append("stock", stock);

                if (id > 0){
                    formData.append("accion", "actualizar");
                    formData.append("id", id);
                } else{
                    formData.append("accion", "crear");
                }

                const respuesta = await fetch("procesar.php", {
                    method: "POST",
                    body: formData
                });

                const data = await respuesta.json();
                if(data.exito){
                    if (id > 0){
                        const index = productosOriginales.findIndex(p => p.id === id);
                        productosOriginales[index] = {id, nombre, categoria, precio, stock };
                        const indexFiltrado = productosFiltrados.findIndex(p => p.id === id);
                        if (indexFiltrado >= 0){
                            productosFiltrados[indexFiltrado] = {id, nombre, categoria, precio, stock};
                        }
                        mostrarMensaje("Producto actualizado correctamente", "success");
                    }else {
                        const nuevoProducto = {
                            id: data.id,
                            nombre,
                            categoria,
                            precio,
                            stock
                        };
                        productosOriginales.push(nuevoProducto);
                        productosFiltrados.push(nuevoProducto);
                        mostrarMensaje("Producto agregado correctamente", "success");  
                    }
                    mostrarProductos();
                    actualizarEstadisticas();   
                    //limpiar campos
                    e.target.dataset.editId = "";
                    document.getElementById("nuevoNombre").value = "";
                    document.getElementById("nuevaCategoria").value = "Electrónica";
                    document.getElementById("nuevoPrecio").value = "";
                    document.getElementById("nuevoStock").value = "";
                    document.getElementById("btnAgregarProducto").textContent = "Agregar Producto";
                } else {
                    mostrarMensaje("Error al agregar producto: " + data.error, "error");
                }
            } catch (error){
                console.error(error);
                mostrarMensaje("Error de conexión con el servidor", "error");
            }
        });
        // FUNCIÓN 7: Eliminar producto
        async function eliminarProducto(id){
            if (!confirm("¡Seguro que desea eliminar este producto?")) {
                return;
            }
            try {
                const formData = new URLSearchParams;
                formData.append("accion", "eliminar")
                formData.append("id", id);

                const respuesta = await fetch("procesar.php", {
                    method: "POST",
                    body: formData
                });
                const data = await respuesta.json();

                if (data.success){
                    productosOriginales = productosOriginales.filter(p => p.id !== id);
                    productosFiltrados = productosFiltrados.filter(p => p.id !== id);

                    mostrarProductos();
                    actualizarEstadisticas();

                    mostrarMensaje("Producto eliminado correctamente", "success");
                } else {
                    mostrarMensaje("Error al eliminar producto: " + data.error, "error");
                }
            } catch (error){
                console.error(error);
                mostrarMensaje("Error de conexión con el servidor", "error");
            }
        }
        // FUNCIÓN 8: Editar producto
        function editarProducto(id){
            const producto = productosOriginales.find(p => p.id === id);
            if (!producto){
                return;
            }
            document.getElementById("nuevoNombre").value = producto.nombre;
            document.getElementById("nuevaCategoria").value = producto.categoria;
            document.getElementById("nuevoPrecio").value = producto.precio;
            document.getElementById("nuevoStock").value = producto.stock;

            document.getElementById("btnAgregarProducto").dataset.editId = id;
            document.getElementById("btnAgregarProducto").textContent = "Actualizar Producto";
        }
        // FUNCIÓN 9: Mensaje
        function mostrarMensaje(texto, tipo){
            const div = document.getElementById("mensaje");
            div.textContent = texto;
            div.style.color = tipo === "success" ? "green" : "red";
            setTimeout(() => div.textContent = "", 3000);
        }
        // EVENT LISTENERS
        // TODO: Agregar event listeners para los botones y el input de búsqueda
        document.getElementById("aplicarFiltros").addEventListener("click", () => {
            aplicarFiltros();
        });
        document.getElementById("limpiarFiltros").addEventListener("click", () => {
            limpiarFiltros();
        });
        document.getElementById("buscar").addEventListener("input", () => {
            aplicarFiltros();
        });
        document.getElementById("ordenar").addEventListener("change", () => {
            ordenarProductos();
        });
    </script>
</body>
</html>