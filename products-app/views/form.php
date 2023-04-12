<main class="container">
  <h1>Nuevo Producto</h1>
  <form action="./use-cases/gestionar-alta.php">
    <fieldset class="campo">
      <label>Alimento <input name="tipo" type="radio" value="alimento"></label>
      <label>Utensilio <input name="tipo" type="radio" value="utensilio"></label>
    </fieldset>
    <div class="campo">
      <label for="nombre">Nombre del Producto</label>
      <input minlength="2" required id="nombre" type="text" name="nombre-producto" placeholder="producto">
    </div>
    <div class="campo">
      <label for="precio">Precio del Producto</label>
      <input required type="number" step="any" name="precio-producto" placeholder="precio €">
    </div>
    <button>Alta de producto</button>
  </form>
</main>