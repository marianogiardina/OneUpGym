# OneUp GYM - Sitio Web Oficial

**Transforma tu vida en OneUp GYM** - El sitio web que conecta a nuestros miembros con la mejor experiencia fitness de la ciudad.

## 🏋️ ¿Por qué OneUp GYM?

OneUp GYM no es solo un gimnasio, es tu compañero en la transformación personal. Nuestro sitio web refleja nuestro compromiso con la excelencia, ofreciendo una experiencia digital tan excepcional como nuestras instalaciones físicas.

## 🚀 OneUp GYM - Más que un Gimnasio

**No solo ofrecemos equipos y clases, ofrecemos una transformación completa de vida.**

Nuestro sitio web es el primer paso en el viaje de transformación de nuestros miembros. Cada elemento está diseñado para inspirar, informar y motivar a las personas a tomar acción hacia una vida más saludable.

### **¿Listo para la Transformación?**

Visita nuestro sitio web y descubre por qué miles de personas han elegido OneUp GYM como su compañero en el fitness. 

**Tu mejor versión te está esperando.**

---

*OneUp GYM - Donde comienza tu transformación* 💪

## Aspectos Tecnicos

- Comando para ver el link para recuperar la contraseña

    - Select-String -Path "storage\logs\laravel.log" -Pattern "http://127\.0\.0\.1:8000/reset-password/" | Select-Object -Last 1 | ForEach-Object { if ($_.Line -match 'http://127\.0\.0\.1:8000/reset-password/[^"]*') { $matches[0] } }
