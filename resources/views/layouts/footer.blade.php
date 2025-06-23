</div>  <!-- cierro el contenedor principal -->

<!-- Modal para eliminar registro -->
<div id="modal-confirmacion" class="modal" style="display:none;">
  <div class="modal-contenido">
    <i class="fa-solid fa-trash-can"></i>
    <h2>¿Eliminar?</h2>
    <p>Esta acción no se puede deshacer.</p>
    <div class="modal-acciones">
      <button class="btn-confirmar" onclick="confirmarEliminar()">Sí, eliminar</button>
      <button class="btn-cancelar" onclick="cerrarModalEliminar()">Cancelar</button>
    </div>
  </div>
</div>

<!-- Modal para cerrar sesión -->
<div id="modal-logout" class="modal" style="display:none;">
  <div class="modal-contenido">
    <i class="fa-solid fa-right-from-bracket"></i>
    <h2>Cerrar sesión</h2>
    <p>¿Está seguro que quiere cerrar sesión?</p>
    <div class="modal-acciones">
      <button class="btn-confirmar" onclick="confirmarLogout()">Sí, cerrar sesión</button>
      <button class="btn-cancelar" onclick="cerrarModalLogout()">Cancelar</button>
    </div>
  </div>
</div>

<!-- Form oculto para logout -->
<form id="logoutForm" action="{{ route('logout') }}" method="POST" style="display:none;">
    @csrf
</form>

        
<script>
  const toggleBtn = document.getElementById('toggleMenu');
  const menu = document.querySelector('.menu');

  toggleBtn.addEventListener('click', () => {
    menu.classList.toggle('mostrar');
  });

  // Funciones para modal de eliminar
    function abrirModalEliminar() {
      document.getElementById('modal-confirmacion').style.display = 'flex';
    }
    function cerrarModalEliminar() {
      document.getElementById('modal-confirmacion').style.display = 'none';
    }
    function confirmarEliminar() {
      cerrarModalEliminar();
      alert('Elemento eliminado'); // acá va la lógica real para eliminar
    }

    // Funciones para modal de logout
    function abrirModalLogout(event) {
      event.preventDefault(); // para evitar navegación al hacer click en el <a>
      document.getElementById('modal-logout').style.display = 'flex';
    }
    function cerrarModalLogout() {
      document.getElementById('modal-logout').style.display = 'none';
    }
    function confirmarLogout() {
      document.getElementById('logoutForm').submit();
    }


</script>


</body>
</html>
