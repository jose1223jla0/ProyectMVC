<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$registrar = new Usuario__Controller();
$registrar->registrarUsuario__Cont();
?>
<br> <!-- Vistas/Modulos/registrar.php -->

<section class="bg-gray-50">
	<div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
		<div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 md:max-w-xl xl:p-0 dark:bg-gray-800 dark:border-gray-700">
			<div class="space-y-2 p-6  md:space-y-6 sm:p-8">
				<h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
					Create and account
				</h1>
				<form class="space-y-4 md:space-y-2" action="#" method="post">

					<div>
						<label for="" class="block  text-sm font-medium text-gray-900 dark:text-white">Your name</label>
						<input type="text" name="nombre__R" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Jose luis" required="">
					</div>

					<div>
						<label for="" class="block  text-sm font-medium text-gray-900 dark:text-white">Your last name</label>
						<input type="text" name="" id="apellido__R" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Andrade" required="">
					</div>

					<div>
						<label for="email" class="block  text-sm font-medium text-gray-900 dark:text-white">Your email</label>
						<input type="email" name="email__R" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
					</div>
					<div>
						<label for="password" class="block  text-sm font-medium text-gray-900 dark:text-white">Password</label>
						<input type="password" name="contrasena__R" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
					</div>
				
					<div>
						<label for="" class="block  text-sm font-medium text-gray-900 dark:text-white">Phone</label>
						<input type="confirm-password" name="telefono__R" id="confirm-password" placeholder="your number" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
					</div>

					<div class="flex items-start">
						<div class="flex items-center h-5">
							<input id="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
						</div>
						<div class="ml-3 text-sm">
							<label for="terms" class="font-light text-gray-500 dark:text-gray-300">I accept the <a class="font-medium text-primary-600 hover:underline dark:text-primary-500" href="#">Terms and Conditions</a></label>
						</div>
					</div>
					<button type="submit" class="w-full text-white bg-sky-600 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Create an account</button>
					<p class="text-sm font-light text-gray-500 dark:text-gray-400">
						Already have an account? <a href="index.php?ruta=ingreso" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login here</a>
					</p>
				</form>
			</div>
		</div>
	</div>
</section>