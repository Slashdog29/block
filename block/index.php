<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Block Educativo - Guía Completa</title>
	<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
	<script id= "Mathjax-script" async
	src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chmml.js"></script>
    <link rel="stylesheet" href="../block/assents/css/estilos.css">
</head>
<body>
    <header>
       <seccion id="block"  class="nada">
	   <h1>BLOCK EDUCATIVO</h1>
        <p>Grupo 6 - Semestre IV, Seccion II</p>
		</seccion>
    </header>
        <section id="temas" class="seccion">
       
            <div class="contener_pisos">
                <div class="cartas_pisos">
                    <a href="#d"><div class="numero_pisos">Definición de Funciones Generatrices</div></a>
                    <div class="info_jefe">
                    Una Función Generatriz es una serie formal de potencias utilizada para codificar una sucesion de numeros, dada una sucesion (a0, a1, a2,...)<br>
                    </div>
                </div>
                
                <div class="cartas_pisos">
                    <a href="#e"><div class="numero_pisos">Ejemplos de Funciones Generatrices</div></a>
                    <div class="info_jefe">
                    <strong>Constante:</strong> <a href="#foto"><div class="re">A(x) = 1 + x + x^2 + x^3 + - x/(1 - x)^2</div></a> 
					</div>
					<div class="info_jefe">
                    <strong>Aritmética:</strong><a href="#foto_2"><div class="re"> A(x) = x + 2x^2 + 4x^3 + - x/(1 - x)^2</div></a> <br>
                    </div>
                </div>
                
              
                <div class="cartas_pisos">
                    <a href="#t"><div class="numero_pisos">Técnicas de Cálculo</div></a>
                    <div class="info_jefe">
                        <strong>#</strong> Manipulación Algebraica de Serie <br>
                        <strong>#</strong> Producto de Funciones Generatrices<br>
                        <strong>#</strong> Derivacion/Integración Formal<br>
                        <strong>#</strong> Identificación por comparación de coeficiente
                    </div>
                </div>
                
                <div class="cartas_pisos">
                    <a href="#p"><div class="numero_pisos">Particiones de Enteros</div></a>
                    <div class="info_jefe">
					La particion de un entero es una forma de escribir como suma de enteros positivos, sin importar el orden<br>
					<strong>P(x)= 1/[(1 - x)(1 - x^2)(1 - x^3)(1 - x^4)...] </strong>
                    </div>
                </div>
                
               
                <div class="cartas_pisos">
                    <a href="#f"><div class="numero_pisos">Función Generatriz Exponencial</div></a>
                    <div class="info_jefe">
                        La Función Generatriz Exponencial de una sucesión (an) es:<br>
                        <strong>A(x)= a0 + a1x/1! + a2x/2! + a3x/3! + ... =(an . x^n)/n!</strong>
             
                    </div>
                </div>
                
                <div class="cartas_pisos">
                    <a href="#o"><div class="numero_pisos">Operador de Suma</div></a>
                    <div class="info_jefe">
                        Este Operador se aplica en el contexto de funciones generatrices para extraer o manipular coeficiente.<br>
                        <strong>#Simbolo: [x^n] A(x)</strong> <br>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="gremios" class="seccion">    
            <div class="gremios">
                <div class="carta_gremio">
                    <div class="guild-banner" style="background: linear-gradient(90deg, #b21f1f, #8B0000);">
			<section id="d" > Definición de Funciones Generatrices</section>
                    </div>
                  <div class="info_gremio">
    <p>
        Una <strong>función generatriz</strong> es un recurso matemático que permite codificar una sucesión de números dentro de una expresión formal, generalmente una serie infinita.
        Esta herramienta transforma problemas relacionados con sucesiones en problemas de manipulación algebraica o funcional, lo cual puede simplificar considerablemente su estudio.
    </p>
    <p>
        Las funciones generatrices no solo encapsulan toda la información de una sucesión, sino que también permiten aplicar operaciones como sumas, productos, derivadas y transformaciones 
        que reflejan relaciones entre los términos de la sucesión original.
    </p>
    <p>
        Se utilizan ampliamente en <strong>combinatoria</strong>, <strong>análisis de algoritmos</strong>, <strong>teoría de números</strong> y <strong>resolución de recurrencias</strong>.
        A diferencia de una función común, una función generatriz se interpreta de manera formal, lo que significa que su convergencia no siempre es relevante: lo importante es cómo 
        sus coeficientes representan los términos de una sucesión.
    </p>
    <p>
        Existen distintos tipos de funciones generatrices, como las <strong>ordinarias</strong>, <strong>exponenciales</strong> y otras variantes, cada una adecuada según el tipo de problema 
        o estructura que se desea modelar o resolver.
    </p>
<div class="contenedor-imagenes">
    <img class="imagen" src="../block/assents/imagenes/d.png" alt="función generatriz izquierda">
    <img class="imagen" src="../block/assents/imagenes/f.png" alt="función generatriz derecha">
</div>
</div>

                </div>
                </div>
                <div class="gremios_2">
				<div class="carta_gremio">
                    <div class="guild-banner" style="background: linear-gradient(90deg, #1a2a6c, #4B0082);">
                        <section id="e" >Ejemplos de Funciones Generatrices</section>
                    </div>
                   <div class="info_gremio">
    <h3>✅ Ejemplo de Manera Constante</h3>
    <p>
        La función <strong>A(x) = 1 + x + x² + x³ - x / (1 - x)²</strong> se compone de la suma de un polinomio y un término racional:
    </p>
    <p>
        <strong>A(x) = P(x) + Q(x) = (1 + x + x² + x³) - x / (1 - x)²</strong>
    </p>
    <p>
        Esta función tiene un comportamiento interesante debido a la combinación de un polinomio cúbico y un término racional.
    </p>
    <p>
        Para <strong>geometrizarla de manera constante</strong>, puedes considerar transformaciones como desplazamientos verticales o ajustes que mantengan la continuidad dentro del dominio permitido.
    </p>
	<strong>Grafica Del Ejemplo Constante</strong>
	 <section id="foto"><img class="imagen_2" src="../block/assents/imagenes/e_1.png" alt="función generatriz izquierda"></a></section>
</div>

                </div>
				                <div class="carta_gremio">
                     <div class="guild-banner" style="background: linear-gradient(90deg, #1a2a6c, #4B0082);">
                        <section id="e" >Ejemplos de Funciones Generatrices</section>
                    </div>
                   <div class="info_gremio">
    <h3>✅ Ejemplo con Aritmética</h3>
    <p>
        Para resolver <strong>A(x) = x + 2x² + 4x³ - x / ((1 - x)²)</strong>, primero vamos a simplificar y combinar los términos.
    </p>
    <p>
        El primer paso es escribir <strong>A(x)</strong> con un denominador común. El polinomio <strong>x + 2x² + 4x³</strong> se puede reescribir así:
    </p>
    <p>
        <strong>A(x) = ((1 - x)²)(x + 2x² + 4x³) / (1 - x)² - x / (1 - x)²</strong>
    </p>
    <p>
        Ahora calculamos <strong>(1 - x)² (x + 2x² + 4x³)</strong>. Primero expandimos:
        <br>
        <strong>(1 - x)² = 1 - 2x + x²</strong>
    </p>
    <p>
        Multiplicamos por <strong>(x + 2x² + 4x³)</strong> usando la propiedad distributiva:
    </p>
    <p>
        <strong>(1 - 2x + x²)(x + 2x² + 4x³) =</strong><br>
        <strong>1(x + 2x² + 4x³) - 2x(x + 2x² + 4x³) + x²(x + 2x² + 4x³)</strong><br>
        <strong>= (x + 2x² + 4x³) - (2x² + 4x³ + 8x⁴) + (x³ + 2x⁴ + 4x⁵)</strong>
    </p>
    <p>
        Combinamos los términos semejantes:
        <br>
        <strong>= x + (2x² - 2x²) + (4x³ - 4x³ + x³) - 8x⁴ + 2x⁴ + 4x⁵</strong><br>
        <strong>= x + x³ - 6x⁴ + 4x⁵</strong>
    </p>
    <p>
        Sustituimos en la expresión original:
        <br>
        <strong>A(x) = (x + x³ - 6x⁴ + 4x⁵ - x) / (1 - x)²</strong>
    </p>
    <p>
        Simplificamos el numerador:
        <br>
        <strong>= x³ - 6x⁴ + 4x⁵</strong>
    </p>
    <p>
        Finalmente, factorizamos el numerador:
        <br>
        <strong>= -2x⁴(4 - 3x)</strong>
    </p>
    <p>
        Por lo tanto, la forma simplificada es:
        <br>
        <strong>A(x) = -2x⁴(4 - 3x) / (1 - x)²</strong>
    </p>
	<strong>Grafica Del Ejemplo De Aritmética</strong>
	 <section id="foto_2"><img class="imagen_3" src="../block/assents/imagenes/e_2.png" alt="función generatriz derecha"></a></section>
</div>

                </div>
			</div>
             <div class="gremios">
             <div class="carta_gremio">
    <div class="guild-banner" style="background: linear-gradient(90deg, #FF8C00, #FFD700); padding: 10px;">
        <section id="t"><h2>Técnicas de Cálculo</h2></section>
    </div>

    <div class="info_gremio">
        <p><strong>✅ Manipulación Algebraica de Series</strong><br>
        Consiste en sumar, restar, multiplicar o reordenar series para obtener nuevas funciones generatrices.<br>
        <em>Ejemplo:</em> Si <strong> A(x) = 1 + x + x^2 + x^3 + = /{1}{1 - x}</strong>, entonces <strong>A(x) = {x}{1 - x}</strong>.</p>

        <p><strong>✅  Producto de Funciones Generatrices</strong><br>
        Se utiliza cuando se modelan combinaciones de dos sucesiones. El producto representa la convolución de ambas.<br>
        <em>Ejemplo:</em> Si <strong>A(x) = a_n x^n </strong> y <strong>B(x) = b_n x^n</strong>, entonces <strong>C(x) = A(x)/B(x)</strong >genera <strong>c_n ={k=0}^{n} a_k b_{n-k}.</strong></p>

        <p><strong>✅  Derivación / Integración Formal</strong><br>
        Estas operaciones se aplican término a término para transformar la sucesión generada.<br>
        <em>Ejemplo:</em> Derivar <strong>{1}{1 - x} = 1 + x + x^2 + x^3 </strong> esto da <strong>{1}{(1 - x)^2} = 1 + 2x + 3x^2 + 4x^3 .</strong></p>

        <p><strong>✅  Identificación por Comparación de Coeficientes</strong><br>
        Se compara término a término una serie con su equivalente desarrollada para encontrar relaciones o resolver ecuaciones.<br>
        <em>Ejemplo:</em> Si se sabe que <strong>A(x) = {2x}{(1 - x)^2}</strong>, se puede expandir y observar que los coeficientes cumplen <strong>a_n = 2n.</strong></p>
    </div>
</div>

                
             <div class="carta_gremio">
    <div class="guild-banner" style="background: linear-gradient(90deg, #228B22, #006400);">
        <section id="p">Particiones de Enteros</section>
    </div>
    <div class="info_gremio">
        La partición de un entero es una forma de escribirlo como suma de enteros positivos, sin importar el orden.<br>
        <strong>P(x) = 1/[(1 - x)(1 - x^2)(1 - x^3)(1 - x^4)...] </strong><br>
        Esto significa que cada término en el producto representa la inclusión de un número entero en la suma. Por ejemplo, el término <strong>( (1 - x^k)^{-1} )</strong> permite incluir el entero <strong>( k )</strong> en las particiones.

        <h3>✅ Ejemplo:</h3>
        Consideremos la partición del número 4. Las diferentes formas de escribir 4 como suma de enteros positivos son:
        <ul>
            <strong><li>4</li>
            <li>3 + 1</li>
            <li>2 + 2</li>
            <li>2 + 1 + 1</li>
            <li>1 + 1 + 1 + 1</li></strong>
        </ul>
        Esto nos da un total de 5 particiones diferentes para el número 4.

        Para calcular el número de particiones de un entero <strong>( n )</strong>, podemos utilizar la función generadora mencionada, que se puede expandir para encontrar los coeficientes que representan el número de particiones para cada entero.</br>
     <section id="·"><img class="imagen_8" src="../block/assents/imagenes/particion.png" alt="función generatriz derecha"></a></section>
	</div>
</div>

                
                <div class="carta_gremio">
    <div class="guild-banner" style="background: linear-gradient(90deg, #4B0082, #800080); padding: 10px;">
        <section id="f"><h2>Función Generatriz Exponencial</h2></section>
    </div>

    <div class="info_gremio">
        <p>
            La <strong>función generatriz exponencial</strong> de una sucesión <strong>{a_n}</strong>  es una herramienta algebraica usada para representar y manipular sucesiones
            cuando los términos están divididos por <strong>( n! )</strong>. Su forma general es:
        </p>

        <p style="margin-left: 20px;">
            <strong>A(x) = a₀ + a₁·x/1! + a₂·x²/2! + a₃·x³/3! + ... = Σ (aₙ·xⁿ)/n!</strong>
        </p>

        <p>
            Esta función se utiliza comúnmente en análisis de algoritmos, conteo de permutaciones, procesos de Poisson y otras aplicaciones donde la sucesión está relacionada con factoriales.
        </p>

        <hr>

        <h4>✅ Ejemplo Resuelto</h4>
        <p><strong>Ejemplo:</strong> Sea la sucesión <strong>(a_n = n)</strong>. Hallar su función generatriz exponencial.</p>

        <p>
            Aplicamos la definición:
            <br>
            <strong>A(x) = Σ (n·xⁿ)/n! = Σ xⁿ / (n - 1)!</strong>
        </p>

        <p>
            Esto es equivalente a:
            <br>
            <strong>A(x) = x / (1 - x)²</strong>
        </p>

        <p>
            <em>Resultado:</em> La función generatriz exponencial para <strong>(a_n = n)</strong> es:<br>
            <strong>A(x) = x / (1 - x)²</strong>
			 <section id="·"><img class="imagen_9" src="../block/assents/imagenes/funcion.png" alt="función generatriz derecha"></a></section>
        </p>
    </div>
</div>

                
               <div class="carta_gremio">
    <div class="guild-banner" style="background: linear-gradient(90deg, #A52A2A, #800000); padding: 10px;">
        <section id="o"><h2>Operador de Suma</h2></section>
    </div>

    <div class="info_gremio">
        <p>
            El <strong>operador de suma</strong> se utiliza para extraer el coeficiente de un término específico dentro de una función generatriz.
            Es una notación muy útil en combinatoria y análisis de series.
        </p>

        <p>
            <em>Símbolo:</em> </strong>[xⁿ] A(x)</strong>
            <br>
            Esto significa: <em>“El coeficiente de xⁿ en el desarrollo en serie de A(x)”</em>.
        </p>

        <hr>

        <h4>✅ Ejemplo:</h4>
        <p>
            Sea la función generatriz: <strong>A(x) = 1 / (1 - x)</strong> <br>
            Sabemos que su expansión es: <strong>A(x) = 1 + x + x² + x³ + ...</strong><br>
            Entonces:
        </p>

        <p style="margin-left: 20px;">
            <strong>[x⁵] A(x) = 1</strong> (ya que el coeficiente de <strong>x⁵ es 1</strong>).
        </p>

        <hr>

        <h4>✅ Ejemplo con Coeficiente General</h4>
        <p>
            Si <strong>A(x) = 1 / (1 - x)²</strong>, entonces su expansión es: <br>
            <strong>A(x) = 1 + 2x + 3x² + 4x³ + ...</strong> <br>
            Por lo tanto:
        </p>

        <p style="margin-left: 20px;">
            <strong>[xⁿ] A(x) = n + 1</strong>
        </p>

        <img src="ruta/a/la/imagen/operador-suma-ejemplo.png" alt="Ejemplo operador de suma" style="width: 220px; margin-top: 10px; border: 1px solid #ccc; border-radius: 8px;">
    </div>
</div>

            </div>
            </section>
	</div>
    
    <footer>
        <p>&copy; 2025 Block Educativo  - Page no oficial</p>
        <p>Todos los derechos pertenecen a Slashdog29 "Creador de la Pagina" </p>
		<p>ING. Informatica, Seccion 2 Semestre IV</p>
       <a href="#" class="btn">Volver al Inicio</a>
    </footer>
</body>
</html>