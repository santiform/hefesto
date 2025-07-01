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

<!-- Modal para enviar informe -->
<div id="modal-informe" class="modal" style="display:none;">
  <div class="modal-contenido">
    <i class="fa-solid fa-paper-plane"></i>
    <h2>¿Enviar informe?</h2>
    <p>Se guardará en la base de datos.</p>
    <div class="modal-acciones">
      <button type="button" class="btn-confirmar" onclick="confirmarEnviarInforme()">Sí, enviar</button>
      <button type="button" class="btn-cancelar" onclick="cerrarModalInforme()">Cancelar</button>
    </div>
  </div>
</div>


<!-- Form oculto para logout -->
<form id="logoutForm" action="{{ route('logout') }}" method="POST" style="display:none;">
    @csrf
</form>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const toggleBtn = document.getElementById('toggleMenu');
    const menu = document.querySelector('.menu');

    if (toggleBtn && menu) {
      toggleBtn.addEventListener('click', () => {
        menu.classList.toggle('mostrar');
      });
    }

    // MODAL: ELIMINAR
    window.abrirModalEliminar = function () {
      document.getElementById('modal-confirmacion').style.display = 'flex';
    };

    window.cerrarModalEliminar = function () {
      document.getElementById('modal-confirmacion').style.display = 'none';
    };

    window.confirmarEliminar = function () {
      cerrarModalEliminar();
      alert('Elemento eliminado'); // Acá va la lógica real para eliminar
    };

    // MODAL: LOGOUT
    window.abrirModalLogout = function (event) {
      event.preventDefault();
      document.getElementById('modal-logout').style.display = 'flex';
    };

    window.cerrarModalLogout = function () {
      document.getElementById('modal-logout').style.display = 'none';
    };

    window.confirmarLogout = function () {
      document.getElementById('logoutForm').submit();
    };

    // MODAL: ENVIAR INFORME
    let formAConfirmar = null;

    window.abrirModalInforme = function (event) {
      event.preventDefault(); // Previene envío inmediato
      formAConfirmar = event.target.closest('form');
      document.getElementById('modal-informe').style.display = 'flex';
    };

    window.cerrarModalInforme = function () {
      document.getElementById('modal-informe').style.display = 'none';
      formAConfirmar = null;
    };

    window.confirmarEnviarInforme = function () {
      document.getElementById('modal-informe').style.display = 'none';
      if (formAConfirmar) {
        formAConfirmar.submit();
      }
    };
  });
</script>

</body>
</html>
