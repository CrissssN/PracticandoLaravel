<!-- Formulario Blade View -->
<form action="/ToDoList/public/Formulario" method="post">
    @csrf
    <input type="text" name="name" id="name" placeholder="Nombre:" required>
    <input type="email" name="email" id="email" placeholder="Email:" required>
    <input type="password" name="password" id="password" placeholder="Contraseña:" required>
    <button type=submit>Enviar</button>
    Hola Mundo
</form>