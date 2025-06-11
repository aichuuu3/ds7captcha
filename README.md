# ⋆˚꩜｡ UNIVERSIDAD TECNOLÓGICA DE PANAMÁ ⋆˚꩜｡
## Facultad de Ingeniería en Sistemas Computacionales  
### Licenciatura en Desarrollo y Gestión de Software  

---

**Asignatura:** Desarrollo de Software 7  
**Grupo:** 1GS132  
**Tema:** Validaciones de Formulario  

 **Año:** 2025  
 **Estudiante:** Beitia Bethel / *4-828-2349*  
 **Facilitadora:** Irina Fong  

---

### 🎯 Objetivo del laboratorio ⋆˚꩜｡
Que los estudiantes:
1.   Clonen un repositorio base desde GitHub.
2.   Analicen y comprendan el flujo de validación de formularios.
3.   Implementen sus propias validaciones adicionales.
4.   Hagan pruebas locales y suban evidencia o código final.
5.   Reciban retroalimentación y nota

---

## 📂 Archivos principales ⋆˚꩜｡

### ¿Qué validaciones se aplican en `ClaseValidacion.php`?

En este archivo se aplican validaciones del lado del servidor, como por ejemplito:

- Verificar que los campos requeridos no estén vacíos.  
- Validar el formato de los datos (por ejemplo: correos electrónicos, números).  
- Sanitizar los datos para evitar inyecciones.

Por último es que primero revisa que no falte ningún dato importante, y después que el correo esté bien escrito. Si algo falla, te tira un error y se detiene el programa.

---

### ¿Qué pasa si no se valida bien?

Si los datos no se validan correctamente, el servidor puede devolver un mensaje de error, los datos incorrectos no se procesan ni se guardan, y se evita el procesamiento de información maliciosa o incompleta. Es decir que si no valida bien, el proceso se detiene y se muestra el error para que el usuario corrija los datos.

---

### ¿Qué hace la función `fetch()` en `form-handler.js`?

La función `fetch()` permite enviar los datos del formulario al servidor utilizando AJAX, sin necesidad de recargar la página.  
Utiliza los métodos `POST` o `GET`, dependiendo de la configuración. Para concluir, el fetch manda el formulario al servidor y muestra la respuesta sin recargar la página.

---

### ¿Cómo se recibe y muestra la respuesta del servidor?

La respuesta se recibe como un objeto `Promise`, que puede ser procesado como texto o JSON.  
Luego, el resultado se muestra dinámicamente en la página actualizando el DOM, con mensajes de éxito o error según corresponda.
Otra respuesta mejor explicada seria esta:
Después de enviar el formulario con fetch, el servidor (por ejemplo, un archivo PHP) procesa los datos y devuelve una respuesta (puede ser un mensaje de éxito, error, etc.), para que luego se use .then(response => response.text()) para convertir la respuesta del servidor en texto plano, ya que ese texto se coloca dentro del elemento HTML con id response usando document.getElementById('response').innerHTML = data; de esa forma el usuario ve el mensaje del servidor directamente en la página, sin recargarla.

Otro ejemplo para descartar jejeje:
Si el servidor responde con “¡Formulario enviado correctamente!”, ese mensaje aparecerá en el área con id response del HTML.

---
