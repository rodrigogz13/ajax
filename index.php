<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Ejemplo AJAX con PHP</title>
</head>
<body>
  <h2>Consulta de usuario</h2>
  
  <label for="idUser">ID del usuario (1 a 5): </label>
  <input type="number" id="idUser" min="1" max="5">
  <button id="btnBuscar">Buscar</button>

  <div id="resultado" style="margin-top: 20px; font-family: sans-serif;"></div>

  <script>
    document.getElementById('btnBuscar').addEventListener('click', function() {
      const id = document.getElementById('idUser').value.trim();

      if (id === '') {
        alert('Por favor ingresa un ID');
        return;
      }

      // Crear el objeto XMLHttpRequest
      const xhr = new XMLHttpRequest();

      // Configurar la solicitud (GET con parámetro)
      xhr.open('GET', 'usuario.php?id=' + encodeURIComponent(id), true);

      // Cuando la respuesta llegue...
      xhr.onload = function() {
        if (xhr.status === 200) {
          document.getElementById('resultado').innerHTML = xhr.responseText;
        } else {
          document.getElementById('resultado').innerHTML = 'Error al obtener datos.';
        }
      };

      // Enviar la solicitud
      xhr.send();
    });
  </script>
</body>
</html>