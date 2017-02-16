<!DOCTYPE html>
<HTML lang="es">
	<HEAD>
		<TITLE>Administración Hotel</TITLE>
		<?php //Metaetiquetas globales importadas
				include ('metaetiquetas-generales.php');
			?>
		<META name='revised' content='Tuesday, February 13th, 2017, 13:22 pm' /><!--Última revisión del sitio-->
	</HEAD>

	<BODY>
		<?php
			include ('titulo.php');
			include ('menu-principal.php');
			echo '<DIV id="cajaContenido">';
			echo '<DIV id="cajaEntradas">';
		?>

		<ARTICLE>
			<HEADER>
				<H2>CLIENTES</H2>
				<P>Detalles de clientes registrados</P>
				<TIME datetime="2017-02-14T01:20:00+01:00"><SMALL>Último cliente registrado 14-02-2017 a las 01:20</SMALL></TIME>
			</HEADER>

			<SECTION>
				<H3>Con reserva en este momento</H3>
				<P>Clientes que tienen reserva</P>
				<TABLE>
					<TR>
						<TD>Nombre</TD>
						<TD>Teléfono</TD>
						<TD>Ciudad</TD>
						<TD>Nº Habitación</TD>
					</TR>
					<?php

					?>
				</TABLE>
			</SECTION>

			<SECTION>
				<H3>Sin reserva en este momento</H3>
				<P>Clientes que tienen no tienen reserva</P>
				<TABLE>
					<TR>
						<TD>Nombre</TD>
						<TD>Teléfono</TD>
						<TD>Ciudad</TD>
						<TD>Nº Habitación</TD>
					</TR>
					<?php

					?>
				</TABLE>
			</SECTION>
		</ARTICLE>

		<?php
			echo '</DIV>';
			echo '</DIV>';
			include ('footer.php');
		?>
	</BODY>
</HTML>
