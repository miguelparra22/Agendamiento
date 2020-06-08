<section>

    <div class="box">
        <h3>Ingresar un nuevo empleado</h3>
        <form action="./?c=empleado&a=agregar_empleado" method="POST">
            <div>
                <input type="text" name="nombre_empleado" required>
                <label>Nombre completo</label>
            </div>
            <div>
                <input type="text" name="correo_empleado" required>
                <label>Correo</label>
            </div>
            <div>
                <input type="text" name="contraseña_empleado" required>
                <label>Contraseña</label>
            </div>
            <div>
                
                
                <input type="text" name="especialidad_empleado" required>
                <label>Especialidad</label>
            </div>

            <div>
                
                
                <input type="hidden" name="estado_empleado" required value="2">
               
            </div>
            <!--div>
                <textarea required></textarea>
                <label>Especialidad</label>
            </div-->
 <input type="submit" value="Enviar" name="guardar">


        </form>
    </div>
</section>