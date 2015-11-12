<div id="cotiza-ahora">
	<div class="pregunta-container" id="preguntas-container">
		<button class="prev nav-button" style="display:none;"><</button>
		<button class="next nav-button">></button>
		<div class="pregunta-1 pregunta">
			<p class="question">¿Cuántos <span>dispositivos deseas</span> <br />conectar a Internet en tu casa?</p>
			<span class="instrucciones">Selecciona la cantidad de dispositivos que deseas conectar</span>
			<form class="pregunta-items" method="POST" action="" id="pregunta-1">
				<div class="item">
			        <label for="p1-item-1" class="item-1">celular</label>
			        <div class="controller-container">
	       		 		<input type="text" name="p1-item-1" id="p1-item-1" value="0">
	       		 	</div>
	       		</div>

	       		<div class="item">
			        <label for="p1-item-2" class="item-2">tableta</label>
			        <div class="controller-container">
			        	<input type="text" name="p1-item-2" id="p1-item-2" value="0">
			        </div>
	       		</div>

				<div class="item">
			        <label for="p1-item-3" class="item-3">videojuegos</label>
			        <div class="controller-container">
			        	<input type="text" name="p1-item-3" id="p1-item-3" value="0">
			        </div>
	       		</div>
		        
		        <div class="item">
			        <label for="p1-item-4" class="item-4">computadora</label>

			        <div class="controller-container">
			        	<input type="text" name="p1-item-4" id="p1-item-4" value="0">
			        </div>
	       		</div>
		      	
		      	<div class="item">
			        <label for="p1-item-5" class="item-5">televisión</label>

			        <div class="controller-container">
			        	<input type="text" name="p1-item-5" id="p1-item-5" value="0">
			        </div>
	       		</div>


			</form>
		</div>


		<div class="pregunta-2 pregunta" style="display:none">
			<p class="question">¿<span>Cuántas personas</span> se conectarán al mismo <br />tiempo a Internet en tu hogar?</p>
			<form class="pregunta-items" method="POST" action="" id="pregunta-2">
				<div class="item">
					<div class="items">
				        <label for="p2-item-1" class="item-1">item-1</label>
				     </div>

			        <div class="controller-container p2">
	       		 		<input type="text" name="p2-item-1" id="p2-item-1" value="1">
	       		 	</div>
	       		</div>
	       	</form>
		</div>
		

		<div class="pregunta-3 pregunta" style="display:none">
			<p class="question">¿Qué es lo que más haces <br />cuando <span>estás en línea?</span></p>
			<span class="instrucciones">Debes seleccionar por lo menos una opción.</span>
			<form class="pregunta-items" method="POST" action="" id="pregunta-3">

				<div class="item">
			        <label class="item-1">Utilizar <span>redes sociales</span></label>
			        <div class="controller-container">
	       		 		<input type="checkbox" name="p3-item-1" id="p3-item-1" value="1">
	       		 		<label for="p3-item-1"><span></span></label>
	       		 	</div>
	       		</div>

	       		<div class="item">
			        <label class="item-2">Descargar <span>archivos</span></label>
			        <div class="controller-container">
			        	<input type="checkbox" name="p3-item-2" id="p3-item-2" value="2">
			        	<label for="p3-item-2" ><span></span></label>
			        </div>
	       		</div>

				<div class="item">
			        <label class="item-3">Navegar <span>en internet</span></label>
			        <div class="controller-container">
			        	<input type="checkbox" name="p3-item-3" id="p3-item-3" value="1">
			        	<label for="p3-item-3"><span></span></label>
			        </div>
	       		</div>
		        
		        <div class="item">
			        <label class="item-4">Jugar <span>en internet</span></label>

			        <div class="controller-container">
			        	<input type="checkbox" name="p3-item-4" id="p3-item-4" value="3">
			        	<label for="p3-item-4"><span></span></label>
			        </div>
	       		</div>
		      	
		      	<div class="item">
			        <label  class="item-5">Ver películas <span>y series</span></label>

			        <div class="controller-container">
			        	<input type="checkbox" name="p3-item-5" id="p3-item-5" value="3">
			        	<label for="p3-item-5"><span></span></label>
			        </div>
	       		</div>
		        
		        <div class="item">

			        <label  class="item-6">Realizar <span>Videollamadas</span></label>

			        <div class="controller-container">
			        	<input type="checkbox" name="p3-item-6" id="p3-item-6" value="2">
			        	<label for="p3-item-6"><span></span></label>
			        </div>
	       		</div>
			</form>
		</div>
		
		<div class="paquete-resultado pregunta pregunta-4" style="display:none;">
			<button class="change-paquete-resultado prev">Menos Internet</button>
			<button class="change-paquete-resultado next">Mas Internet</button>
			<div class="paquete paquete-elemental " style="display:none;">
				<p class="title">Tu paquete:</p>
				 <div class="product" data-product="maxConexion">
			        <div class="info-paquete" data-price="299">
			          <h3 class="titulo">Elemental <span>I</span></h3>
			          <span class="subtitulo">navega</span>
			          <p class="excerpt">Este paquete es para ti que navegas por toda la red, evisas todo el tiempo tus redes sociales y buscas siempre una experiencia nueva en el mundo digital.</p>

				      <div class="info-paquete-des">
					      <img src="<?php echo IMAGEPATH; ?>paq1.png" alt="maxConexión"/>
					      <div>
					          <p>Incluye</p>
					          <ul>
					            <li>Llamadas locales y larga distancia nacional ilimitadas Llamadas internacionales (E.U.A. y Canadá)
					            y Mundiales ilimitadas**</li>
					            <li>50 min.(3mb) celular 044 / 045</li>
					            <li>Paquete de 8 servicios digitales***</li>
					          </ul>
					      </div>
					   </div>
					</div>

				 </div>
			</div>

			<div class="paquete paquete-recargado" style="display:none;">
				<p class="title">Tu paquete:</p>

				<div class="product" data-product="maxDiversion">

			       <div class="info-paquete" data-price="320">
			          <h3 class="titulo">Recargado <span>III</span></h3>
			          <span class="subtitulo">reproduce</span>
			          <p class="excerpt">Este paquete es para ti que reproduces las mejores películas y series, escuchas música sin pausa y te diviertes con cada clic que das en Internet.</p>
			        
			        <div class="info-paquete-des">
			        	<img src="<?php echo IMAGEPATH; ?>paq2.png" alt="maxDiversión"/>
			        	<div>
				          <p>Incluye</p>
				          <ul>
				            <li>Llamadas locales y larga distancia nacional ilimitadas Llamadas internacionales (E.U.A. y Canadá)
				            y Mundiales ilimitadas**</li>
				            <li>100 min. celular 044 / 045</li>
				            <li>Paquete de 8 servicios digitales***</li>
				          </ul>
				    	</div>
			        </div>
			      </div>

			    </div>
			</div>

			<div class="paquete paquete-intenso" style="display:none;">
				<p class="title">Tu paquete:</p>
				<div class="product" data-product="maxDiversion">
				<div class="info-paquete" data-price="399">
		          <h3 class="titulo">Intenso <span>IIIIII</span></h3>
		          <span class="subtitulo">descarga</span>
		          <p class="excerpt">Este paquete es para ti que siempre descargas archivos de todo tipo, conectas varios dispositivos al mismo tiempo y tu vida se escribe en código binario.</p>
			        <div class="info-paquete-des">
			        	 <img src="<?php echo IMAGEPATH; ?>paq3.png" alt="maxMóvil"/>
			        	 <div>
				          <p>Incluye</p>
				          <ul>
				            <li>Llamadas locales y larga distancia nacional ilimitadas Llamadas internacionales (E.U.A. y Canadá)
				            y Mundiales ilimitadas**</li>
				            <li>100 min. celular 044 / 045</li>
				            <li>Paquete de 8 servicios digitales***</li>
				          </ul>
				        </div>
			        </div>
			     </div>

			</div>
		</div>

		<div class="combos" style="display:none;">
			<div class="combo-container">
				<div class="maxConexion" style="display:none;">
					<h3 class="titulo">Intenso <span>IIIIII</span></h3>
			        <span class="subtitulo">descarga</span>
				</div>

				<div class="maxDiversion" style="display:none;">
					<h3 class="titulo">Único</h3>
			        <span class="subtitulo">HBO</span>
			        <p class="returnCombo">Seleccionar otro paquete <span data-return="addmaxDiversion">maxDiversión</span></p>
				</div>

				<div class="maxMovil" style="display:none;">
					<h3 class="titulo">Total</h3>
			        <span class="subtitulo">100</span>
			        <p class="returnCombo">Seleccionar otro paquete <span data-return="addmaxMovil">maxMóvil</span></p>
				</div>
			</div>

			<div class="combo-costo">
				<p class="title-combo">El costo de tu paquete:</p>
				<p class="costo-total">$895.<span>00</span></p>
			</div>
		</div>

			<div class="buttons-container">
				<button id="gotocotizar">
					Volver a cotizar
				</button>

				<button id="gocombo">
					Crece más <br/>
					tu paquete
				</button>

				<button id="go-cotiza-form" data-href="<?php echo SITEURL; ?>cotiza-ahora">
					¡Me interesa!
				</button>
			</div>

			<div class="combo-buttons-container" style="display:none;">
				<button id="addmaxDiversion">
					Agrega televisión
					a tu paquete
				</button>

				<button id="addmaxMovil">
					Agrega celular
					a tu paquete
				</button>
			</div>

			<div class="combo-max-diversion combo-max" style="display:none;" data-group="maxDiversion">
				<button data-paquete="unico" data-price="299"><span class="titulo">Único</span></button>
				<button data-paquete="unicoHBO" data-price="399"><span class="titulo">Único</span> <span class="subtitulo">HBO</span></button>
				<button data-paquete="super" data-price="420"><span class="titulo">Súper</span> <span class="subtitulo"></span></button>
				<button data-paquete="superHBO" data-price="599"><span class="titulo">Súper </span><span class="subtitulo">HBO</span></button>
			</div>

			<div class="combo-max-movil combo-max" style="display:none;" data-group="maxMovil">
				<button data-paquete="funcional" data-price="199"><span class="titulo">Funcional</span></button>
				<button data-paquete="libre" data-price="299"><span class="titulo">Libre</span></button>
				<button data-paquete="total100" data-price="99"><span class="titulo">Total </span> <span class="subtitulo">100</span></button>
				<button data-paquete="total300" data-price="299"><span class="titulo">Total </span> <span class="subtitulo">300</span></button>
			</div>
			<div class="oferta-container">
				<a href="#">*Conoce toda nuestra oferta</a>
			</div>
		</div>

		<!-- <button class="setpaquete">Obtener Resultado</button> -->
		<div class="pagination-container">
			<span data-index="1" class="active"></span>
			<span data-index="2"></span>
			<span data-index="3"></span>
			<span data-index="4"></span>
		</div>

	</div>
</div>